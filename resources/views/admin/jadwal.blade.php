@extends("layouts.admin_app")

@section("title")
Selamat Datang
@endsection

@section("content")
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <a href="#" class="btn btn-outline-primary ml-auto p-2" id="no_shadow"><span class="fa fa-plus"></span> Tambah Jadwal</a>
        </div>

        <div>
            <h3 style="text-align: center;">Jadwal Dokter Poliklinik</h3>
        </div>
        <br />

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Poliklinik</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam Prakter</th>
                        <th scope="col" style="text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listJadwal as $index=>$poli)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $poli->poli }}</td>
                        <td>{{ $poli->dokter }}</td>
                        <td>{{ $poli->hari }}</td>
                        <td>{{ $poli->jam }}</td>
                        <td style="text-align:center">
                            <div>
                                <a href="#" class="btn btn-outline-success btn-sm" id="no_shadow">Edit</a>
                                <a href="#" class="btn btn-outline-danger btn-sm" id="no_shadow">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm justify-content-center">
                    {{ $listJadwal->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
