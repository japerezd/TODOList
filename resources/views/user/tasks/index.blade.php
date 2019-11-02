@extends('layouts.appUser')
@section('title','Dashboard User')
             

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
            <a href="{{route('user.tasks.create')}}" class="btn btn-primary">Add New</a>

            @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title">Manage tasks</h4>
              <p class="card-category">Only these actions can be done by user</p>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-striped table-bordered" style="width:120%">
                <thead class="text-warning">
                  <th>Name</th>
                  <th>Notes</th>
                  <th>Schedule</th>
                  <th>Status</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  
                 @foreach ($tasks as $task)
                     <tr>
                         <th>{{$task->name}}</th>
                         <th>{{$task->notes}}</th>
                         <th>{{$task->schedule}}</th>
                         
                         <th>
                            <div class="form-check" align="center">

                                <label class="form-check-label">
                                    <input class="form-check-input" name="status" type="checkbox" value="{{$task->status}}"
                                    {{$task->status==1 ? 'checked' : ''}}>
                                    
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>

                            </div>
                           {{-- {{$task->status}}        --}}
                        </th>
                         <th>
                           <a href="{{route('user.tasks.edit',$task->id)}}" class="btn btn-primary btn-sm">
                              <i class="material-icons"> mode_edit </i>
                          </a>


                          {{-- <form id="delete-form-{{ $task->id }}" action="{{ route('users.tasks.destroy', $task->id) }}" style="display:none;" method="POST">
                            @csrf
                            @method('DELETE')

                          </form> --}}

                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $task->id }}').submit();
                          }else{
                            event.preventDefault();
                          }" class="float-left"> <i class="material-icons"> delete </i> 
                          </button>

                      
                          </th>

                     </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
            {{$tasks->links()}}
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

