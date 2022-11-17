@extends('layout.main')
@section('container')
<h1 class="sub-title text-center">Data Pemesan</h1>
<div class="menu mx-4 my-2">
    <a href="/tambahpemesan" class="badge badge-primary">Tambah data</a>
</div>
<table class="table table-striped text-center">
    <thead>     
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Pemesan</th>
        <th scope="col">Alamat</th>
        <th scope="col">No telepon</th>
        <th scope="col">Jumlah Tiket</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    
        @foreach($data as $row)
        <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->no_tlp }}</td>
            <td>{{ $row->jumlah_tiket }}</td>
            <td>   
                <a href="/edit_pemesan/{{ $row->id }}" class="badge badge-success">Edit</a>
                <a href="/delete_pemesan/{{ $row->id }}" class="badge badge-danger">Hapus</a>

            </td>
        </tr> 
        @endforeach
    </tbody>
</table>
@endsection

