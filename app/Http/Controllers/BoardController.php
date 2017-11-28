<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BoardController extends Controller
{
    public function getIndex(){
        return "排行榜";
    }
    public function getName(){
        return Route::currentRouteAction();
    }
}
