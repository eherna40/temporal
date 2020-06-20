<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link href="css/fonts.css" rel="stylesheet">
    </head>
    <body class="container-login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pt-4">
                        <img src="{{asset('assets/img/logo.white.svg')}}" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-7 d-none d-md-block">
                    <div class="pr-5">
                        <img src="{{asset('assets/img/tech_logo.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 mt-5 mt-md-4">
                    <div class="box-login p-4 p-md-5 position-relative">
                        <div class="boxed p-md-4">
                            <div class="title-login text-center">
                                <div class="content-border">Login</div>
                            </div>
                            <form action="" class="mt-5">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="position-relative">
                                        <img src="{{asset('assets/img/ic_user.png')}}" class="position-absolute image-input" />
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="position-relative">
                                        <img src="{{asset('assets/img/ic_lock.png')}}" class="position-absolute image-input" />
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-principal mt-3 w-100 ">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-3">
                        <a href="">
                        <div class="box-login p-4 position-relative">
                            <div class="boxed">
                                <div class="boxed-button text-center text-white">REGISTER</div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
            {{-- <div id="root"></div>
            <script src="js/app.js"></script> --}}
        </body>
</html>
