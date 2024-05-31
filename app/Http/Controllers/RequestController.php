<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\BandRequest;

class RequestController extends Controller
{
    public function addRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'band_id' => 'required|integer',
            'title' => 'required|string|max:50', 
            'new_member_instrument' => 'required|string|max:30',
            'instrument_level' => 'required|string|max:20',
            'description' => 'nullable|string|max:1000',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Crear una nueva instancia de BandRequest usando los datos validados
            $bandRequest = BandRequest::create($request->all());

            return response()->json([
                'message' => 'Request added successfully',
                'request' => $bandRequest
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error adding request',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function getRequestByDistance(Request $request) {
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
    
            // Obtener las solicitudes que estén a una distancia menor o igual a la indicada
            $requests = DB::select(
                "SELECT br.*, b.name as band_name, b.latitude, b.longitude, 
                    (6371 * acos(cos(radians(?)) * cos(radians(b.latitude)) * cos(radians(b.longitude) - radians(?)) + sin(radians(?)) * sin(radians(b.latitude)))) AS distance
                FROM band_requests br
                JOIN bands b ON br.band_id = b.band_id
                HAVING distance <= ?",
                [$userLatitude, $userLongitude, $userLatitude, $distance]
            );
    
            return response()->json([
                'message' => 'Requests found',
                'requests' => $requests
            ], 200);
    
        } catch (\Exception $e) {
            // Devolver error en caso de excepción
            return response()->json([
                'message' => 'Error finding requests',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    //ahora haz una funcion llamada getRequestsOrderDistance para obtener las todas las solicitudes ordenadas por la distanacia de un usuario

    public function getRequestsOrderDistance(Request $request) {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer|exists:users,user_id', // Cambiado a 'user_id'
            'page' => 'nullable|integer|min:1', // Añadido para recibir el número de página
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
            $user = User::where('user_id', $request->input('user_id'))->first(); // Cambiado a 'user_id'
            $userLatitude = $user->latitude;
            $userLongitude = $user->longitude;
    
            // Obtener el total de solicitudes
            $totalRequests = DB::table('band_requests')->count();
    
            // Calcular el número de páginas
            $perPage = 20; // Número de solicitudes por página
            $totalPages = ceil($totalRequests / $perPage);
    
            // Obtener las solicitudes ordenadas por distancia con todos los datos de la banda
            $requests = DB::select(
                "SELECT br.id, br.band_id, br.title, br.new_member_instrument, br.instrument_level, br.description as request_description, br.created_at, br.updated_at,
                        b.name, b.latitude, b.longitude,
                        (6371 * acos(cos(radians(?)) * cos(radians(b.latitude)) * cos(radians(b.longitude) - radians(?)) + sin(radians(?)) * sin(radians(b.latitude)))) AS distance
                 FROM band_requests br
                 JOIN bands b ON br.band_id = b.band_id
                 ORDER BY distance
                 LIMIT ? OFFSET ?",
                [$userLatitude, $userLongitude, $userLatitude, $perPage, ($request->input('page', 1) - 1) * $perPage]
            );
    
            return response()->json([
                'message' => 'Requests found',
                'requests' => $requests,
                'total_pages' => $totalPages // Añadido el total de páginas
            ], 200);
    
        } catch (\Exception $e) {
            // Devolver error en caso de excepción
            return response()->json([
                'message' => 'Error finding requests',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    
    
    
    
    
    

    

    
}
