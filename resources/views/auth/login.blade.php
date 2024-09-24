@php
$desa = App\Desa::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="base-url" content="{{ url('') }}">

   <!-- SEO Management-->
   <meta name="author" content="Maulana Kevin Pradana">
   <meta name="keywords" content="desa arjasa,arjasa jember,arjasa,desa,desa.id,arjasa arjasa jember,desa di kecamatan arjasa jember,desa arjasa jember,daerah arjasa,website desa arjasa, web desa arjasa, website arjasa, web arjasa">

   <title>Login</title>

   <!-- Favicon -->
   <link href="{{ asset('storage/logo2.png') }}" rel="icon" type="image/png">



   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

   <!-- Icons -->
   <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
   <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

   <!-- CSS Files -->
   <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet">
   <style>
      .login-container {
         min-height: 100vh;
         display: flex;
         justify-content: center;
         align-items: center;
         background-color: #f8f9fa;
      }

      .login-card {
         width: 100%;
         max-width: 400px;
      }
   </style>
</head>

<body>
   <div class="login-container bg-gradient-success">
      <div class="card login-card bg-secondary shadow border-0">
         <div class="card-body px-lg-5 py-lg-5">
            <h1 class="text-center mb-4 ">
               Login
            </h1>
            <div class="text-center mb-4">
               <img src="{{ asset('storage/konawe.png') }}" width="150px" class="mb-5" alt="Logo Konawe" srcset="">
              

            </div>
            <form role="form" action="{{ route('masuk') }}" method="POST">
               @csrf
               <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                     </div>
                     <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" type="email">
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <div class="input-group input-group-alternative">
                     <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                     </div>
                     <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" type="password" value="{{ old('password') }}">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Login</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</body>

</html>
<script>
   $(document).ready(function() {
      $(document).on("submit", "form", function() {
         $(this).find("button:submit").attr('disabled', 'disabled');
         $(this).find("button:submit").html(`<img height="20px" src="{{ url('/storage/loading.gif') }}" alt=""> Loading ...`);
      });
   });
</script>