@extends('layouts.dashboardapp')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9" style="padding-left: 106px;padding-top:50px;">
            <div class="card">
                <div class="card-header">Assign Role</div>

                <div class="card-body">
                    <form action="{{ route('update.user') }}" method="POST">
                        @csrf
                        <input name="user_id" type="hidden" value="{{$user->id}}">
                        <div class="row mb-3">
                          <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="email" class="col-md-4 col-form-label text-md-end">Assign Role</label>
                          

                          <div class="col-md-6">
                              <select name="role" class="form-control">
                                  @foreach ($roles as $role)
                                      <option value="{{$role->id}}" @selected(array_search($user->role_id, array_column($roles->toArray(), 'id')) !== false)>{{$role->role}}</option>
                                  @endforeach
                              </select>
                              @error('role')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $role }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-0">
                          <div class="col-md-6 offset-md-4">
                            <a href="{{route('all.user')}}"> <button type="button" class="btn btn-dark">
                                Back
                            </button></a>
                              <button type="submit" class="btn btn-primary">
                                 Update
                              </button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
