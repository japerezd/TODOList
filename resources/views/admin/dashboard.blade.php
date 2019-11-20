@extends('layouts.app')
@section('title','Dashboard - '.Auth::user()->name) 
             

@push('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

@endpush


@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="fa fa-list-ul" aria-hidden="true"></i>
              </div>
              <p class="card-category">To do/Overdue</p>
            <h3 class="card-title">{{$todoCount->count()}}
               / {{$overdueCount}}
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-warning">info_outline</i>
                <a href="#">Total tasks to do.</a> &nbsp; &nbsp; &nbsp;
                <i class="material-icons text-danger">warning</i> Total of tasks with overdue.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">done</i>
              </div>
              <p class="card-category">Done tasks</p>
              <h3 class="card-title">{{$doneCount->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">done_all</i> Total done tasks.
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-secondary card-header-icon">
              <div class="card-icon">
                  <i class="fa fa-users" aria-hidden="true"></i>
              </div>
              <p class="card-category">Total users</p>
              <h3 class="card-title">{{$usersCount}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                  <i class="fa fa-user-circle-o" aria-hidden="true"> Total users.</i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
              </div>
              <p class="card-category">Total tasks</p>
            <h3 class="card-title">{{$taskCount->count()}}</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-info">update</i> How many tasks you have.
              </div>
            </div>
          </div>
        </div>
      </div>
    

      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title" align="center">Tasks to do</h4>
          </div>
          <table id="table" class="table" style="width:100%"> 
            <thead class="text-warning">
              
              <th>Name</th>
              <th>Notes</th>
            </thead>
            <tbody>
                @foreach ($todoTasks as $todoTask)
                <tr>
                  <th>{{$todoTask->name}}</th>
                  <td>{{$todoTask->notes}}</td>
                </tr>
                
            @endforeach
            </tbody>
            
            
          </table>
        </div>
        {{-- {!!$todoTasks  ->links()!!} --}}
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

