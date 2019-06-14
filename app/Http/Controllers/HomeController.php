<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //  $permission=Permission::create(['name' => 'write article']);

       // Role::create(['name' => 'article writer']);
      //  Permission::create(['name' => 'edit article']);
      /*  
        $role=Role::findById(1);
        $role->givePermissionTo($permission);
        */
        //$permission=Permission::findById(1);
        //$role->givePermissionTo($permission);


        //$permission->removeRole($role);  
        //$role->revokePermissionTo($permission);
        //auth()->user()->givePermissionTo('edit post');
        auth()->user()->removeRole('writer');
        //return User::permission('edit post')->get();
        return view('home');
    }
}
