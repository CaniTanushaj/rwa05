<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Auto salon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
  
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Auto Salon</label>
      <ul>
        <li><a href="{{url('/')}}">Početna</a></li>
        <li><a href="{{ url('/Onama') }}">O nama</li></a>
        @if (Route::has('login'))
        @auth
        <li> <a href="{{ url('/home') }}" class="">{{ Auth::user()->name }}</a></li>
        @else
        <li> <a href="{{ route('login') }}" class="">Prijava</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}" class="">Registracija</a></li>   
      
      @endif
                    @endauth
    
    @endif

      </ul>
    </nav>
    <div class="k-main">
      <div class="flex1">
      </div>
      <div class="flex2">
        <div class="flex2slika">
          <div class="flex2glavnaslika">
      <img src="{{asset('storage/'.$product->slika)}}" class="slike-kartica" id="expandedImg">
            </div>
        <div class="drugeslike">
        <img src="{{asset('storage/'.$product->slika)}}" class="podslika" onclick="myFunction(this);">
        @if($product->slike)
        @foreach(json_decode($product->slike,true) as $photo)
        <img src="{{asset('storage/'.$photo)}}" class="podslika" onclick="myFunction(this);">
        @endforeach
        @endif
        </div>
        </div>
        <div class="flex2info">
        <h2>{{$product->Marka}} {{$product->Model}}</h2>
        </div>
        <div class="flex2dugme">
      
          </div>  
      </div>
      <div class="flex3">
        <b><p>Godiste</p></b>
        {{$product->Godina}}
        <hr>
        <b><p>Kilometraza</p></b>
        {{$product->Kilometraza}}
        <hr>
        <b><p>Gorivo</p></b>
        {{$product->Gorivo}}
        <hr>
        <b><p>Tip</p></b>
        {{$product->Kategorija}}
        <hr>
        <b><p>Kubikaza</p></b>
        {{$product->Kubikaza}}
        <hr>
        <b><p>Snaga</p></b>
        {{$product->Snaga}}
        <hr>
        <b><p>Cijena</p></b>
        {{$product->Cijena}}
        <hr>
      </div>
    </div>

    <div class="mozdasesvidi">
      <h3>Mozda vam se svidi</h3>
    </div>
    <div class="container">
      @foreach($mozdavamsesvidi as $product)
      <a href="{{  route('kartica',$product->slug) }}">
      <div class="card">
        <div class="img8">
        <img src="{{asset('storage/'.$product->slika)}}" class="slike-auta">
</div>
        <div class="content">
        <div class="naziv">
        {{$product->Marka}}
        {{$product->Model}}
        {{$product->Godina}}
</div>

  <button class="button button1">Naruci</button>
</div>
</div>
</a>
      @endforeach
</div>

    <script>
      function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
      </script>
  </body>
</html