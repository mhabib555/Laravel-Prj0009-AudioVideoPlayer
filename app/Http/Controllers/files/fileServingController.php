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

        $filename = storage_path('app/audios/'.DIRECTORY_SEPARATOR.($file));
        $filesize = (int) File::size($filename);

        $file = File::get($filename);

        $response = Response::make($file, 200);
        $response->header('Content-Type', 'audio/mpeg');
        $response->header('Content-Length', $filesize);
        $response->header('Accept-Ranges', 'bytes');
        $response->header('Content-Range', 'bytes 0-'.$filesize.'/'.$filesize);

        
        return $response;

        // return response()->file(storage_path('app/audios/'.DIRECTORY_SEPARATOR.($file))); 
    }
}
