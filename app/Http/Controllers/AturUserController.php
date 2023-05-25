<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class AturUserController extends Controller
{
    public function aturuser()
    {
        $ambil = auth()->user()->id;
        $this->authorize('admin');
        $usr = DB::table('users')
            ->join('role_user', 'users.id_roleuser', '=', 'role_user.id_roleuser')
            ->get();
        return view('aturuser', [
            "title" => "aturuser",
            'userdata' =>  User::find($ambil),
            'usr' => $usr
        ]);
    }
}
