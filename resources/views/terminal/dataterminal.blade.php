@extends('layout.main')
@section('container')
<h1 class="sub-title text-center">Data Terminal</h1>
<div class="menu mx-4 my-2">
    <a href="/tambah_terminal" class="badge badge-primary">Tambah data</a>
</div>
<table class="table table-striped text-center">
    <thead>     
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Terminal</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email</th>
        <th scope="col">Kapasitas Bus</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    
        @foreach($data as $row)
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->nama_terminal }}</td>
            <td>{{ $row->alamat_terminal }}</td>
            <td>{{ $row->email_terminal }}</td>
            <td>{{ $row->jumlah_bus }}</td>
            <td>   
                <a href="/edit_terminal/{{ $row->id }}" class="badge badge-success">Edit</a>
                <a href="/delete/{{ $row->id }}" class="badge badge-danger">Hapus</a>

            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection


