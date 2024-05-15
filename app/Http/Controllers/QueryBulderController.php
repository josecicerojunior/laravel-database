<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class QueryBulderController extends Controller
{
    public function tests()
    {
            $users = DB::table('users')->get();
            
    }
}
