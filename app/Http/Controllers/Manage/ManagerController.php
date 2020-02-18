<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Manager;
use App\Models\Role;
use App\Http\Requests\ManagerRequest;

class ManagerController extends Controller
{
    public function index()
    {
        $managers = Manager::all();
        return view('manage.manager.index', ['managers' => $managers]);
    }

    public function showCreateForm()
    {
        $dbRoles = Role::all();
        $roles = [];
        foreach ($dbRoles as $dbRole) {
            $roles[$dbRole->id] = $dbRole->display_name;
        }
        return view('manage.manager.create', ['roles' => $roles]);
    }

    public function store(ManagerRequest $request)
    {
        $managerInfo = [
            'name' => $request->name,
            'display_name' => $request->display_name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $manager = Manager::create($managerInfo);

        if(!$manager->exists) {
            return redirect()->back()->withErrors('message', 'Đã xảy ra lỗi khi thêm quản trị viên');
        }

        $manager->attachRole($request->role);
        return redirect()->route('cpanel.manager.index')->with('message', 'Thêm quản trị viên thành công');
    }
}
