@extends('layouts.app')
@section('content')
   <h1>{{$title}}</h1>
    @if(count($services)>0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif 

<!-- Example single danger button -->
<div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Manchester City
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmH15b4OK33v0DIbSGSTJd9lHqhlmIUIfKY0yX2wbP3u4B5Wbv" height="40px"> 11/08/2018 - Arsenal A</a>
    <a class="dropdown-item" href="#"><img src="https://tmssl.akamaized.net//images/wappen/head/1110.png?lm=1458928331" height="40px">18/08/2018 - Huddersfield Town H</a>
    <a class="dropdown-item" href="#"><img src="https://wolves-cdn.azureedge.net/Images/wolves-logo.svg" height="40px"> 25/08/2018 - Wolverhampton Wanderers A</a>
    <a class="dropdown-item" href="#"><img src="https://tmssl.akamaized.net//images/wappen/head/762.png?lm=1472921161" height="40px"> 01/09/2018 - Newcastle United H</a>
    <a class="dropdown-item" href="#"><img src="http://ffcw001.azureedge.net/-/media/team/england/crest/fulham.png?w=100&h=100" height="40px"> 15/09/2018 - Fulham H</a>
    <a class="dropdown-item" href="#"><img src="https://www.nufc.co.uk/media/26849/cba00527-a4b0-4858-a72a-4e3dfb3d8441.jpg" height="40px"> Cardiff City A</a>
    <a class="dropdown-item" href="#"><img src="https://www.manutd.com/AssetPicker/images/0/0/4/191/311225/Brighton_and_Hove_Albion1505487825201.png" height="40px"> 29/09/2018 - Brighton and Hove Albion H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=14" height="40px"> 06/10/2018 - Liverpool A</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=90" height="40px"> 20/10/2018 - Burnley H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=6" height="40px"> 27/10/2018 - Tottenham Hotspur A</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=20" height="40px"> 03/11/2018 - Southampton H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=1" height="40px"> 10/11/2018 - Manchester United H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=21" height="40px"> 24/11/2018 - West Ham United A</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=91" height="40px"> 01/12/2018 - Bournemouth H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=57" height="40px"> 04/12/2018 - Watford A</a>
    <a class="dropdown-item" href="#"><img src="https://res.cloudinary.com/chelsea-production/image/upload/c_fill,dpr_auto,f_auto,fl_lossy,g_auto,h_96,q_auto,w_96/v1/logos/rgb-mar18.png" height="40px"> 08/12/2018 - Chelsea A</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=11" height="40px"> 15/12/2018 - Everton H</a>
    <a class="dropdown-item" href="#"><img src="https://secure.omo.akamai.opta.net/image.php?secure=true&h=secure.omo.akamai.opta.net&sport=football&entity=team&description=badges&dimensions=65&id=31" height="40px"> 22/12/2018 - Crystal Palace H</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>
</div>
<br>
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.onlinegambling.com/news/wp-content/uploads/2018/05/Man-City-Trophy.jpg" height="400px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://i2-prod.mirror.co.uk/incoming/article10469892.ece/ALTERNATES/s1200/Chelsea-v-Sunderland-Premier-League.jpg" height="400px" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://cdn-s3.si.com/s3fs-public/styles/marquee_large_2x/public/2016/05/07/leicester-city-lifts-trophy.jpg?itok=1oTLollQ" height="400px"  alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


@endsection
