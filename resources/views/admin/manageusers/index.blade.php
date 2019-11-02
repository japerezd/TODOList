@extends('layouts.app')
@section('title','Dashboard Admin')
             

@push('css')
    <style>
        .espacio{
            margin-top: 150px;
            margin-left: 200px;
        }
    </style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> --}}
@endpush


@section('content')

        <div class="col-lg-8 col-md-12 espacio">
            <a href="{{ route('admin.users.create') }}" class="btn btn-info">Add New</a>

            @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Managing Users</h4>
              <p class="card-category">Only these actions can be done by the admin</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-striped table-bordered" style="width:120%">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Action</th>
                </thead>
                <tbody>
                 @foreach ($users as $user)
                     <tr>
                         <th>{{$user->id}}</th>
                         <th>{{$user->name}}</th>
                         <th>{{$user->email}}</th>
                         <th>{{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}</th>
                         <th>
                           <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-info btn-sm">
                              <i class="material-icons"> mode_edit </i>
                          </a>


                          <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" style="display:none;" method="POST">
                            @csrf
                            @method('DELETE')

                          </form>

                    @if ($user->hasAnyRole('admin'))

                    <button type="button" class="btn btn-danger btn-sm" onclick="event.preventDefault();
                          document.getElementById('delete-form-{{$user->id}}').submit();"> 
                        <i class="material-icons"> delete </i> 
                    </button>

                        @else

                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $user->id }}').submit();
                          }else{
                            event.preventDefault();
                          }"> <i class="material-icons"> delete </i> 
                          </button>

                    @endif

                          <a href="{{route('admin.impersonate',$user->id)}}">
                            <i class="material-icons btn-success">
                              supervised_user_circle
                              </i>
                          </a>
                          </th>

                     </tr>
                 @endforeach
                </tbody>
              </table>
              {{$users->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@push('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
@endpush

