@extends('layouts.nav')
@section("titulo","INoticias")
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>El chismoso | @yield('titulo')</title>
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
   
     <!-- Font Awesome -->
     <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="/dist/css/adminlte.min.css">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   
       <!-- Basic -->
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
       <!-- Mobile Metas -->
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
       <!-- Site Metas -->
       <title>Tech Blog - Stylish Magazine Blog Template</title>
       <meta name="keywords" content="">
       <meta name="description" content="">
       <meta name="author" content="">
       
       <!-- Site Icons -->
       <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
       <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
       
       <!-- Design fonts -->
       <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
   
       <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.css" rel="stylesheet">
   
       <!-- FontAwesome Icons core CSS -->
       <link href="css/font-awesome.min.css" rel="stylesheet">
   
       <!-- Custom styles for this template -->
       <link href="css/style.css" rel="stylesheet">
   
       <!-- Responsive styles for this template -->
       <link href="css/responsive.css" rel="stylesheet">
   
       <!-- Colors for this template -->
       <link href="css/colors.css" rel="stylesheet">
   
       <!-- Version Tech CSS for this template -->
       <link href="css/tech.css" rel="stylesheet">
   
       <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       <![endif]-->
   </head>
<body>
----------------------------------------------------
<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        @if($noticia != NULL)
                            <h3>{{ $noticia->titulo }}</h3>
                            <div class="blog-meta big-meta">
                            <small><a href="{{route("noticias.detalles",$noticia->id)}}"title="">{{ $noticia->fecha }}</a></small>
                            <small><a href="{{route("noticias.detalles",$noticia->id)}}" title="">{{ $noticia->autor }}</a></small
                            <small><a href="{{route("noticias.detalles",$noticia->id)}}" title="">{{ $noticia->titulo }}</a></small
                                @else
                                <h1>Lo sentimos, no se encontró la noticia que buscas </h1>
                        @endif
                             </div><!-- end meta -->
                    </div><!-- end title -->
                    
                    <div class="single-post-media">
                        @if($noticia->foto != NULL)
                        <img src="{{$noticia->foto}}" style="width: 800px; height: auto;" />
                        @else
                        <img src="/assets/img/logo-noticias.jpg" style="width: 800px; height: auto;" alt="" class="img-fluid">
                   @endif
                    </div><!-- end media -->
                    <div class="blog-content">
                        <div class="pp">
                            @if($noticia != NULL)
                                <p>{{ $noticia->cuerpo }}</p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <a class="nav-link" href="/"><button type="button" class="nbtn btn-primary">Volver a la lista de noticias</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <script src="js/jquery.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>