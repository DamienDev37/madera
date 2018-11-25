<!DOCTYPE html> 
<html lang="fr">
    <head> 
        <meta charset="utf-8">
        <meta name="author" content="Svi Prosis">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="xxxx-xx-xxx" />
        <meta name="description" content="aaaaaaaaaaaaaaaaaa">
        <meta name="keywords" content="aaaaaaaaaaaaaaaa">
        <title>@yield('title') - Madera</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet"  type="text/css" href="<?=url('/css/bootstrap.min.css');?>">
        <link rel="stylesheet"  type="text/css" href="<?=url('/css/regular.css');?>">
        <link href="<?=url('/css/fontawesome.min.css');?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet"  type="text/css" href="<?=url('/css/dataTables.bootstrap4.min.css');?>">
        <link rel="stylesheet"  type="text/css" href="<?=url('/css/app.css');?>">
    </head> 
    <body id="page-top">
        @include('header')
        <div id="wrapper">
           @include('sidebar') 
            <div id="content-wrapper">
                <div class="container-fluid">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                          <a href="/">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                      </ol>
                    <div class="row">
                        @yield('content')
                        <!--@include('footer') -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END JS Files --> 
        <script type="text/javascript" src="<?=url('/js/jquery-3.3.1.min.js');?>"></script>
        <script type="text/javascript" src="<?=url('/js/popper.min.js');?>"></script>
        <script type="text/javascript" src="<?=url('/js/bootstrap.min.js');?>"></script>
        <script src="<?=url('/js/jquery.easing.min.js');?>"></script>
        <script src="<?=url('/js/Chart.min.js');?>"></script>
        <script src="<?=url('/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?=url('/js/dataTables.bootstrap4.min.js');?>"></script>
        <script src="<?=url('/js/app.js');?>"></script>
    </body>
</html>
