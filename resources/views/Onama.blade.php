<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Auto salon App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Auto Salon App</label>
      <ul>
        <li><a href="{{ url('/') }}">Početna</a></li></a>
        <li><a class="active" href="{{ url('/Onama') }}">O nama</a></li>
        @if (Route::has('login'))
        @auth
        <li> <a href="{{ url('/home') }}" class="">Odjava</a></li>
        @else
        <li> <a href="{{ route('login') }}" class="">Prijava</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}" class="">Registracija</a></li>   
      
      @endif
                    @endauth
    
    @endif

      </ul>
    </nav>
    <div class="caca">
    <div class="box"><img src="{{asset('/img/ht.jpeg')}}" class="slike">
      <li>Ime i prezime: Hasan Tanushaj</li>
      <li>Grad: Livno</li>
      <li>Kontakt: 063165448</li>
  </div>
    <div class="box2"><h1 style="margin: 10px; color: white;">Nešto o nama i o projektu</h1>
    <p style="padding: 10px; font-size: 30px;">
        Hasan Tanushaj i Mateo Vukoja su studenti treće godine Fakulteta strojarstva, računarstva i elektrotehnike sveučilišta u Mostaru. Kao veliki obožavatelji automobila odlučili smo kroz projekt omogućiti olakšice kod procesa kupnje, servisiranja i potrage odgovarajućeg automobila. Kroz našu aplikaciju možete personalizirati ponudu automobila i raznih usluga koje se nude na tržištu. Na prvom mjestu nam je ostvarivanje korisnikovih zahtjeva i uspješna suradnja. 
    </p>
    </div>
    <div class="box"><img src="{{asset('/img/MV.jpeg')}}" class="slike">
    <li>Ime i prezime: Mateo Vukoja</li>
      <li>Grad: Široki Brijeg</li>
      <li>Kontakt: 063176304</li></div>

    </div>

  </body>
</html>