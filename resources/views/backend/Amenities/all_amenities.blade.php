@extends("admin.admin_dashboard")
@php
$id = Auth::id();
$userData = App\Models\User::findOrFail($id);
@endphp
@section('title')
{{$userData->name}}
@endsection


@section('admin')
<div class="page-content">
  

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
       <a href="{{route('add.amenitie')}}" class="btn btn-inverse-info"> Add Amenitie </a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">All property Types</h6>
    {{-- <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Amenitie Name</th>
            
            <th>Action</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach ($amenities as $key=>$amenitie)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$amenitie->amenitie_name}}</td>
            
            <td>
                <a href="{{route('edit.amenitie',$amenitie->id)}}" class="btn btn-inverse-warning">Edit</a>
                <a href="{{route('delete.amenitie',$amenitie->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
            </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>
    
@endsection

