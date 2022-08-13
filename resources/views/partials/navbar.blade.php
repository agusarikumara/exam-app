<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Books Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link @if( request ()->is('/')) active @endif" href="/">List Top 10</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if( request ()->is('filter')) active @endif" href="/filter">Filter Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if( request ()->is('insert')) active @endif" href="/insert">Insert Rating</a>
        </li>
      </ul>
    </div>
  </div>
</nav>