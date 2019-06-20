<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
public function index(User $id){
    $user = User::findOrFail($id);
    dd($id);
}
}
