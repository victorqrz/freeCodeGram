@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center" style="flex-direction: column;">
    <div class="row d-flex justify-content-center">
        <div class="d-flex pt-3 col-2" style="align-items: flex-start; justify-content: flex-start;margin-right: 50px;">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" style="height: 140px;width: 140px;" class="rounded-circle">
        </div>
        <div class="col-10 pt-3" style="width: 40%;">
            <div>
                <h2>{{ $user->username }}</h2>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>441</strong> posts</div>
                <div class="pe-5"><strong>90k</strong> followers</div>
                <div class="pe-5"><strong>339</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5" style="margin: 0 auto;">
        <div class="col-md-4 p-3">
            <img src="https://avatars.githubusercontent.com/u/38059087?v=4" style="height: 300px; width: 300px;">
        </div>
        <div class="col-md-4 p-3">
            <img src="https://avatars.githubusercontent.com/u/38059087?v=4" style="height: 300px; width: 300px;">
        </div>
        <div class="col-md-4 p-3">
            <img src="https://avatars.githubusercontent.com/u/38059087?v=4" style="height: 300px; width: 300px;">
        </div>
    </div>
</div>

@endsection
