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
        <li><a class="active"  href="{{url('/')}}">Početna</a></li>
        <li><a href="{{ url('/Onama') }}" class="nvbr">O nama</li></a>
        @if (Route::has('login'))
        @auth
        <li> <a href="{{ url('/home') }}" class="nvbr">{{ Auth::user()->name }}</a></li>
        @else
        <li> <a href="{{ route('login') }}" class="nvbr">Prijava</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}" class="nvbr">Registracija</a></li>   
      
      @endif
                    @endauth
    
    @endif
      </ul>
    </nav>
    <div class="sortiranje">
    <div class="dropdown">
  <button class="dropbtn">Tip</button>
  <div class="dropdown-content">
  @foreach($categories as $category)
  <a href="{{route('welcome.index',['category'=>$category->Tip])}}">{{$category->Tip}}</a>
      @endforeach
  </div>
</div>

      
<div class="dropdown">
  <button class="dropbtn">Cijena</button>
  <div class="dropdown-content">
  <a href="{{route('welcome.index',['category'=>request()->category,'sort'=>'low_high'])}}">Uzlazno</a>
  <a href="{{route('welcome.index',['category'=>request()->category,'sort'=>'high_low'])}}">Silazno</a>
  </div>
</div>
      
</div>
    <div class="container">
      @foreach($products as $product)
      <a href="{{  route('kartica',$product->slug) }}">
      <div class="card">
        <div class="img8">
        <img src="{{asset('storage/'.$product->slika)}}" class="slike-auta">
</div>
        <div class="content">
        <div class="naziv">
        {{$product->Marka}}
        {{$product->Model}}
        {{$product->Godina}}<br>
        {{$product->Cijena}} KM
</div>

  <button class="button button1">Rezerviraj</button>
</div>
</div>
</a>
      @endforeach
</div>
  </body>
</html