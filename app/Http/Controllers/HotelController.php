<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HotelController extends Controller
{

    public function search(){

        return response()->json([], Response::HTTP_OK);
    }

}
