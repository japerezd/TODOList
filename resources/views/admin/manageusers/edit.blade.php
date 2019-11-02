@extends('layouts.app')
@section('title','Dashboard Admin')
             

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
              <h4 class="card-title">Editing User</h4>
              @include('layouts.partial.msg')
            </div>
            <div class="card-body table-responsive">
                <form action="{{route('admin.users.update',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                  <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Name</label>
                              <input type="text" class="form-control" name="name" required value={{$user->name}}>
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                              <input type="email" class="form-control" name="email" required value="{{$user->email}}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="bmd-label-floating">Password</label>
                              <input type="password" class="form-control" name="password" required value="{{$user->password}}">
                              </div>
                            </div>
                    </div>

                    <div class="row">
                        @foreach ($roles as $role)
                             <div class="form-check izquierda" >
                                <label class="form-check-label">   
                                    <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}">
                                    <span class="form-check-sign" >
                                        <span class="check"></span>
                                    </span>
                                    
                                    <label>{{$role->name}}</label> &nbsp;
                                </label>
                            </div>
                        @endforeach
                              
                       
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-danger">Back</a>   
                </div>
                    
                </form>
            </div>
          </div>



@endsection


@push('scripts')

@endpush

