<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateusersRequest;
use App\Http\Requests\UpdateusersRequest;
use App\Repositories\usersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use Flash;
use Response;
use Hash;

class usersController extends Controller
{
    /** @var  usersRepository */
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->all();

        
        


        

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new users.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created users in storage.
     *
     * @param CreateusersRequest $request
     *
     * @return Response
     */
    public function store(CreateusersRequest $request)
    {
        $teste=$request->all();
       
        DB::table('users')->insert(

            ['email' => $request->email, 
            'name' =>  $request->name,
            'password'=>$request->password,
            'cpf'=> $request->cpf
           
            ]
        );
        
        Flash::success('Usuário adicionado com sucesso');
        return redirect()->back();
    }

    /**
     * Display the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

    
        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('users', $users);
    }

    /**
     * Update the specified users in storage.
     *
     * @param int $id
     * @param UpdateusersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusersRequest $request)
    {

        $users = $this->usersRepository->find($id);

    
        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

          $requestAll = $request->all();

      
          
        //tamanho de caracters do password
        $tam=strlen($requestAll['password']);
        //Se o tamanho for maior do que 15 caracters
        if($tam>15){
            $user = $this->usersRepository->update($requestAll, $id);
            Flash::success('Usuário atualizado com sucesso.');
            return redirect(route('users.index'));
        }else{
            $requestAll['password'] = Hash::make($request->password);
            $user = $this->usersRepository->update($requestAll, $id);
            Flash::success('Usuário atualizado com sucesso.');
            return redirect(route('users.index'));

        }

    }

    /**
     * Remove the specified users from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        // $this->usersRepository->delete($id);
        $users ->forceDelete();


        Flash::success('Usuário deletado com sucesso.');

        return redirect(route('users.index'));
    }
}
