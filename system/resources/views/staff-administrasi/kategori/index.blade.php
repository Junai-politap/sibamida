<x-staff>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('staff-administrasi/kategori/create') }}" class="btn btn-primary float-right mb-10"> <span
                                    class="fa fa-plus"></span> Tambah Data</a>
                            <h3 class="card-title">Data Seluruh kategori</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_kategori as $kategori)
                                    @if (Auth::guard('staff')->user()->id_opd == $kategori->id_opd)
                                        
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-button.edit-button url="staff-administrasi/kategori" id="{{ $kategori->id }}" />
                                                    <x-button.delete-button url="staff-administrasi/kategori"
                                                        id="{{ $kategori->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $kategori->nama_kategori }}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-staff>
