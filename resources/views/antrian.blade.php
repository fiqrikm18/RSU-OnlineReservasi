@extends("layouts.app")

@section("title")
Online Reservasi
@endsection

@section("content")
<div class="container" id="register-div">
    <dic class="card">
        <div class="card-header" style="text-align:center;">
            Form Pasien
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">No Kartu Berobat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="noKartu" name="noKartu">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="namaPasien" name="namaPasien">
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Tempat Lahir <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" style="width: 276px">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Tanggal Lahir <span class="text-danger">*</span></label>
                        <input id="datepicker" type="date" class="form-control" style="width: 276px" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">No Telepon <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select class="form-control" style="width: 276px">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Poliklinik <span class="text-danger">*</span></label>
                        <select class="form-control" style="width: 276px">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Dokter <span class="text-danger">*</span></label>
                        <select class="form-control" style="width: 276px">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="exampleInputEmail1">Penjamin <span class="text-danger">*</span></label>
                        <select class="form-control" style="width: 276px">
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Berobat <span class="text-danger">*</span></label>
                    <input id="datepicker" type="date" class="form-control" style="width: 276px" />
                </div>

                <button type="submit" class="btn btn-primary float-right" style="margin: 10px">Simpan</button>
                <a href="{{ URL::previous() }}" class="btn btn-danger float-right" style="margin: 10px">Batal</a>
            </form>
        </div>
    </div>

    <script>
    </script>
</div>
@endsection
