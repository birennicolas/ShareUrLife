@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

        <div class="col-4">
            <div class="#">
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 100px;">
                    </div>
                    <div class="div">
                        <div>
                            <strong>
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </strong>
                                <a href="#" class="ps-3">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span>
                        <strong>
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </strong>
                    </span>{{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>


@endsection
