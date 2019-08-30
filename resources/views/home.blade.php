@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flis8-1.fna.fbcdn.net/vp/c13086cf318052f27d5c2c6f23c00378/5DF46360/t51.2885-19/s150x150/61277070_2635362439825778_6639180147171786752_n.jpg?_nc_ht=instagram.flis8-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>
        <div class="col-9">
            <div><h1>alissonzampietro</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>12k</strong> followers</div>
                <div class="pr-5"><strong>1099</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ Auth::user()->name }}
            </div>
            <div>
                <p>A web developer trying to figure out how to use Laravel in the right way</p>
            </div>
            <div><a href="https://github.com/alissonzampietro">https://github.com/alissonzampietro</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.flis8-1.fna.fbcdn.net/vp/3605d375238fefe45468f22c70b42787/5DF3D20F/t51.2885-15/sh0.08/e35/s640x640/43817577_1224109581061400_2327459974708461869_n.jpg?_nc_ht=instagram.flis8-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.flis8-1.fna.fbcdn.net/vp/dee8f6ef9eefb714676abb43301a89ae/5E098F63/t51.2885-15/sh0.08/e35/s640x640/44619035_2367069313366885_2459736659840605248_n.jpg?_nc_ht=instagram.flis8-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.flis8-1.fna.fbcdn.net/vp/9e3248bb7b4f6a99225fc544784f4686/5E09484F/t51.2885-15/e35/s480x480/46083585_219442855599748_2570338319928185630_n.jpg?_nc_ht=instagram.flis8-1.fna.fbcdn.net" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
