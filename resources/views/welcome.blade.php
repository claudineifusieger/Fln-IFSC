<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CTIC - IFSC</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Theme style -->
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/animate.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/hamburgers.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('Wellcome/css/main.css')}}">
        <link rel="shortcut icon" href="{{asset('AdminLTE/dist/img/ctic.png')}}"> 
    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            <div class="content-wrapper">         
                    <div class="limiter">
                    <div class="container-login100">
                        <div class="wrap-login100">
                            <div class="login100-pic js-tilt" data-tilt>
                                <img src="{{asset('AdminLTE/dist/img/img-02.png')}}" alt="IMG">
                            </div>

                            <form class="login100-form validate-form" action="{{ route('login') }}" method="post">
                                <span class="login100-form-title">
                                    Coordenação de Suporte Informática
                                </span>
                                @csrf
                                <div class="wrap-input100 validate-input" data-validate = "User is required">
                                    <input class="input100" type="text" id="username" type="username" name="username" :value="old('username')" placeholder="User name" required />
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                    </span>
                                </div>

                                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                    <input class="input100" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                    </span>
                                </div>
                                
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn">
                                        Login
                                    </button>
                                </div>

                                <div class="text-center p-t-12">
                                    <span class="txt1">
                                        Favor usar conta do IFSC para login
                                    </span>
                                      
                                </div>

                                <div class="text-center p-t-136">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('Wellcome/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('Wellcome/js/popper.js')}}"></script>
        <script src="{{asset('Wellcome/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Wellcome/js/select2.min.js')}}"></script>
        <script src="{{asset('Wellcome/js/tilt.jquery.min.js')}}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <script src="{{asset('Wellcome/js/main.js')}}"></script>
    </body>
</html>
