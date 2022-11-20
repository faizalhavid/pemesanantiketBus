@extends('layout.main')
@section('container')

<h2 class="sub-title text-center">Data Reservasi</h2>
<div class="menu mx-4 my-2">
    <a href="/tambah_reservasi" class="badge badge-primary">Tambah data</a>
</div>
<div class="px-3 py-3">
    <table class="table table-striped text-center">
    <thead>     
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Jumlah Tiket</th>
        <th scope="col">Tanggal Pesan</th>
        <th scope="col">Bus</th>
        <th scope="col">Perjalanan</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    
        @foreach($data as $row)
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->pemesan->nama }}</td>
            <td>{{ $row->pemesan->jumlah_tiket }}</td>
            <td>{{ $row->tgl_pesan }}</td>
            <td>{{ $row->bus->nama_bus }}</td>
            <td>{{ $row->terminal->nama_terminal }}</td>
            <td>   
                <a href="/edit_pemesan/{{ $row->id }}" class="badge badge-success">Edit</a>
                <a href="/delete_pemesan/{{ $row->id }}" class="badge badge-danger">Hapus</a>

            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
</div>


<h3 class="sub-title text-center">Data Statistika Pemesan Bus</h3>
<div class="button-group mx-4">
    <button type="button" class="btn btn-outline-info">Harian</button>
    <button type="button" class="btn btn-outline-warning">Minggan</button>
    <button type="button" class="btn btn-outline-success">Tahunan</button>
</div>
@endsection

