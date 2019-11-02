@extends('layouts.appUser')
@section('title','Dashboard User')
             

@push('css')
    <style>
        .espacio{
            margin-left: 200px;
            margin-top: 150px;
        }        
    </style>

@endpush

@section('content')


        <div class="col-lg-8 col-md-12 espacio">
          <div class="card">
            <div class="card-header card-header-danger">
              <h4 class="card-title">Creating New Task</h4>
              @include('layouts.partial.msg')
            </div>
            <div class="card-body table-responsive">
                <form action="{{route('user.tasks.store')}}" method="POST">
                    @csrf

                  <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                              <input type="text" class="form-control" name="name" required >
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Notes</label>
                              <input type="text" class="form-control" name="notes" required>
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Schedule</label>
                              <input type="date" class="form-control" name="schedule" required>
                              </div>
                            </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Status</label>
                          <input type="checkbox" class="form-control" name="status" value="{{$task->status}}">
                          </div>
                        </div>
                </div> --}}
                    
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('user.tasks.index') }}" class="btn btn-danger">Back</a>
                </div>
                    
                </form>
            </div>
          </div>



@endsection


@push('scripts')

@endpush

