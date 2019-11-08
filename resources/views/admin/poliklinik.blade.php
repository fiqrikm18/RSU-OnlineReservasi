@extends("layouts.admin_app")

@section("title")
Selamat Datang
@endsection

@section("content")
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <a href="#" class="btn btn-outline-primary ml-auto p-2" id="no_shadow"><span class="fa fa-plus"></span> Tambah Poli</a>
        </div>

        <div>
            <h3 style="text-align: center;">Datfar Poliklinik</h3>
        </div>
        <br />

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Poli</th>
                        <th scope="col">Poliklinik</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col" style="text-align:center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listPoli as $index=>$poli)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $poli->noPoli }}</td>
                        <td>{{ $poli->namaPoli }}</td>
                        <td>{{ $poli->namaDokter }}</td>
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
                    {{ $listPoli->links() }}
                </ul>
            </nav>

            <div class="justify-content-center">
                <p>Jumlah Poliklinik: {{ $countPoli }} | Jumlah Dokter: {{ $countDokter }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
