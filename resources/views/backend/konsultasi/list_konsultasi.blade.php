@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col">
      <h2>Daftar Konsultasi Pasien</h2>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>
  
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Konsultasi</th>
            <th scope="col">Tanggal Konsultasi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
         <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt soluta non nemo facilis a, omnis velit est voluptatibus incidunt in odit obcaecati voluptatem vitae amet, impedit possimus voluptatum corrupti rem.</td>
                    <td>2023-04-08</td>
                    <td>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#HapusKonsultasi">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                   </td>
                       
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt soluta non nemo facilis a, omnis velit est voluptatibus incidunt in odit obcaecati voluptatem vitae amet, impedit possimus voluptatum corrupti rem.</td>
                    <td>2023-04-08</td>
                    <td>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#HapusKonsultasi">
                            <i class="bi bi-trash-fill"></i>
                        </a>
                   </td>
                       
                </tr>
         </tbody>
  </table>
  
@include('backend.konsultasi.hapus_konsultasi')
@endsection