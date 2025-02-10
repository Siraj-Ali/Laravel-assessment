@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="search-tag text-full-right">
        </div>
        @foreach ($posts as $post)
        <div class="col-md-6" style="padding-bottom: 12px;">
            <div class="card">
                <div class="card-body">
                        <div class="card-body">
                            <h5 class="card-title"><strong> {{$post->title}} </strong></h5>
                            {{-- <p class="card-text">{{$post->description}}</p> --}}
                            <p class="card-text">{!! Str::words($post->description, 20, ' ...') !!}</p>
                            <span class="text-muted">{{date('Y-m-d',strtotime($post->created_at))}}</span>
                            <span class="auther" style="float: right">Creator: <b>{{$post->user->name}}</b></span>
                        </div>
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</div>
@endsection
