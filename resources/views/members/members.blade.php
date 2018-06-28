
@extends('layouts.app')

@section('content')


<style>
    img{
        height:1000px;
        width:1000px;
        margin:0;
        padding:0;
    }
    
    h1 {
        text-align: center;
        font-size: 60px;
        color: gold;
    }
    
    .carousel-caption {
        top: 50%;
    }
    
    .carousel-control {
        opacity: 0.5;
    }
    
    .btn {
        font-size: 18px;
        color: #FFF;
        padding: 12px 22px;
        background: black;
        border: 2px solid #FFF;
    }
</style>

<div id = "myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        
        
        <div class="item active">
            <img src="/images/koreken_image.png">
            
            
            <div class="carousel-caption">
                <h1>Kenta Koreto</h1>
                <br>
                <a href="members/koreken" button type="button" class="btn btn-default">Detail</a>
                
                
            </div>
        </div>
        <div class="item">
            <img src="/images/shuhei_image.png">
             <div class="carousel-caption">
            <h1>Shuhei Horiba</h1>
            <br>
           <a href="members/shuhei" button type="button" class="btn btn-default">Detail</a>
            </div>
        </div>
         <div class="item">
            <img src="/images/yuta.png">
             <div class="carousel-caption">
            <h1>Yuta Takahashi</h1>
            <br>
           <a href="members/yuta" button type="button" class="btn btn-default">Detail</a>
            </div>
        </div>
         <div class="item">
            <img src="/images/marina_image.png">
             <div class="carousel-caption">
            <h1>Marina Yamane</h1>
            <br>
            <a href="members/marina" button type="button" class="btn btn-default">Detail</a>
            </div>
        </div>
         <div class="item">
            <img src="/images/kanna-image.png">
             <div class="carousel-caption">
            <h1>Kanna Satake</h1>
            <br>
            <a href="members/kanna" button type="button" class="btn btn-default">Detail</a>
            </div>
        </div>
         <div class="item">
            <img src="/images/minami_image.png">
             <div class="carousel-caption">
            <h1>Minami Mori</h1>
            <br>
           <a href="members/minami" button type="button" class="btn btn-default">Detail</a>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>















@endsection
