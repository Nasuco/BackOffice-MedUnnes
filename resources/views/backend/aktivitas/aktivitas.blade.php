@extends('backend.layouts.app')
@section('content')

<div class="row">
  <div class="col">
    <h2>Log Activity</h2>
  </div>
  <div class="col">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-mdb-toggle="dropdown" aria-expanded="false">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li><button class="dropdown-item" type="button">Pasien</button></li>
          <li><button class="dropdown-item" type="button">Dokter</button></li>
        </ul>
      </div>
  </div>
</div>

<table class="table">
       <thead class="table-info">
         <tr>
           <th scope="col">ID</th>
           <th scope="col">User</th>
           <th scope="col">Date</th>
           <th scope="col">Activity</th>
         </tr>
       </thead>
       <tbody>
              <tr>
                     <th scope="row">1</th>
                     <td>Mark</td>
                     <td>2023-04-08</td>
                     <td>User logged in</td>
              </tr>
       </tbody>
</table>

@endsection