<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function counting()
    {
        $result = [];
        $count = 0;

        try {
            $like = Like::first();

            if (!$like) {
                Like::create([
                    'count' => 1
                ]);

                $count = 1;
            } else {
                $like->update([
                    'count' => $like->count + 1
                ]);

                $count = $like->count;
            }

            $result = [
                "message" => "Liked successfully",
                "code" => 200,
                "count" => $count
            ];
        } catch (\Throwable $th) {
            $result = [
                "message" => "Failed to like",
                "code" => 500,
                "error" => $th->getMessage()
            ];
        }

        return response()->json($result, $result['code']);
    }
}
