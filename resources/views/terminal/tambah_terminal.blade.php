@extends('layout.main')
@section('container')
<h1 class="sub-title text-center">Tambah Data Terminal</h1>
<div class="menu mx-4 my-2">
    <a href="/terminal" class="badge badge-primary">Kembali</a>
</div>

<form action="/proses_tambah" class="mx-4 mb-3" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="Nama_terminal">Nama Terminal</label>
      <input type="text" class="form-control" id="Nama_terminal" name="nama_terminal" aria-describedby="emailHelp" required>
    </div>

    <div class="form-group">
      <label for="alamat_terminal">Alamat Terminal</label>
      <input type="text" class="form-control" id="alamat_terminal" name="alamat_terminal" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group">
      <label for="email_terminal">Email Terminal</label>
      <input type="text" class="form-control" id="email_terminal" name="email_terminal" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group">
      <label for="jumlah_bus">Kapasitas Bus</label>
      <input type="number" class="form-control" id="jumlah_bus" name="jumlah_bus" aria-describedby="emailHelp" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


