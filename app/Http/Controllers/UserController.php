<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends CustomController
{

    /**
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|string
     */
    public function index()
    {
        if (\request()->isMethod('POST')) {
            return $this->create();
        }
        $user = User::with('agen')->where('role', 'user')->get();

        return view('admin.user', ['sidebar' => 'user', 'data' => $user]);
    }

    /**
     * @return array|string
     */
    public function create()
    {
        //
        $field = \request()->validate(
            [
                'nama'     => 'required',
                'username' => 'required',
            ]
        );

        $fieldAgen = \request()->validate(
            [
                'alamat' => 'required',
                'no_hp'  => 'required',
            ]
        );

        $fieldPass = \request()->validate(
            [
                'password' => 'required|confirmed',
            ]
        );
        if (\request('id')) {
            $cekUsername = User::where([['username', '=', \request('username')], ['id', '!=', \request('id')]])->first();
            if ($cekUsername) {
                return \request()->validate(
                    [
                        'username' => 'required|string|unique:users,username',
                    ]
                );
            }
            if (strpos($fieldPass['password'], '*') === false) {
                $password = Hash::make($fieldPass['password']);
                Arr::set($field, 'password', $password);
            }
            $user = User::find(\request('id'));
            $user->update($field);
            $user->agen()->update($fieldAgen);
        } else {
            \request()->validate(
                [
                    'username' => 'required|string|unique:users,username',
                ]
            );
            $user     = new User();
            $password = Hash::make($fieldPass['password']);
            Arr::set($field, 'password', $password);
            Arr::set($field, 'role', 'user');
            $user = $user->create($field);
            $user->agen()->create($fieldAgen);
        }

        return 'berhasil';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @return string
     */
    public function destroy()
    {
        //
        DB::beginTransaction();
        try {
            $user = User::find(\request('id'));
            $user->delete();
            DB::commit();

            return $this->jsonResponse('success');

        } catch (\Exception $e) {
            DB::rollBack();

            return $this->jsonResponse($e->getMessage(),500);
        }
    }
}
