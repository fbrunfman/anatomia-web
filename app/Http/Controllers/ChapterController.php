<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::with('screens')->get();

        return response()->json([
            'code' => 200,
            'data' => $chapters
        ]);
    }

}
