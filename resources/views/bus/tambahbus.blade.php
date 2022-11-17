@extends('layout.main')
@section('container')

<h1 class="sub-title text-center">Tambah Data Bus</h1>
<div class="menu mx-4 my-2">
    <a href="/bus" class="badge badge-primary">Kembali</a>
</div>

<form action="/insertbus" class="mx-4 mb-3" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="Nama_bus">Nama Bus</label>
      <input type="text" class="form-control" id="Nama_bus" name="nama_bus" aria-describedby="emailHelp" required>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="jumlah_kursi">Jumlah kursi</label>
          <input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" aria-describedby="emailHelp" required>
        </div>
      </div>

      <div class="col">
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control form-control" required name="kategori" id="kategori">
            <option value="" selected disabled hidden> Pilih kategori bus...</option>
            <option value="Ekonomi">Ekonomi</option>
            <option value="Patas">Patas</option>
            <option value="Bisnis">Bisnis</option>
            <option value="Executive">Executive</option>
          </select>
        </div>
      </div>
    </div>







    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


