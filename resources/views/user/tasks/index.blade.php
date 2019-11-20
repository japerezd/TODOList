@extends('layouts.appUser')
@section('title','Tasks - '.Auth::user()->name)
             

@push('css')
    <style>
        .espacio{
            margin-top: 150px;
            margin-left: 200px;
        }

        .boton{
          width: 155px;
          margin: 0;
          position: absolute;
          top: 0px;
          right: 720px;
        }
    </style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endpush


@section('content')

        <div class="col-lg-8 col-md-12 espacio">
            <a href="{{route('user.tasks.create')}}" class="btn btn-primary">New task</a>

          <form action="{{route('user.tasks.import')}}" method="POST" enctype="multipart/form-data" class="boton">
            @csrf
            {{-- <input type="file" name="file" accept=".csv">
            <br>
            <button class="btn btn-success">Import tasks</button> --}}
            <a class="btn btn-warning" href="{{route('user.tasks.export')}}">Export Tasks</a>
          </form>

            @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title">Manage tasks</h4>
              <p class="card-category">Only these actions can be done by user</p>
            </div>
            <div class="card-body table-responsive">

              <table id="table" class="table table-striped table-bordered" style="width:100%">
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
                         <td>{{$task->notes}}</td>
                         <td>{{$task->schedule}}</td>
                         
                         <td>
                            <div class="form-check" align="center">

                                  @if ($task->status == 1)
                                      <span class="badge badge-success">Done</span>
                                  @elseif($task->status == 0 && $otherTime > $task->schedule)
                                  <span class="badge badge-danger">Overdue</span>
                                  @else
                                  <span class="badge badge-warning">To do</span>
                                  @endif

                                 

                            </div>

                        </td>
                         <td>
                           <a href="{{route('user.tasks.edit',$task->id)}}" class="btn btn-primary btn-sm">
                              <i class="material-icons"> mode_edit </i>
                          </a>


                          <form id="delete-form-{{ $task->id }}" action="{{ route('user.tasks.destroy', $task->id) }}" style="display:none;" method="POST">
                            @csrf
                            @method('DELETE')

                          </form>

                          <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $task->id }}').submit();
                          }else{
                            event.preventDefault();
                          }" class="float-left"> <i class="material-icons"> delete </i> 
                          </button>

                      
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

