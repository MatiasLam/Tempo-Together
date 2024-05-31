<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Band;
use App\Models\BandMember;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller{
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:70',
            'password' => 'required|string|min:8|max:18',
        ]);
    
       // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
      
        $user = User::where('email', $request->input('email'))->first();
        if($user && Hash::check($request->input('password'), $user->password_hash)){
            return response()->json([
                'message' => 'Login successful',
                'user' => $user
            ]);
        } else {
            return response()->json([
                'message' => 'Login failed'
            ], 401);
        }

    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:12',
            'name' => 'required|string|max:20',
            'lastname' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'age' => 'required|integer|max:99',
            'type' => 'required|string|in:musician,band',
            'telephone' => 'string|min:9|max:9|unique:users',
            'latitude' => 'numeric|between:-90,90',
            'longitude' => 'numeric|between:-180,180',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = new User();
            $user->username = $request->input('username');
            $user->name = $request->input('name');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->password_hash = Hash::make($request->input('password'));
            $user->age = $request->input('age');
            $user->type = $request->input('type');

            if ($request->has('telephone')) {
                $user->telephone = $request->input('telephone');
            }

            // Guardar las coordenadas
            if ($request->has('latitude') && $request->has('longitude')) {
                $latitude = $request->input('latitude');
                $longitude = $request->input('longitude');
                $user->latitude = $latitude;
                $user->longitude = $longitude;
            }

            $user->save();

            return response()->json([
                'user' => $user
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'User not created',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function registerBand(Request $request) {
        // Validación de los datos recibidos
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:12|min:3',
            'user_id' => 'required|integer|exists:users,user_id|unique:bands,user_id',
            'description' => 'required|string|max:120',
            'latitude' => 'numeric|between:-90,90',
            'longitude' => 'numeric|between:-180,180',
        ]);
    
        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            // Creación de una nueva instancia de Band
            $band = new Band();
            $band->name = $request->input('name');
            $band->description = $request->input('description');
            
            if ($request->has('latitude') && $request->has('longitude')) {
                $latitude = $request->input('latitude');
                $longitude = $request->input('longitude');
                $band->latitude = $latitude;
                $band->longitude = $longitude;
            }
            
            $band->user_id = $request->input('user_id');  // Asocia la banda al usuario
            
            $band->save(); // Guardar la instancia en la base de datos
            
            // Actualizar el campo 'type' del usuario a 'band'
            $user = User::find($request->input('user_id'));
            $user->type = 'band';
            $user->save();
            
            // Si la respuesta es exitosa se devuelve el id de la banda
            return response()->json([
                'message' => 'Band created',
                'band' => $band
            ], 201);
            
        } catch (\Exception $e) {
            // Manejo de excepciones
            return response()->json([
                'message' => 'Band not created',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    

    public function addMembersBand(Request $request) {
        $validator = Validator::make($request->all(), [
            'band_id' => 'required|integer|exists:bands,band_id',
            'members' => 'required|array',
            'members.*.name' => 'required|string',
            'members.*.instrument' => 'required|string',
            'members.*.age' => 'required|integer',
            'members.*.instrument_level' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            $band = Band::find($request->input('band_id'));
            if (!$band) {
                return response()->json([
                    'message' => 'Band not found'
                ], 404);
            }
    
            $members = $request->input('members');
            foreach ($members as $member) {
                $bandMember = new BandMember();
                $bandMember->band_id = $request->input('band_id');
                $bandMember->name = $member['name'];
                $bandMember->instrument = $member['instrument'];
                $bandMember->age = $member['age'];
                $bandMember->instrument_level = $member['instrument_level'];
                $bandMember->save();
            }
    
            return response()->json([
                'message' => 'Band members added'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Band members not added',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    public function userProfile(Request $request){}

}
