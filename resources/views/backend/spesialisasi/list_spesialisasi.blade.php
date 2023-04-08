@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar Spesialisasi Dokter</h2>
    </div>
    <div class="col">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#CreateSpesialisasi">
            Tambah Spesialisasi
        </a>
    </div>
</div>
  
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Spesialisasi</th>
            <th scope="col">Img_Spesialisasi</th>
        </tr>
    </thead>
         <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><img src="{{ asset('img/doctor/doctor-1.jpg') }}" alt="" class="img-fluid" style="width: 100px; height: 100px;"></td>
                       
                </tr>
         </tbody>
  </table>
  
@include('backend.spesialisasi.create_spesialisasi')
@endsection