<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Bangunan;
use App\Models\Jembatan;
use App\Models\Peralatan;
use App\Models\Tanah;

class AdminController extends Controller
{
    
    public function dashboard()
    {
        $data['list_peralatan'] = Peralatan::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_tanah'] = Tanah::all();
        $data['list_jembatan'] = Jembatan::all();
        return view('admin.index', $data);
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

    
    public function show($admin)
    {
        $data['admin'] = Admin::find($admin);
        return view('admin.admin.show', $data);
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
