  <header>
    <nav>
      <ul>
        <li><a class="{{Route::currentRouteName()==='home'?'active':''}}" href="{{route('home')}}">Home</a></li>
        <li><a class="{{Route::currentRouteName()==='movies'?'active':''}}" href="{{route('movies')}}">Movie List</a></li>
        <li><a class="{{Route::currentRouteName()==='about'?'active':''}}" href="{{route('about')}}">Contatti</a></li>
      </ul>
    </nav>
  </header>
