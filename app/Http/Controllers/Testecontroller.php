<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\Seeders\ClienteSeed;
use App\Models\ClientesModel;
Use Illuminate\Support\Facades\Session;

class Testecontroller extends Controller
{
    public function teste()
    {
        return print_r(Session::get('email'));
        //'user_id'=>$user[0]->id,
        //'email'=>$user[0]->email
    }
}
