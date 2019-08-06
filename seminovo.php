<?php include('core.php');?>
<?php $data =  getDetalheSeminovo(@$_GET['modelo'])?>
<?php $modelo = @$data->modelos;?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Mirrored from theemon.com/l/letsdrive/LivePreview/vehicles-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2016 04:52:43 GMT -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="<?=(@$modelo->PRO_MetaDados->PRO_Descricao)?preg_replace( "/\r|\n/", " ", $modelo->PRO_MetaDados->PRO_Descricao ):'Encontre o seminovo certo para você, clique aqui e veja todas as ofertas.'?>" />
        <meta name="keywords" content="seminovos, seminovos premium, seminovos fortaleza, seminovos ford, seminovos kia, seminovos land rover, seminovos ceara" />
        <meta name="author" content="Agência Midia9" />
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="Agências Peixoto | <?=(@$modelo->PRO_Nome)? $modelo->PRO_MetaDados->PRO_Marca . ' ' .$modelo->PRO_Nome:'Seminovos'?>">
        <meta property="og:title" content="Agências Peixoto | Seminovos">
        <meta property="og:description" content="<?=(@$modelo->PRO_MetaDados->PRO_Descricao)?preg_replace( "/\r|\n/", " ", $modelo->PRO_MetaDados->PRO_Descricao ):'Encontre o seminovo certo para você, clique aqui e veja todas as ofertas.'?>">
        <meta property="og:image:type" content="<?=getimagesize($modelo->Imagens[0]->PROI_Image)['mime']?>">
        <meta property="og:image" content="<?=$modelo->Imagens[0]->PROI_Image;?>">
        <meta property="og:type" content="website">
        <title>Agências Peixoto | Seminovos |  <?=(@$modelo->PRO_Nome)? $modelo->PRO_MetaDados->PRO_Marca . ' ' .$modelo->PRO_Nome:'Seminovos'?></title>
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-16x16.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.selectBox.css">
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
            <?php if ($modelo): ?>
            <?php $modelo = $data->modelos;?>
            <div id="content">
                <section class="banner2 banner-margin-zero">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 ">
                                <h1><?=$modelo->PRO_MetaDados->PRO_Marca?></h1>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index">Início </a>
                                    </li>
                                    <li>
                                        <a href="seminovos"> Seminovos </a>
                                    </li>
                                    <li class="active">
                                        <?=$modelo->PRO_MetaDados->PRO_Marca?> - <?=$modelo->PRO_Nome?>
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
                <section class="car-view-slider">
                    <div class="container">
                        <div class="vehicles-head clearfix">
                            <h5><?=$modelo->PRO_MetaDados->PRO_Marca?> - <?=$modelo->PRO_Nome?></h5>
                            <!-- <a href="index" class="get-back-home">Home<i class="fa fa-home" aria-hidden="true"></i></a> -->
                        </div>
                        <div class="rental-car">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="car-parts-slider-outer">
                                        <div class="car-parts-slider">
                                            <?php foreach ($modelo->Imagens as $key): ?>
                                            <div class="item">
                                                <img class="thumbnail" style="max-height: 605px" src="<?=$key->PROI_Image?>" alt="<?=$modelo->PRO_Nome?>">
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="car-details text-left">
                                        <div class="car-info clearfix">
                                            <div class="col-md-12">
                                                <span class="start-price-rent">Montadora: <small><?=$modelo->PRO_MetaDados->PRO_Marca?></small></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="start-price-rent">Preço: <small>R$ <?=number_format($modelo->PRO_MetaDados->PRO_Preco, 2)?></small></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="start-price-rent">Ano: <small><?=$modelo->PRO_MetaDados->PRO_Ano?></small></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="start-price-rent">Câmbio: <small><?=$modelo->PRO_MetaDados->PRO_Cambio?></small></span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="start-price-rent">Local: <small><?=$modelo->PRO_MetaDados->PRO_LocalCarro?></small></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-car-aside" ng-app="app">
                                        <controller ng-controller="Lead">
                                            <init ng-init="dados.LE_CodigoProduto  = <?=$modelo->PRO_CodigoProduto?>"></init>
                                            <form name="form">
                                                <div class="filter-car-selection">
                                                    <h4>Tenho interesse neste Seminovo!</h4>
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control" ng-required="true" ng-model="dados.LE_Nome" placeholder="Nome" name="">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control" ng-required="true" ng-model="dados.LE_Email" placeholder="E-mail" name="">
                                                    </fieldset>
                                                    <fieldset class="form-group">
                                                        <input type="text" class="form-control" ng-required="true" mask="(99) 9 9999-9999" ng-model="dados.LE_Telefone" placeholder="Celular/WhatsApp" name="">
                                                    </fieldset>
                                                </div>
                                                <div class="filter-vehicles-btn">
                                                    <button class="orange-btn" ng-if="!load" ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load"> <i class="fa fa-plus"  aria-hidden="true"></i>Solicitar Cotação</button>
                                                    <button class="orange-btn" ng-if="load" ng-disabled="true"> <i class="fa fa-refresh fa-spin"  aria-hidden="true"></i>Enviando Solicitação...</button>
                                                </div>
                                            </form>
                                        </controller>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="car-details-wrap">
                                        <div class="car-details ">
                                            <div class="car-info clearfix">
                                                <span class="start-price-rent"><strong><?=$modelo->PRO_Nome?></strong></span>
                                            </div>
                                            <style type="text/css">
                                                .rental-car .car-details-wrap .car-more-info li:last-child {
                                                border:1px solid #ececec;
                                                }
                                                .car-details .start-price-rent small{
                                                font-size: 20px !important;
                                                }
                                            </style>
                                        </div>
                                        <ul class="car-more-info clearfix">
                                            <li>
                                                <i class="fa fa-car" aria-hidden="true"></i><?=$modelo->PRO_MetaDados->PRO_Ano?>
                                            </li>
                                            <li>
                                                <i class="fa fa-tachometer" aria-hidden="true"></i><?=$modelo->PRO_MetaDados->PRO_Combustivel?>
                                            </li>
                                            <li>
                                                <i class="fa fa-cog" aria-hidden="true"></i><?=$modelo->PRO_MetaDados->PRO_Cambio?>
                                            </li>
                                            <li>
                                                <i class="fa fa-road" aria-hidden="true"></i><?=$modelo->PRO_MetaDados->PRO_KM?> Km
                                            </li>
                                            <li>
                                                <i class="fa fa-paint-brush" aria-hidden="true"></i><?=$modelo->PRO_MetaDados->PRO_Cor?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="vehicles-description">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 ">
                                <div class="feature-description-wrap clearfix">
                                    <div class="tab-list-feature">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Descrição do Veículo</a>
                                            </li>
                                            <!-- <li role="presentation">
                                                <a href="#features" aria-controls="features" role="tab" data-toggle="tab">Features</a>
                                                </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="overview">
                                        <div class="para-related-description">
                                            <p>
                                                <?=$modelo->PRO_MetaDados->PRO_Descricao;?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="some-short-note">
                                    <span class="note"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i><span>Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.</span></span>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="populer-vehicles">
                    <div class="container">
                        <div class="populer-head">
                            <h4 class="h4-24">Confira nossos outros Modelos</h4>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <?php $data = getSeminovos($modelo->PRO_CodigoProduto);?>
                                    <?php foreach ($data->modelos as $key): ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="filter-cars">
                                            <div class="filter-inner">
                                                <?php if ($key->PRO_Status == 99): ?>
                                                <img style="-webkit-filter: grayscale(100%); filter: grayscale(100%); min-height: 197px !important;" src="<?=$key->PROI_Image?>" alt="" />
                                                <?php else: ?>
                                                <img style="min-height: 197px !important;" src="<?=$key->PROI_Image?>" alt="" />
                                                <?php endif ?>
                                                <div class="filter-widgets text-center">
                                                    <?php if ($key->PRO_Status == 99): ?>
                                                    <strong><a class="fancybox-button" data-fancybox-group="fancybox-button" href="<?=$key->PROI_Image?>" title=""><i class="fa fa-search-plus" aria-hidden="true"></i></a> </strong>
                                                    <?php else: ?>
                                                    <strong><a class="fancybox-button" data-fancybox-group="fancybox-button" href="<?=$key->PROI_Image?>" title=""><i class="fa fa-search-plus" aria-hidden="true"></i></a> </strong>
                                                    <?php endif ?>
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
                                                    <a href="#" style="background: #dc0303 !important;"><i class="fa fa-plus-circle" aria-hidden="true"></i>VENDIDO</a>
                                                    <?php else: ?>
                                                    <a class="disabled" href="seminovo?modelo=<?=$key->PRO_URL?>"></i>Ver Detalhes</a>
                                                    <?php endif ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 populer-bdr"></div>
                    </div>
                </section>
            </div>
            <?php endif ?>
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
        <link rel="stylesheet" type="text/css" href="https://cdn.marketingmidia9.com.br/css/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
        <script type="text/javascript" src="https://cdn.marketingmidia9.com.br/js/sweetalert.min.js"></script>
        <!-- Switcher Js -->
        <!-- CRM -->
        <script type="text/javascript" src="assets/js/crmv2.js"></script>
        <script type="text/javascript">
            angular.module('app', ['ngMask', 'ngDialog'])
            .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
                $log.warn($location.host());
                $scope.load = false;
                $scope.load1 = false;
                $scope.dados = {};
                var host = 'https://crm2.marketingmidia9.com.br'
                var registra_acesso = function() {
                    $http.get(host + '/api/registraAcesso/qNXM6ry4OgSmXSlXRSQPOhQSVgwdICWDCoRaD1bpnzc')
                    .success(function(result){
                        $log.info(result);
                        $scope.request = result.data;
                    });
            
                    $http.get('http://ipv4.myexternalip.com/json')
                    .success(function(result) { 
                      $http.get('http://api.ipinfodb.com/v3/ip-city/?key=20d8cbecc9e0a937c59a9754982bc0a4a76d26ce9b7ce016e2f5276451c96466&ip='+result.ip+'&format=json')
                      .success(function(data){
                          /*$log.info(data);*/
                          $scope.meta = data;
                      })
                    });
                }
            
                $scope.enviarLead = function(dados, tmp = null) {
                     $scope.load = true;
                     dados.LE_CodigoTipo = 9997;
                     dados.EMP_Key = $scope.request.EMP_Key;
                     /*dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';*/
                     dados.LE_MetaDado = $scope.meta;
                     $log.info(dados);
            
                     $http({
                           method: 'POST',
                           url: host + '/api2/registraLead',
                           data: $httpParamSerializerJQLike(dados),
                           headers: {
                              'Content-Type': 'application/x-www-form-urlencoded'
                           }
                        })
                        .success(function(retorno) {
                           $scope.load = false;
                           if (!retorno.error) {
                              swal({
                                    title: "Obrigado!",
                                    text: "suas informações foram enviadas com sucesso, um de nossos colaboradores irá lhe contactar em breve",
                                    type: "success",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Ok",
                                    closeOnConfirm: false
                                 },
                                 function() {
                                    window.location.href = "https://www.facebook.com/agpseminovos/";
                                 });
                           } else {
                              swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
                           }
                        })
                        .error(function(retorno) {
                           $scope.load = false;
                           $log.error(retorno);
                        });
                  }
            
                $scope.openForm = function(template, tipo) {
                  $scope.dados.LE_CodigoTipo = tipo;
                  ngDialog.openConfirm({
                    template:template,
                    scope: $scope,
                    /*width: '100%',*/
                    showClose: false,
                    closeByDocument: true,
                    closeByEscape: true
                  });
                }
            
                registra_acesso();
            });
        </script>
    </body>
</html>