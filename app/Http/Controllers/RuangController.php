<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RuangController extends Controller
{
    public function updateProdi(Request $request, $noruang)
    {

        // Validate input
        $validated = $request->validate([
            'prodi' => 'required|string|max:255',
        ]);

        try {
            // Find the room by no ruang
            $room = Ruang::where('noruang', $noruang)->first();

            if (!$room) {
                return response()->json(['message' => 'Room not found'], 404);
            }

            // Update the prodi
            $room->prodi = $validated['prodi'];
            $room->save();

            return response()->json(['message' => 'Prodi updated successfully!'], 200);
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error($e->getMessage());
            return response()->json(['message' => 'Error updating Prodi'], 500);
        }
    }
}

