<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class InstrumentController extends Controller
{

    public function getInstruments()
    {
        $instruments = DB::table('instruments')->get();
        return response()->json($instruments);
    }

    public function addInstrumentUser(Request $request)
{
    // Validar la entrada
    $validator = Validator::make($request->all(), [
        'user_id' => 'required|exists:users,user_id',
        'instrument_ids' => 'required|array',
        'instrument_ids.*' => 'exists:instruments,instrument_id'
    ]);

    // Si la validación falla, devolver un error
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
    }

    $userId = $request->user_id;
    $instrumentIds = $request->instrument_ids;
    $insertedInstruments = [];

    foreach ($instrumentIds as $instrumentId) {
        // Verificar si la combinación de user_id e instrument_id ya existe
        $exists = DB::table('user_instruments')
            ->where('user_id', $userId)
            ->where('instrument_id', $instrumentId)
            ->exists();

        if (!$exists) {
            // Insertar la nueva relación user_id e instrument_id
            DB::table('user_instruments')->insert([
                'user_id' => $userId,
                'instrument_id' => $instrumentId
            ]);

            $insertedInstruments[] = $instrumentId;
        }
    }

    // Devolver una respuesta de éxito con los instrumentos agregados
    if (count($insertedInstruments) > 0) {
        return response()->json(['message' => 'Instruments added to user', 'instruments' => $insertedInstruments]);
    } else {
        return response()->json(['message' => 'No new instruments were added to user']);
    }
}

}