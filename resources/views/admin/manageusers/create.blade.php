@extends('layouts.app')
@section('title','Creating user - '.Auth::user()->name)
             

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
            <div class="card-header card-header-info">
              <h4 class="card-title">Creating New User</h4>
              @include('layouts.partial.msg')
            </div>
            <div class="card-body table-responsive">
                <form action="{{route('admin.users.store')}}" method="POST">
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
                                <label class="bmd-label-floating">Email</label>
                              <input type="email" class="form-control" name="email" required>
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                              <input type="password" class="form-control" name="password" required>
                              </div>
                            </div>
                    </div>
                    
                    <button type="submit" class="btn btn-info">Create</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Back</a>
                </div>
                    
                </form>
            </div>
          </div>



@endsection


@push('scripts')

@endpush

