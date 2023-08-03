<header class="container">
  <div>
    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo">
  </div>
  <div>
    <ul>
      <li>
        <a href="{{ route('home') }}">HOME</a>
      </li>
      <li>
        <a href="{{ route('comics') }}">COMICS</a>
      </li>
      <li>
        <a href="#">CHARACTERS</a>
      </li>
      <li>
        <a href="#">MOVIES</a>
      </li>
      <li>
        <a href="#">TV</a>
      </li>
      <li>
        <a href="#">GAMES</a>
      </li>
      <li>
        <a href="#">VIDEOS</a>
      </li>
    </ul>
  </div>
  <div>
    <label for="search">Search</label>
    <input id="search" type="text">
  </div>
</header>
