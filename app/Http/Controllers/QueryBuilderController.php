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
            // $insere = DB::table('users')->insert([
            //                 [
            //                 'name' => 'Matheus Fellipe',
            //                 'email' => 'matheus.fellipe@mail.com',
            //                 'password' => bcrypt('123456')
            //                 ],
            //             ]);
            //             dd($insere);
                
            // Atualiazação
                // $update = DB::table('users')->where('email','matheus.fellipe@mail.com')->update([
                //     'name' => 'Name update',
                //     'email' => 'mail-update@email.com'
                // ]);
      
            
            // Delete apagando o ID = 3
            $delete = DB::table('users')->where('id', '3')->delete();

        

        }
        // Realizando consulta no banco usando a faça
        public function consulta(){
        // return DB::table('users')->select('id', 'name', 'email')->get(); 
        // Utilizando o método pluck para realizar consultas.
            return DB::table('users')->pluck('name');
        }
    }         

        
