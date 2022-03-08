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
    <div class="hvala">
        <div class="podhvala">
        <h1>Uspješna rezervacija!</h1>
        <button class="dropbtn">Vrati se na početak</button>
</div>
</div>
  </body>
</html