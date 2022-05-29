<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel: Using Bootstrap from Local</title>

   <link href="{{ asset('assets/vendor/bootstrap/5.2.0/css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
   <main>
      <div class="container py-4">
         <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
               <title>Bootstrap</title>
               <span class="fs-4">Bootstrap example</span>
            </a>
         </header>

         <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
               <h1 class="display-5 fw-bold">
                  Using Bootstrap in Laravel Projects
               </h1>
               <p class="col-md-8 fs-4">
                  It's very easy to add the Bootstrap Framework
                  to your Laravel Project.
               </p>
               <button class="btn btn-primary btn-lg" type="button">
                  See how...
               </button>
            </div>
         </div>
      </div>
   </main>

   <script src="{{ asset('assets/vendor/bootstrap/5.2.0/js/bootstrap.min.js') }}"></script>
</body>

</html>