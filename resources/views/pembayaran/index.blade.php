@extends('layouts/app')

@section('container')
<div class="container mt-5" id="pembayaran">
    <div class="row justify-content-center">
        <div class="col-lg-10 mt-5">
            <h1><center>Konfirmasi Pembayaran </center></h1>
        <form action="pembayaran" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Atas Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jumlah Nominal</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Bukti Pembayaran</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Kirim</button>
        </form>
        </div>
    </div>
</div>
@endsection