@extends('backend.layouts.app')
@section('content')

<h2>Daftar Pasien</h2>
<table class="table">
       <thead class="table-info">
         <tr>
           <th scope="col">ID</th>
           <th scope="col">Nama</th>
           <th scope="col">Status</th>
           <th scope="col">Action</th>
         </tr>
       </thead>
       <tbody>
              <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td><span class="badge text-bg-primary">Not Blocked</span></td>
                     <td>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ReadPasien">
                            <i class="bi bi-person-lines-fill"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#BlokirPasien">
                            Block
                        </a>
                     </td>
              </tr>
              <tr>
                     <th scope="row">2</th>
                     <td>Jacob</td>
                     <td><span class="badge text-bg-danger">Blocked</span></td>
                     <td>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ReadPasien">
                            <i class="bi bi-person-lines-fill"></i>
                        </a>
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UnblockPasien">
                            Unblock
                        </a>
                     </td>
              </tr>
       </tbody>
</table>

@endsection
@include('backend.pasien.read_pasien')
@include('backend.pasien.block_pasien')
@include('backend.pasien.unblock_pasien')