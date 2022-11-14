<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/toast.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body class="nen">
<div class="nenquay"></div>
<div class="nenquay2"></div>
<!-- <div class="nenquay3"></div> -->
    <div class="tieude">WebTruyen.Vn</div>
   <div class="register">
       <div class="lopgia"></div>
       {{-- <div class="dichuyen"></div> --}}
       <div class="hieuung-reg">
           <img src="/img/tuan.gif" alt="" srcset="">
       </div>
      
       <span class="chux">
<img src="/img/chux.png" alt="chữ X">
       </span>
       <span class="tamgiac">
           <img src="/img/tamgiac.png" alt="tam giác">
       </span>
       <div class="row">
       <div class="col-7">

       </div>
       <div class="col-5 form-register">
           <h1>Đăng Ký</h1>
       <form action="{{route('DangKi')}}" method="POST">
           @csrf
           <div>
               <label for="">Nhập Tên</label><br>
               <input type="text" name="admin_name" placeholder="Enter Name" require>
           </div>
           <div>
               <label for="">Nhập Email:</label><br>
               <input type="text" name="admin_email" placeholder="Enter Email" require>
           </div>
           <div>
           <i class="bi bi-eye-slash move-pas color-red"  id="eye" onclick="toggle()"></i>
               <label for="">Nhập Mật Khẩu</label><br>
               <input type="password" name="admin_password" placeholder="Enter PassWord" require id="pass">
           </div>
         <div class="apply">
         <div class="home-reg"><a href="{{route('Home')}}"><i class="bi bi-house-door"></i></a></div> 
             <button>Đăng Kí</button>
         </div>
       </form>
       </div>
   </div>
   </div>
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