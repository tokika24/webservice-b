@extends('template.master')

@section('isi')

<h1>Data Mahasiswa</h1>
<div class="content-wrapper">
    <section class="content">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="card">
                   <div class="card-header bg-primary">
                      <h3 class="card-title">Data Mahasiswa ILKOM B</h3>
                   </div>
                   <div class="card-body">
                   <a class="btn btn-success mb-3" href="{{ url('add-mahasiswa') }}" role="button"><i class="fas fa-add"></i> Tambah Data</a>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIm</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($data as $row)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$row->nim}}</td>
        <td>{{$row->nama_mahasiswa}}</td>
        <td>{{$row->semester}}</td>
        <td>#</td>
    </tr>

     @endforeach

    </tbody>
</table>

@endsection