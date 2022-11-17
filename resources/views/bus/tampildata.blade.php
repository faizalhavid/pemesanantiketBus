@extends('layout.main')
@section('container')
    <h1 class="sub-title text-center">Edit Data  Bus</h1>
    <div class="menu mx-4 my-2">
        <a href="/bus" class="badge badge-success">Kembali</a>
    </div>
    <form action="/updatedata/{{ $data->id }}" class="mx-4 mb-3"  method="POST">
        @csrf
        <div class="form-group">
            <label for="Nama_bus">Nama Bus</label>
            <input type="text" value="{{ $data->nama_bus }}" class="form-control" id="Nama_bus" name="nama_bus" aria-describedby="emailHelp" required>
          </div>
      
          <div class="form-group">
            <label for="jumlah_kuris">Jumlah Kursi</label>
            <input type="text" value="{{ $data->jumlah_kursi }}" class="form-control" id="jumlah_kuris" name="jumlah_kuris" aria-describedby="emailHelp" required>
          </div>

          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control form-control" required name="kategori" id="kategori">
              <option value="{{ $data->kategori }}" selected disabled hidden>{{ $data->kategori }}</option>
              <option value="Ekonomi">Ekonomi</option>
              <option value="Patas">Patas</option>
              <option value="Bisnis">Bisnis</option>
              <option value="Executive">Executive</option>
            </select>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
