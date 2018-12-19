@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>This is about Laravel application from "Kabin Gurung".</p>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
    </head>
    <body>

    <div class="container">
<h3 class="text-center">PL Stories.<small></small></h3>
<hr>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
       <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
         <div class="carousel-inner">
<div class="carousel-item active">            <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://mediacdn.mancity.com/-/media/news-pics/2017/may/players.ashx?width=640&height=360" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.mancity.com/citytv/features/2017/may/man%20city%209320%20documentary%20players%20episode" class="align-self-end">
                    <span class="badge">ManchesterCity</span> 
                    <h4 class="card-title">93:20 DOCUMENTARY: THE PLAYERS</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="http://resources0.news.com.au/images/2012/03/11/1226296/065172-didier-drogba.jpg" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.chelseafc.com/en/news/2018/8/9/start-as-you-mean-to-go-on">
                    <span class="badge">InsideBlue</span> 
                    <h4 class="card-title">START AS YOU MEAN TO GO ON</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://img.maximummedia.ie/joe_ie/eyJkYXRhIjoie1widXJsXCI6XCJodHRwOlxcXC9cXFwvbWVkaWEtam9lLm1heGltdW1tZWRpYS5pZS5zMy5hbWF6b25hd3MuY29tXFxcL3dwLWNvbnRlbnRcXFwvdXBsb2Fkc1xcXC8yMDE0XFxcLzEwXFxcL0ludmluY2libGVzLmpwZ1wiLFwid2lkdGhcIjo3NjcsXCJoZWlnaHRcIjo0MzEsXCJkZWZhdWx0XCI6XCJodHRwczpcXFwvXFxcL3d3dy5qb2UuaWVcXFwvYXNzZXRzXFxcL2ltYWdlc1xcXC9qb2VcXFwvbm8taW1hZ2UucG5nP3Y9NVwifSIsImhhc2giOiJkZTExYWYxMTU0ODI4OTkwNWVmNTFjMmVhZmVmYWQ4YjA2OTc1Y2M5In0=/invincibles.jpg" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="http://www.skysports.com/watch/video/sports/football/9721322/arsenal-invincibles-documentary" class="align-self-end">
                    <span class="badge">SkySports</span> 
                    <h4 class="card-title">Arsenal: Invincibles Documentary</h4>
                    <p class="textfeat" style="display: none;">Gerbong.id - Bank Tabungan Negara (Persero) resmi merilis tabungan valuta asing (valas) di Batam. Sebagai daerah yang berbatasan langsung dengan Singapura dan sebagai pintu gerbang wisatawan mancanegara (wisman), transaksi valas</p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://img.maximummedia.ie/joe_co_uk/eyJkYXRhIjoie1widXJsXCI6XCJodHRwOlxcXC9cXFwvbWVkaWEtam9lY291ay5tYXhpbXVtbWVkaWEuaWUuczMuYW1hem9uYXdzLmNvbVxcXC93cC1jb250ZW50XFxcL3VwbG9hZHNcXFwvMjAxN1xcXC8wOVxcXC8yNzE3MDIxOVxcXC9NYW5VdGRPbGRUcmFmZm9yZC5qcGdcIixcIndpZHRoXCI6NjQwLFwiaGVpZ2h0XCI6MzYwLFwiZGVmYXVsdFwiOlwiaHR0cHM6XFxcL1xcXC93d3cuam9lLmNvLnVrXFxcL2Fzc2V0c1xcXC9pbWFnZXNcXFwvam9lY291a1xcXC9uby1pbWFnZS5wbmc_dj01XCJ9IiwiaGFzaCI6ImQ0ODQyNmU5ZDFiNTFjYjlkYjVlOWI3MDIwNTEyMGY3YjUyODUxYTkifQ==/manutdoldtrafford.jpg" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.joe.co.uk/sport/manchester-united-fans-will-absolutely-love-this-documentary-thats-on-bbc-143243" class="align-self-end">
                    <span class="badge">PaulMoore</span> 
                    <h4 class="card-title">Manchester United fans will absolutely love this documentary that's on BBC</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://s2-ssl.dmcdn.net/mp_SC/x1080-aAz.jpg" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.liverpoolfc.com/news/announcements/235817-10-reasons-not-to-miss-this-is-anfield-documentary" class="align-self-end">
                    <span class="badge">SteveHunter</span> 
                    <h4 class="card-title">10 reasons not to miss 'This Is Anfield' documentary</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
        <div class="carousel-item">           <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://ichef.bbci.co.uk/news/660/cpsprodpb/23E8/production/_89329190_gettyimages-518875206.jpg" alt="">
                <div class="card-img-overlay d-flex linkfeat">
                  <a href="https://www.bbc.com/news/world-us-canada-36028733" class="align-self-end">
                    <span class="badge">Tom Geoghegan</span> 
                    <h4 class="card-title">Explaining the Leicester City story to Americans</h4>
                    <p class="textfeat" style="display: none;"></p>
                  </a>
                </div>
              </div>
            </div>
                </div>
      </div>
    </div>
    <div class="col-6 py-0 px-1 d-none d-lg-block">
        <div class="row">
            <div class="col-6 pb-2 mg-1 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://s.yimg.com/ny/api/res/1.2/uuLjRrDjJAaLmqY5L1mcUw--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/http://media.zenfs.com/en/homerun/feed_manager_auto_publish_494/819ee188ff85dc14607709996aeb0942" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.premierleague.com/news/489161" class="align-self-end">
                    <span class="badge">MichaelCox</span> 
                    <h6 class="card-title">Game changers: Cristiano Ronaldo</h6>
                  </a>
                </div>
                </div>
            </div>
                        <div class="col-6 pb-2 mg-2 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://i.eurosport.com/2018/04/21/2317905-48256870-2560-1440.jpg?w=1050" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.premierleague.com/news/670133" class="align-self-end">
                    <span class="badge">PremierLeague</span> 
                    <h6 class="card-title">Salah equals scoring landmark </h6>
                  </a>
                </div>
                </div>
            </div>
                        <div class="col-6 pb-2 mg-3 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://cdne.elbocon.pe/thumbs/uploads/img/2018/02/06/harry-kane-sobre-el-arsenal-su-rechazo-me-llevo-a--161669-jpg_600x0.jpg" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.premierleague.com/news/713944" class="align-self-end">
                    <span class="badge">PremierLeague</span> 
                    <h6 class="card-title">Kane on target to beat Shearer with new deal</h6>
                  </a>
                </div>
                </div>
            </div>
                        <div class="col-6 pb-2 mg-4 ">
                <div class="card bg-dark text-white">
                <img class="card-img img-fluid" src="https://images.performgroup.com/di/library/GOAL/e2/a9/david-silva-manchester-city_c3o6sswojjm11u3c9q8qvefm5.jpg?t=-1575170513&quality=100" alt="">
                <div class="card-img-overlay d-flex">
                  <a href="https://www.mancity.com/news/first-team/media-watch/2018/july/man-city-transfer-news-rumours-david-silva-phil-foden-leroy-sane" class="align-self-end">
                    <span class="badge">DavidClayton</span> 
                    <h6 class="card-title">DAVID SILVA: JOINING CITY WAS 'BEST EVER DECISION'</h6>
                  </a>
                </div>
                </div>
            </div>
                    </div>
    </div>
</div>

</div>

<script type="text/javascript">
    $(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});
</script>

<div>
   <iframe width="1100px" height="400px" src="https://www.youtube.com/embed/IhFqxOfLA7M?autoplay=1">
</iframe>
</div>
@endsection
