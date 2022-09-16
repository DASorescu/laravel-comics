@extends('layouts.main')
@section('route',$comic['title'])
@section('main-content')
<section id="comic-info">
<div class="blue-banner">
    <div class="image-container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>
</div>
<div class="wrapper">
    <div class="info-content">
        <h2>{{$comic['title']}}</h2>
        <div class="availability">
            <div class="price"></div>
            <div class="status"></div>
            <div class="check"></div>
        </div>
        <p></p>
    </div>
    <figure>
        <img src="" alt="">
    </figure>
</div>
</section>
@endsection
@section('main-banner')
<section id="comic-credits">

</section>
@endsection

