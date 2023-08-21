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
        <a href="#">MOVIES</a>
      </li>
      <li>
        <a href="#">TV</a>
      </li>
      <li>
        <a href="#">GAMES</a>
      </li>
      <li>
        <a href="#">COLLECTIBLES</a>
      </li>
      <li>
        <a href="#">VIDEOS</a>
      </li>
      <li>
        <a href="#">FANS</a>
      </li>
      <li>
        <a href="#">NEWS</a>
      </li>
      <li>
        <a href="#">SHOP</a>
      </li>
    </ul>
  </div>
  <div>
    <label for="search">Search</label>
    <input id="search" type="text">
  </div>

</header>

<section class="jumbotron">
  <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="Jumbo">
</section>
