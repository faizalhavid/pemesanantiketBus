@extends('layout.main')
@section('container')
<h1 class="sub-title text-center">Data Bus</h1>
<div class="menu mx-4 my-2">
    <a href="/tambahbus" class="badge badge-primary">Tambah data</a>
</div>
<table class="table table-striped text-center">
    <thead>     
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Bus</th>
        <th scope="col">Jumlah Kursi</th>
        <th scope="col">Kategori</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    
        @foreach($data as $row)
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->nama_bus }}</td>
            <td>{{ $row->jumlah_kursi }}</td>
            <td>{{ $row->kategori }}</td>
            <td>   
                <a href="/edit_bus/{{ $row->id }}" class="badge badge-success">Edit</a>
                <a href="/delete/{{ $row->id }}" class="badge badge-danger">Hapus</a>

            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection

