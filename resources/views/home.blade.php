@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.shopify.com/s/files/1/0278/2632/3555/articles/malinois-image_800x800.jpg?v=1614100972" alt="malinois" class="rounded-circle" style="width: 10vw; height:auto">
        </div>
        <div class="col-9 p-5">
            <div><h1> {{ $user -> username }}</h1></div>
            <div class="d-flex pt-4">
            <div class="pe-5"><strong>153 </strong>posts</div>
            <div class="pe-5"><strong>23k </strong>followers</div>
            <div class="pe-5"><strong>212 </strong>followings</div>
            </div>
            <div class="pt-4 font-weight-bold">kenzathemalinois</div>
            <div class="pt-4">I am one of the craziest dogs you can ever imagine</div>
            <div ><a href="https://www.woopets.fr/chien/race/berger-belge-malinois">Malinois</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://cdn.shopify.com/s/files/1/0278/2632/3555/articles/malinois-image_800x800.jpg?v=1614100972" alt="malinois1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://images.onlinepets.com/uploads/2021/02/Mechelse-Herder.jpg?auto=format" alt="malinois2" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://www.woopets.fr/assets/races/000/031/square300/berger-belge-malinois.jpg" alt="malinois3" class="w-100">
        </div>
    </div>
</div>


@endsection
