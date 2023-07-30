<x-admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/admin/create') }}" class="btn btn-primary float-right mb-10"> <span
                                class="fa fa-plus"></span> Tambah Data</a>
                        <h4 class="card-title">
                            <strong>Data Super Admin</strong>
                        </h4>

                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Poto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_admin as $admin)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <x-button.info-button url="admin/admin" id="{{ $admin->id }}" />
                                                <x-button.edit-button url="admin/admin" id="{{ $admin->id }}" />
                                                <x-button.delete-button url="admin/admin" id="{{ $admin->id }}" />
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $admin->nama }}</td>
                                        <td class="text-center">{{ $admin->username }}</td>
                                        <td class="text-center" style="width: 20%">
                                            <img src="{{ url("public/$admin->poto") }}" style="width:30%; height:30%;" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
