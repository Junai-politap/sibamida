<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    
    public function dashboard()
    {
        return view('admin.index');
    }

    public function index()
    {
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index', $data);
    }

    
    public function create()
    {
        return view('admin.admin.create');
    }

    
    public function store(Request $request)
    {
        $admin = New Admin();
        $admin->nama = request('nama');
        $admin->username = request('username');
        $admin->password = request('password');
        $admin->handleUploadPoto();

        $admin->save();
        return redirect('admin/admin')->with('success', 'Data Berhasil Di Simpan');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit($admin)
    {
        $data['admin'] = Admin::find($admin);
        return view('admin.admin.edit', $data);
    }

    
    public function update($admin)
    {
        $admin = Admin::find($admin);
        $admin->nama = request('nama');
        $admin->username = request('username');
        if(request('password')) $admin->password = request('password');
        $admin->handleUploadPoto();

        $admin->save();
        return redirect('admin/admin')->with('warning', 'Data Berhasil Di Simpan');
    }

    
    public function destroy($admin)
    {
        Admin::destroy($admin);

        return back()->with('danger', 'Data Berhasil Di Hapus');
    }
}
