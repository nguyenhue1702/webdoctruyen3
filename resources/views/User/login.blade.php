<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('/css/reponlogin.css')}}">
  <link rel="stylesheet" href="{{asset('/css/login.css')}}">
  <link rel="stylesheet" href="{{asset('/css/toast.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body class="nen">
<div class="nenquay"></div>
<div class="nenquay2"></div>
  <div class="form-login">
    <div class="row">
      <div class="col-7">
      <h1>Hello, Friend!</h1>
      <p>Enter your personal details and start journey with us</p>
      <!-- <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_z1tujjy0.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px; "  loop  autoplay></lottie-player> -->
      </div>
      <div class="col-5">
        <div class="login">
        <form action="{{route('LoginAdmin')}}" method="POST">
    @csrf
          <div class="title-login">
            <h2>Login</h2>
            
            <a href="{{route('Home')}}"><i class='bx bxs-home home'></i></a>
           
          </div>
          <div class="content-login">
         
                <div class="input-box"><input type="text"  autofocus name="email"  autocomplete="off">
                <label for="">Nhập Email</label>
              </div>
              @error('email')
              <p class="validation-thongbao">{{$message}}</p>
              @enderror
                <div class="input-box">
                <input class="tuan" id="pass"type="password" name="password" >
                <i class="fa-solid fa-eye-slash" style="color: black" id="eye" onclick="toggle()"></i>
                  <label for="">Nhập Password</label>
               
                </div>
                @error('password')
                <p class="validation-thongbao">{{$message}}</p>
                @enderror
            
              <div>

                <button>Đăng Nhập</button>
              </div>
              <div class="link-create">
                Nếu chưa có tài khoản , đăng ký <a href="{{route('TrangDangKi')}}" class="red">Tại đây</a>
              </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <script src="{{asset('js/show_pass.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if(Session::has('ok'))
<script>
  toastr.options =
  {
    "showMethod": "slideDown",
    "hideMethod": "slideUp",
    "closeMethod":"slideUp",
  	"closeButton" : true,
  	"progressBar" : true,
      "positionClass": "toast-top-center ",
  }
  toastr.success("{{ session('ok') }}","Thành Công");
</script>
@endif

@if(Session::has('loi'))
<script>
  toastr.options =
  {
    "showMethod": "slideDown",
    "hideMethod": "slideUp",
    "closeMethod":"slideUp",
  	"closeButton" : true,
  	"progressBar" : true,
    "positionClass": "toast-top-center",
  }
  	toastr.error("{{ session('loi') }}","Erro");
</script>
@endif

@if(Session::has('info'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
</script>
@endif

@if(Session::has('warning'))
<script>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
</script>
  @endif

</body>
</html>