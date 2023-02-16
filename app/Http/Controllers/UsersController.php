<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Repositories\UsersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends AppBaseController
{
    /** @var  UsersRepository */
    private $usersRepository;

    public function __construct(UsersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the Users.
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
     * Show the form for creating a new Users.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created Users in storage.
     *
     * @param CreateUsersRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersRequest $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password-retype' => 'required',
            'role' => 'required',
        ]);
        if ($input['password'] != $input['password-retype']) {
            Flash::error('The password confirmation does not match.');
        } else {
            $input =  ([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => $input['role'],
                '_token' => $input['_token']
            ]);
            $users = $this->usersRepository->create($input);

            Flash::success('Users saved successfully.');
            return redirect(route('users.index'));
        }
    }

    /**
     * Display the specified Users.
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
     * Show the form for editing the specified Users.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);
        // var_dump($users);
        // exit();

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('users', $users);
    }

    /**
     * Update the specified Users in storage.
     *
     * @param int $id
     * @param UpdateUsersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        $req = $request->all();

        if ($req['password'] == NULL) {
            //  echo 'asdasd';
            $request['password'] = $users->password;
            Flash::success('Users updated successfully.');
        } else {
            if ($request['password'] != $request['password-retype']) {
                Flash::error('The password confirmation does not match.');
            } else {
                $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',
                    'password-retype' => 'required',
                    'role' => 'required',
                ]);
                $request['password']  = Hash::make($request['password']);
                Flash::success('Users updated successfully.');
            }
        }

        if (empty($users)) {
            Flash::error('Users not found');

            return redirect(route('users.index'));
        }


        $users = $this->usersRepository->update($request->all(), $id);


        return redirect(route('users.index'));
    }

    /**
     * Remove the specified Users from storage.
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

        $this->usersRepository->delete($id);

        Flash::success('Users deleted successfully.');

        return redirect(route('users.index'));
    }
}
