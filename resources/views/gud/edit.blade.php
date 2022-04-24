@extends('layouts.main')
@section('container')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Data</h2>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terdapat kesalahan</strong>
            <ul>
            </ul>
        </div>
    @endif

    <form action="{{ route('gud.update',$gud->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
        <input type="date" class="form-control" id="Tanggal" name="Tanggal">
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="NamaPegawai" placeholder="Nama Pegawai" name="NamaPegawai">
        <label for="NamaPegawai" class="form-label">Nama Pegawai</label>
      </div>
      <select class="form-select mb-3" id="NamaBarang" name="NamaBarang" aria-label="Default select example">
        <option selected>Nama Barang</option>
        <option value="Kertas A4">Kertas A4</option>
        <option value="Ballpoint">Ballpoint</option>
        <option value="Sapu">Sapu</option>
      </select>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="Jumlah" placeholder="Jumlah Barang" name="Jumlah">
        <label for="jumlah" class="form-label">Jumlah Barang</label>
      </div>
      <select class="form-select mb-3" id="UnitKerja" name="UnitKerja" aria-label="Default select example">
        <option selected>Unit Kerja</option>
        <option value="SBM">SBM</option>
        <option value="Kurikulum">Kurikulum</option>
        <option value="Kesiswaan">Kesiswaan</option>
      </select>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan" name="Keterangan">
        <label for="Keterangan" class="form-label">Keterangan</label>
      </div>
      
    <button type="submit" class="btn btn-primary">Kirim</button>
    <a href="/home" class="btn btn-primary">Kembali</a>
</form>
@endsection