@extends('layouts.app')
@section('title','Managing users by '.Auth::user()->name)
             

@push('css')
    <style>
        .espacio{
            margin-top: 150px;
            margin-left: 200px;
        }
    </style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

@endpush


@section('content')

        <div class="col-lg-8 col-md-12 espacio">
            <a href="{{ route('admin.users.create') }}" class="btn btn-info">New user</a>

            @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Managing Users</h4>
              <p class="card-category">Only these actions can be done by the admin</p>
            </div>
            <div class="card-body table-responsive">
              
              <table id="table" class="table table-striped table-bordered" style="width:100%">
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
                         {{--  @if($user->hasAnyRole('admin'))
                          <a href="#">
                            <i class="material-icons btn-success">
                              supervised_user_circle
                              </i>
                          </a>
                          @else
                          <a href="{{route('admin.impersonate',$user->id)}}">
                            <i class="material-icons btn-success">
                              supervised_user_circle
                              </i>
                          </a>
                          @endif --}}
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
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@push('scripts')

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $('#table').DataTable({
    "iDisplayLength": 5,
    "aLengthMenu": [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "all"]
    ]
  });
</script>
@endpush

