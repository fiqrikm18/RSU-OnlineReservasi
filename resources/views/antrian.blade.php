@extends("layouts.app")

@section("title")
Daftar Antrian
@endsection

@section("content")
<div class="container" id="register-div">
    <div class="card">
        <div class="card-body">
        <div class="d-flex">
            <a href="{{ route('daftarAntri') }}" class="btn btn-outline-primary ml-auto p2" id="no_shadow"><span class="fa fa-plus"></span> Daftar Antrian Baru</a>
        </div>
        <br/>
        <h4 style="text-align:center">Daftar Antrian Pasien</h4>
        <br/>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No. Antrian</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Poliklinik</th>
              <th scope="col">Nama Dokter</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($antrian as $index=>$a)
                <tr>
                  <td>{{$index+1}}</td>
                  <td>{{$a->tanggalKunjungan}}</td>
                  <td>{{$a->nama}}</td>
                  <td>{{$a->namaPoli}}</td>
                  <td>dr. {{$a->namaDokter}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm justify-content-center">
                {{ $antrian->links() }}
            </ul>
        </nav>
        </div>
    </div>

    <script>
    </script>
</div>
@endsection
