<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class QueryBuilderController extends Controller

    {
        public function tests()
        {

            // Verificação de registros no banco de dados
            // $users = DB::table('users')->get();
            // dd(DB::table('users')->get());
        
            // Inserindo registro no banco de dados
            $insere = DB::table('users')->insert([
                            [
                            'name' => 'Matheus Fellipe',
                            'email' => 'matheus.fellipe@mail.com',
                            'password' => bcrypt('123456')
                            ],
                        ]);
                        dd($insere);
    
        }

    }         

        
