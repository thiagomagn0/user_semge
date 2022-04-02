<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Flash;

class usersCreateController extends Controller
{
    public function save(Request $request){

        $input=$request->all();
       
        $input['password'] = \Hash::make($input['password']); // ou bcrypt($data['senha']);
     
        DB::table('users')->insert(

            ['email' => $input['email'], 
            'name' =>  $input['name'],
            'password'=> $input['password'],
            'cpf'=> $input['cpf']
        
            ]   
        );
            $ultimoUser = DB::table('users')
            ->orderby('id','desc')
            ->limit(1)
            ->get();

            DB::table('addresses')->insert(

                ['street' =>  $input['street'],
                'complement'=> $input['complement'],
                'number'=> $input['number'],
                'state'=> $input['state'],
                'zip_code'=> $input['cep'],
                'country'=> $input['country'],
                'city'=> $input['city'],
                'user_id'=> $ultimoUser[0]->id,

                ]
                
        );
       

        Flash::success('Usuário adicionado com sucesso');
        return redirect(route('users.index'));  

    }
}
