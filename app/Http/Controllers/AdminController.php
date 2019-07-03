<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{

    public function deleteUser($id)
    {
        if(Gate::allows('admin', auth()->user()))
        {
            return User::where('id', $id)->delete();
        }
        return response()->json(['message' => 'Not Allowed!'], 401);
    }

    public function upgradeToAdmin($id)
    {
        if(Gate::allows('admin', auth()->user()))
        {
            $user = User::find($id);

            $user->roles()->detach(1);
            $user->roles()->attach(2);

            return $user;
        }
        return response()->json(['message' => 'Not Allowed!'], 401);
    }
}
