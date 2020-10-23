@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
             @if (empty($profile->image))

                        <img class="rounded-circle" width="150" src="{{ url('/images/profile.png') }}">
                        @else:

                        <img class="rounded-circle" width="150" src="/{{ $profile->image }}"> 
                        @endif
            <strong>Hello {{ $user->name }}</strong>
                <div class="pt-3">{{$profile->description}}</div>
                <div class="pt-3"><a href="profile/edit">Edit Profile</div>
        </div>    
        <div class="col-md-9">
                
                <div class="row pt-5">
                    @foreach($posts as $post)
                        <div class="col-4 mb-5">
                            <a href="/post/{{$post->id}}">
                                <img src="/storage/{{$post->image}}" class="w-100">
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
