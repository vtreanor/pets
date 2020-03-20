<div class="nav-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item"><a class="nav-link" href="/index">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/user/show/{{ Auth::id() ?? 1}}">Profile </a></li>
        <li class="nav-item"><a class="nav-link" href="/event/user">Events</a></li>
        <li class="nav-item"><a class="nav-link" href="/course/user">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="/appointments">Appointments</a></li>
        <li class="nav-item"><a class="nav-link" href="/form/user">Forms</a></li>
        <li class="nav-item"><a class="nav-link" href="/galleries">Galleries</a></li>
        <li class="nav-item"><a class="nav-link" href="/shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/terms">Terms</a></li>
      </ul>
    </div>
  </nav>
</div>