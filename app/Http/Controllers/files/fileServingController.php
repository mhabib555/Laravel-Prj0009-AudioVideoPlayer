<?php

namespace App\Http\Controllers\files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use File;
use Response;

class fileServingController extends Controller
{
    public function serveTrack($file){
        if(!Storage::disk('audioFiles')->exists($file)){
            abort(404);
        }

        return response()->file(storage_path('app/audios/'.DIRECTORY_SEPARATOR.($file))); 
    }
}
