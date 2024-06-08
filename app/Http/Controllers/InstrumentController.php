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
        'instruments' => 'required|array',
        'instruments.*.instrument_id' => 'required|exists:instruments,instrument_id',
        'instruments.*.instrument_level' => 'required|integer|between:1,4'
    ]);

    // Si la validación falla, devolver un error
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
    }

    $userId = $request->user_id;
    $instruments = $request->instruments;
    $processedInstruments = [];

    foreach ($instruments as $instrument) {
        $instrumentId = $instrument['instrument_id'];
        $instrumentLevel = $instrument['instrument_level'];

        // Verificar si la combinación de user_id e instrument_id ya existe
        $exists = DB::table('user_instruments')
            ->where('user_id', $userId)
            ->where('instrument_id', $instrumentId)
            ->exists();

        if ($exists) {
            // Actualizar el nivel del instrumento existente
            DB::table('user_instruments')
                ->where('user_id', $userId)
                ->where('instrument_id', $instrumentId)
                ->update(['instrument_level' => $instrumentLevel]);
        } else {
            // Insertar la nueva relación user_id, instrument_id e instrument_level
            DB::table('user_instruments')->insert([
                'user_id' => $userId,
                'instrument_id' => $instrumentId,
                'instrument_level' => $instrumentLevel
            ]);
        }

        $processedInstruments[] = $instrumentId;
    }

    // Devolver una respuesta de éxito con los instrumentos procesados
    if (count($processedInstruments) > 0) {
        return response()->json(['message' => 'Instruments processed for user', 'instruments' => $processedInstruments]);
    } else {
        return response()->json(['message' => 'No instruments were processed for user']);
    }
}



    public function getInstrumentsUser(Request $request)
    {
        // Validar la entrada
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,user_id'
        ]);

        // Si la validación falla, devolver un error
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $userId = $request->user_id;

        // Obtener los instrumentos del usuario
        $instruments = DB::table('user_instruments')
            ->join('instruments', 'user_instruments.instrument_id', '=', 'instruments.instrument_id')
            ->where('user_id', $userId)
            ->select('instruments.instrument_id', 'instruments.instrument', 'user_instruments.instrument_level')
            ->get();


        // Si el usuario no tiene instrumentos, devolver un error 404
        if (count($instruments) === 0) {
            return response()->json(['error' => 'User has no instruments'], 404);
        }

        return response()->json($instruments);

    }

    
    

}