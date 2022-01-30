@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="d-flex col-4 p-5" style="align-items: center; justify-content: center">
            <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/ikqra03zdnggljdu5vv0" style="height: 160px;width: 160px;" class="rounded-circle">
        </div>
        <div class="col-8 pt-5 w-50">
            <div>
                <h1>freeCodeCamp</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">freeCodeCamp.com</div>
            <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum, enim sapiente aliquam id, autem iusto maxime temporibus maiores ex magni.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
</div>
@endsection
