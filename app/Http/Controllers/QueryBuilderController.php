<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QueryBuilderController extends Controller

    {
        public function tests()
        {

            // Verificação de registros no banco de dados
            $users = DB::table('users')->get();
            dd(DB::table('users')->get());
         
    
        }

    }         

        
