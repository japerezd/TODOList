@extends('layouts.app')
@section('title','Editing task - '.Auth::user()->name)
             

@push('css')
    <style>
        .espacio{
            margin-left: 200px;
            margin-top: 150px;
        } 
        .izquierda{
            margin-left: 15px;
        }       
    </style>

@endpush

@section('content')


        <div class="col-lg-8 col-md-12 espacio">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Editing Task</h4>
              @include('layouts.partial.msg')
            </div>
            <div class="card-body table-responsive">
                <form action="{{route('admin.tasks.update',$task->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                              <input type="text" class="form-control" name="name" value="{{$task->name}}" required >
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Notes</label>
                              <input type="text" class="form-control" name="notes" required value="{{$task->notes}}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Schedule</label>
                              <input type="date" class="form-control" name="schedule" required value="{{$task->schedule}}">
                              </div>
                            </div>
                    </div>

                  <div class="row">
       
                    <div class="form-check izquierda" >
                        <label class="form-check-label">   
                          <input type="checkbox" class="form-check-input" name="status" {{$task->status ? 'checked=checked' : ''}}>
                          <span class="form-check-sign" >
                            <span class="check"></span>
                          </span>
                          <label for="">Done</label>
                        </label>
                    </div>
                           
                  </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.tasks.index') }}" class="btn btn-danger">Back</a>
                </div>
                    
                </form>
            </div>
          </div>



@endsection


@push('scripts')

@endpush

