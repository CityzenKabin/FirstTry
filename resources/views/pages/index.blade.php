@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
    <h1>English Premier Leaguue Nepal</h1>
    <p>This is Laravel application from "Kabin Gurung".</p>

        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
    <div class="container" >
        <article id="main-col">
        <h2><b>Premier League Crazy??</b></h2>

    <p>Crazy for Premier League?, then turn on the light.</p>

    <button onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulbon.gif'">Turn on the light</button>

    <img id="myImage" src="https://www.w3schools.com/js/pic_bulboff.gif" style="width:100px">

    <button onclick="document.getElementById('myImage').src='https://www.w3schools.com/js/pic_bulboff.gif'">Turn off the light</button>
        </article>
        <aside id="sidebar">
            <img src="http://sportsmancs.com/wp-content/uploads/2018/06/untitled-800x445.jpg"  width="500" height="233">
        </aside>
        <H2>You got Football brain?? Then Yes, This is the place for you.</H2>
    </div>
<br><br>

<div >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.performgroup.com/di/library/GOAL/e3/51/jurgen-klopp-liverpool_efquzr8whplp1w067iazqhn42.jpg?t=454776911" height="400 px" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><b>Jurgen Klopp</h5>
                    <p>The Premier League is one of the most difficult in the world. There's five, six, or seven clubs that can be the champions. Only one can win, and all the others are disappointed and live in the middle of disaster.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://cdn.images.express.co.uk/img/dynamic/67/590x/Riyad-Mahrez-Liverpool-Arsenal-905244.jpg" height="400 px" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Riyad Mahrez</h5>
                    <p>To sum it up, I would say that the Premier League is football's NBA.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://e1.365dm.com/17/01/16-9/20/skysports-premier-league-football-pep-guardiola-manchester-city_3863015.jpg?20170102152105" height="400px" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pep Guardiola</h5>
                    <p>I feel what I feel, and in the Premier League, there are some special things, but the pitch is the same. What I believe is good and will be good.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection
