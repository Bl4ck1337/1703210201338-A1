<!DOCTYPE html>
<html lang="en">

<head>
@include('website.includes.header')
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
          <a class="nav-link" href="{{ URL::to('/') }}">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
          <a class="nav-link btn btn-outline-success" href="{{ URL::to('signup') }}">signup</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  @yield('content')

        @include('website.includes.footer')

@include('website.includes.scripts')
</body>

</html>
