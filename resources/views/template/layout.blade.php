<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body style="background-color: #fefefe">
    <header class="container-fluid header p-0 pb-3">
        <nav class="navbar navbar-expand-sm py-2 " style="background: linear-gradient(to right, #5433ff, #20bdff, #a5fecb);">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link text-light" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/ingredientes') }}">ingredientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/tipos') }}">criar tipo de ingredientes</a>
              </li>
            </ul>
        </nav>
    </header>
    @yield('body')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <footer class="fixed-bottom" style="background: linear-gradient(to right, #5433ff, #20bdff, #a5fecb);">
        <div class="text-center">
            <p class=" text-white" style="font-size:10px" >Copyright &copy; 2022 - My Fridge</p>
        </div>
    </footer>
</body>
</html>