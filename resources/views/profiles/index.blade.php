@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}"  class="rounded-circle" style="width: 250px; height:auto">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h1> {{ $user -> username }}</h1>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                <button class="btn btn-primary ms-4">
                <a href="/p/create" style="color:white;">Add new post</a>
                </button>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user -> id }}/edit">Edit profile</a>
            @endcan

            <div class="d-flex pt-4">
                <div class="pe-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                <div class="pe-5"><strong>23k </strong>followers</div>
                <div class="pe-5"><strong>212 </strong>followings</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div class="pt-4">{{ $user->profile->description }}</div>
            <div ><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach

    </div>
</div>


@endsection
