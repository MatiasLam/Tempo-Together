<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

use App\Models\Concert;

class ConcertController extends Controller
{
    public function addConcert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'band_id' => 'required|integer',
            'title' => 'required|string|max:70', 
            'date' => 'required|date',
            'time' => 'required|string|max:10',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
            'place' => 'required|string|max:100',
            'desc' => 'string|max:1000',
            'poster' => 'nullable|string|max:255'

        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Crear una nueva instancia de Concert usando los datos validados
            $concert = Concert::create($request->all());

            return response()->json([
                'message' => 'Concert added successfully',
                'concert' => $concert
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error adding concert',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getConcertByDistance(Request $request) {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,user_id',
            'distance' => 'required|numeric|min:0',
        ]);

        // Si la validación falla, devolver errores
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Obtener la latitud y longitud del usuario
            $user = User::where('user_id', $request->input('user_id'))->first();
            $userLatitude = $user->latitude;
            $userLongitude = $user->longitude;
            $distance = $request->input('distance');

            // Obtener los conciertos que están a una distancia menor o igual a la especificada
            $concerts = Concert::select(DB::raw('*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance', [$userLatitude, $userLongitude, $userLatitude]))
                ->having('distance', '<=', $distance)
                ->get();

            return response()->json([
                'message' => 'Concerts found',
                'concerts' => $concerts
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error finding concerts',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getConcertsOrderDistance(Request $request) {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,user_id',
        ]);
    
        // Si la validación falla, devolver errores
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
    
        try {
            // Obtener la latitud y longitud del usuario
            $user = User::where('user_id', $request->input('user_id'))->first();
            $userLatitude = $user->latitude;
            $userLongitude = $user->longitude;
    
            // Obtener los conciertos ordenados por distancia
            $concerts = Concert::selectRaw(
                '*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance',
                [$userLatitude, $userLongitude, $userLatitude]
            )
            ->orderBy('distance')
            ->get();
    
            return response()->json([
                'message' => 'Concerts found',
                'concerts' => $concerts
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error finding concerts',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
}

