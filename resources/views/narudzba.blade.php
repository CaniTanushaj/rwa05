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
  
    <nav class>
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
    <h1>Rezervacija</h1>
    
<div class="narinfo">
<div class="wrapper">
  <form action="{{url('unos')}}" method="POST">
    @csrf
    <div class="title">Unesite vase podatke</div>
    <div class="checkout_form">
       <div class="input_item">
        <input type="text" name="ime_kartice" placeholder="Ime vlasnika kartice">
     </div>
     <div class="input_item">
        <input type="text" name="email_kartice" placeholder="Email adressa">
     </div>
     <div class="input_item">
       <input type="text" name="broj_kartice" placeholder="0000 0000 0000 0000" data-mask="0000 0000 0000 0000">
    </div>
    <div class="input_grp">
      <div class="input_item">
        <input type="text" name="exp_kartice" placeholder="MM / GG" data-mask="00 / 00">
      </div>
      <div class="input_item">
        <input type="text" name="pin_kartice" placeholder="* * *" data-mask="0 0 0">
      </div>
    </div>
      <div class="btn">
         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
         <input type="hidden" name="marka_r" value="{{$product->Marka}}">
         <input type="hidden" name="model_r" value="{{$product->Model}}">
         <button type="submit" class="dropbtn">Dalje</button>
      </div>
  </div>
</form>
</div>

<div class="narauto">
  <h2>Auto koji rezervirate:</h2>
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
</form>
  
</div>
</div>
</a>
</div>
</div>


    </body>
</html