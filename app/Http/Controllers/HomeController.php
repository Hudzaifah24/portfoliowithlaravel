<?php

namespace App\Http\Controllers;

use App\Models\Like;

class HomeController extends Controller
{
    public function index()
    {
        $agent = request()->header('User-Agent');
        $countLikes = Like::first()->count ?? 0;
        $defaultValue = $countLikes > 0 ? $countLikes : 0;

        if (strpos($agent, "curl") !== false) {
            return response(view("terminal", [
                'countLikes' => $defaultValue
            ]))->header('Content-Type', 'text/plain');
        }

        return view("browser", [
            'defaultValue' => $defaultValue
        ]);
    }
}
