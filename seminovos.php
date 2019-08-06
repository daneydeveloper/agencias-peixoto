<?php include('core.php');?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="Encontre o seminovo certo para você, clique aqui e veja todas as ofertas." />
        <meta name="keywords" content="seminovos, seminovos premium, seminovos fortaleza, seminovos ford, seminovos kia, seminovos land rover, seminovos ceara" />
        <meta name="author" content="Agência Midia9" />
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="Agências Peixoto | Seminovos">
        <meta property="og:title" content="Agências Peixoto | Seminovos">
        <meta property="og:description" content="Encontre o seminovo certo para você, clique aqui e veja todas as ofertas.">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image" content="http://agenciaspeixoto.com.br/assets/images/Land-Rover-Range-Rover-Car-HD-Wallpapers.jpg">
        <meta property="og:type" content="website">
        <title>Agências Peixoto | Seminovos</title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-16x16.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.selectBox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="assets/css/global.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" >
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/less" href="assets/css/skin.less">
    </head>
    <body>
        <!--Page Wrapper Start-->
        <div id="wrapper">
            <!--Header Section Start-->
            <?php include_once("header.php");?>
            <!--Header Section End-->
            <!--Content Section Start-->
            <div id="content">
                <section class="banner2 banner-margin-zero">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 ">
                                <h1>Seminovos</h1>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index">Início </a>
                                    </li>
                                    <li>
                                        <a href="seminovos"> Seminovos </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="all-vehcles-filter">
                    <div class="container">
                        <div class="filter clearfix">
                            <form method="GET" action="buscar-seminovos">
                                <div class="col-md-4">
                                    <div class="input-text-wrap">
                                        <input type="text" placeholder="Busca Genêrica Ex: Nome, Modelo..." id="name" value="<?=@$_GET['nome']?>" name="nome" class="contact-name">
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <?php $data = getMontadoras(); ?>
                                <div class="col-md-4">
                                    <select name="montadora">
                                        <option value="" selected="" disabled="">Selecione uma Montadora</option>
                                        <?php foreach ($data->montadoras as $key): ?>
                                        <option <?=($key->PRO_Marca == @$_GET['montadora'])? 'selected': ''?> value="<?=$key->PRO_Marca?>"><?=$key->PRO_Marca?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <button class="orange-btn btn-block">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </section>
        <section class="main-vehicles-wrap">
            <div class="container">
                <div class="row po-rel pattern">
                    <!--  <div class="col-md-12">
                        <div class="filter-car-aside">
                          <form method="GET" action="buscar-seminovos">
                            <div class="filter-car-selection">
                              <h4>Tenho interesse neste Seminovo!</h4>
                              <fieldset class="form-group">
                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                              </fieldset>
                            </div>
                            <div class="filter-vehicles-btn">
                              <button type="submit" class="orange-btn"> <i class="fa fa-search" aria-hidden="true"></i> Buscar meu Seminovo</button>
                            </div>
                          </form>
                        </div>
                        </div> -->
                    <div class="col-md-12" style="margin-top: 2em;">
                        <div class="row">
                            <?php $data = getSeminovos();?>
                            <?php foreach ($data->modelos as $key): ?>
                            <a href="seminovo?modelo=<?=$key->PRO_URL?>">
                                <div class="col-sm-6 col-md-3">
                                    <div class="filter-cars">
                                        <div class="filter-inner">
                                            <?php if ($key->PRO_Status == 99): ?>
                                            <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%); min-height: 197px !important;" src="<?=$key->PROI_Image?>" alt="" />
                                            <?php else: ?>
                                            <img style="min-height: 197px !important;" src="<?=$key->PROI_Image?>" alt="" />
                                            <?php endif ?>
                                            <div class="filter-widgets text-center">
                                            </div>
                                        </div>
                                        <div class="filter-car-details clearfix" style="height: 99px !important;">
                                            <h5><?=$key->PRO_Nome?> <?php if ($key->PRO_Status == 99): ?><b style="color: #ecac4a; font-weight: 700;">VENDIDO</b><?php endif ?></h5>
                                        </div>
                                        <ul class="filter-car-more-info clearfix">
                                            <li>
                                                <i class="fa fa-car" aria-hidden="true"></i><?=$key->PRO_MetaDados->PRO_Ano?>
                                            </li>
                                            <li>
                                                <i class="fa fa-tachometer" aria-hidden="true"></i><?=$key->PRO_MetaDados->PRO_Combustivel?>
                                            </li>
                                            <li>
                                                <i class="fa fa-cog" aria-hidden="true"></i><?=substr($key->PRO_MetaDados->PRO_Cambio,10)?>
                                            </li>
                                            <li>
                                                <i class="fa fa-road" aria-hidden="true"></i><?=$key->PRO_MetaDados->PRO_KM?> Km
                                            </li>
                                            <li class="orange-btn">
                                                <?php if ($key->PRO_Status == 99): ?>
                            <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i>VENDIDO</a>
                            <?php else: ?>
                            <a class="disabled" href="seminovo?modelo=<?=$key->PRO_URL?>"></i>Ver Detalhes</a>
                            <?php endif ?>
                            </li>
                            </ul>
                            </div>
                            </div>
                            </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <!--Content Section End-->
        <!--Footer Section start-->
        <?php include_once("footer.php");?>
        <!--Footer Section End-->
        </div>
        <!--Page Wrapper End-->
        <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/less.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
        <script type="text/javascript" src="assets/js/jquery-ui.js"></script>     
        <script type="text/javascript" src="assets/js/jquery.selectBox.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="assets/js/site.js"></script>
        <!-- Switcher Js -->
        <script src="assets/js/theme-option/style-switcher/assets/js/style.switcher.js"></script>
        <script src="assets/js/theme-option/style-switcher/assets/js/jquery.cookie.js"></script>
        <!-- Switcher Js -->
    </body>
</html>