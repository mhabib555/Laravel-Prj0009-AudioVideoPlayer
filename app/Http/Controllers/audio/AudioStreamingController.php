<?php

namespace App\Http\Controllers\audio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tracks;
use App\Http\Resources\audio\AudioStreamingCollection;


class AudioStreamingController extends Controller
{

    public function index(){
        return new AudioStreamingCollection(Tracks::all());
    }

}
