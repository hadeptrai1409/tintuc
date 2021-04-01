<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $cates = User::all();
        return view('user.index', ['cates' => $cates]);
    }

    public function edit($id)
    {
        $model = User::find($id);
        return view('user.edit-user', ['model' => $model]);
    }

    public function SaveEdit($id, Request $request)
    {
        $model = User::find($id);

        $model->fill($request->all());
        $model->save();

        return redirect(route('user.index'));
    }
    public function remove($id)
    {
        User::destroy($id);
        return redirect(route('user.index'));
    }

    public function login()
    {

        return view('form.index');
    }
    public function loginSave(Request $request)
    {
        dd($request);
    }
}
