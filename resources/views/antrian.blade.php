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
        <h4 style="text-align:center">Daftar Antrian Pasien</h4>
        <br/>
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

    <script>
    </script>
</div>
@endsection
