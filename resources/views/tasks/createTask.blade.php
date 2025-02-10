@extends('layouts.dashboardapp')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9" style="padding-left: 106px;padding-top:50px;">
            <div class="card">
                <div class="card-header">Create Task</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save.task') }}">
                        @csrf
                        <input name="user_id" type="hidden" value="{{$user}}">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $title }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                {{-- <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required> --}}
                                <textarea name="description" rows="6" class="form-control" required></textarea>
                                
                                @if($errors->has('description'))
                                    <div class="error invalid-feedback">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Categories</label>

                            <div class="col-md-6">
                                {{-- <select name="status" class="form-control selectpicker" multiple data-live-search="true">
                                    @foreach ($categories as $categy)
                                    <option value="{{$categy->id}}">{{$categy->name}}</option>
                                    @endforeach
                                </select> --}}
                                <select name="categories[]" class="selectpicker" multiple aria-label="size 3 select example">
                                    @foreach ($categories as $categy)
                                    <option value="{{$categy->id}}">{{$categy->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($errors->has('categories'))
                                    <div class="error invalid-feedback">{{ $errors->first('categories') }}</div>
                                @endif
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Priority</label>

                            <div class="col-md-6">
                                <input type="number" name="priority" class="form-control" required>
                                @if($errors->has('priority'))
                                    <div class="error invalid-feedback">{{ $errors->first('priority') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>

                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                                @if($errors->has('status'))
                                    <div class="error invalid-feedback">{{ $errors->first('status') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{route('home')}}"> <button type="button" class="btn btn-dark">
                                    Back
                                </button></a>
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
  $('#multiselect').multiselect({
    buttonWidth : '160px',
    includeSelectAllOption : true,
		nonSelectedText: 'Select an Option'
  });
});

function getSelectedValues() {
  var selectedVal = $("#multiselect").val();
	for(var i=0; i<selectedVal.length; i++){
		function innerFunc(i) {
			setTimeout(function() {
				location.href = selectedVal[i];
			}, i*2000);
		}
		innerFunc(i);
	}
}


</script>
@endpush
@endsection
