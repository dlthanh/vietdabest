<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\Role;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        return view('manage.manager.index', ['managers' => $managers]);
    }

    public function showCreateForm()
    {
        return view('manage.manager.create');
    }
}
