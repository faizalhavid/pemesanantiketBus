@extends('layout.main')
@section('container')
<h1 class="sub-title text-center">Edit Data Pemesan</h1>
<div class="menu mx-4 my-2">
    <a href="/pemesan" class="badge badge-success">Kembali</a>
</div>

<form action="/update_pemesan/{{ $data->id }}" class="mx-4 mb-3" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="nama_pemesan">Nama Pemesan</label>
    <input type="text" value="{{ $data->nama }}" class="form-control" id="nama_pemesan" name="nama" aria-describedby="emailHelp" required>
  </div>
  <div class="row">
    <div class="col-6">
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" value="{{ $data->alamat }}" class="form-control" id="alamat" name="alamat" aria-describedby="emailHelp" required>
      </div>
    </div>

    <div class="col">
      <div class="form-group">
          <label for="no_tlp">Nomer telepon</label>
          <input type="number" value="{{ $data->no_tlp }}" class="form-control" id="no_tlp" name="no_tlp" aria-describedby="emailHelp" required>
        </div>
    </div>
    <div class="col-2">
      <div class="form-group">
          <label for="jumlah_tiket">Jumlah Tiket</label>
          <input type="number" value="{{ $data->jumlah_tiket }}" class="form-control" id="jumlah_tiket" name="jumlah_tiket" aria-describedby="emailHelp" required>
        </div>
    </div>
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


