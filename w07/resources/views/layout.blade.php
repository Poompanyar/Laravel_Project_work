<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    
    {{-- navbar design --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">All-DATA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/categorises">Categorises</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/customer">Customer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/formdata" style="color:rgb(128, 128, 249);,">Form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/category-chart" style="color:rgb(255, 255, 161);">Category Chart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/customer-chart" style="color:rgb(255, 255, 161);">Customer Chart</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <div>
        @yield('content')
    </div>

</body>
@yield('html')
</html>