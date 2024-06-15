<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Band;

use App\Models\User;

use App\Models\Concerts;

use App\Models\BandRequest;

class SearchController extends Controller
{
    public function searchUserBands(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'search' => 'required|string|max:50',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $search = $request->input('search');

        // Buscar usuarios por username y solo se selecciona el id , el nombre y el icono
        $users = DB::table('users')
            ->where('username', 'like', "%$search%")
            ->select('user_id', 'username', 'icon')
            ->get();

        // Buscar bandas por nombre y solo se selecciona el id y el nombre
        $bands = DB::table('bands')
            ->where('name', 'like', "%$search%")
            ->select('band_id', 'name')
            ->get();


        return response()->json([
            'results' => $users->concat($bands)
        ], 200);
    }


    public function getUserDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $username = $request->input('username');

        // Buscar usuario por username
        $user = User::where('username', $username)->first();

        // Se elimina el user id, el password_hash y los campos de fecha
        unset($user->user_id);
        unset($user->password_hash);
        unset($user->created_at);
        unset($user->updated_at);


        if ($user) {
            return response()->json([
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

    }

    public function getBandDetails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'band_id' => 'required|integer',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $band_id = $request->input('band_id');

        // Buscar banda por id e incluye los datos del owner
        $band = Band::where('bands.band_id', $band_id)
        ->join('users', 'bands.user_id', '=', 'users.user_id')->first();
        
        //conciertos
        $concerts = Concerts::where('band_id', $band_id)->first();

        //requests
        $requests = BandRequest::where('band_id', $band_id)->first();
        
        // Se elimina el band id y los campos de fecha
        unset($band->band_id);
        unset($band->created_at);
        unset($band->updated_at);

        if ($band) {
            return response()->json([
                'band' => $band,
                'concerts' => $concerts,
                'requests' => $requests
            ], 200);
        } else {
            return response()->json([
                'message' => 'Band not found'
            ], 404);
        }
    }

    public function getBandMembers(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'band_id' => 'required|integer',
        ]);

        // Si falla la validación
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $band_id = $request->input('band_id');

        // Buscar miembros de la banda por id de banda
        $members = DB::table('band_members')
            ->where('band_id', $band_id)
            ->select('name', 'instrument','id')
            ->get();
        return response()->json([
            'members' => $members
        ], 200);
    }

}