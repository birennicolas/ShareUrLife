@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.shopify.com/s/files/1/0278/2632/3555/articles/malinois-image_800x800.jpg?v=1614100972" alt="malinois" class="rounded-circle" style="width: 10vw; height:auto">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1> {{ $user -> username }}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex pt-4">
                <div class="pe-5"><strong>153 </strong>posts</div>
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
            <div class="col-4">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
        @endforeach

    </div>
</div>


@endsection
