<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <title>Agências Peixoto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="motive">
        <meta name="author" content="Midia9">
        <meta name="description" content="Agências Peixoto - desde 1962">
        <meta name="keywords" content="A Agência Peixoto foi fundada em 1962 pelo Sr. Jurandir Peixoto. Hoje, já na terceira geração da família Peixoto, a empresa é sinônimo de qualidade e tradição no segmento automotivo do Ceará.">
        <meta name="theme-color" content="#D7AA0C">
        <!-- FACEBOOK -->
        <meta property="og:locale" content="pt_BR">
        <!-- <meta property="og:url" content="www.chevrolet.com.br"> -->
        <meta property="og:title" content="Agências Peixoto - Fortaleza">
        <meta property="og:site_name" content="Agências Peixoto">
        <meta property="og:description" content="Agências Peixoto - Desde 1962">
        <meta property="og:image" content="assets/images/fb.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-16x16.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.selectBox.css">
        <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="assets/css/global.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" >
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <link rel="stylesheet" type="text/less" href="assets/css/skin.less">
        <link rel="stylesheet" type="text/less" href="assets/css/midia9.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.marketingmidia9.com.br/css/ngDialog.min.css">
    </head>
    <body ng-controller="Lead">
        <!--Loader Start-->
        <!-- <div class="loader">
            <div class="sk-circle">
            	<div class="sk-circle1 sk-child"></div>
            	<div class="sk-circle2 sk-child"></div>
            	<div class="sk-circle3 sk-child"></div>
            	<div class="sk-circle4 sk-child"></div>
            	<div class="sk-circle5 sk-child"></div>
            	<div class="sk-circle6 sk-child"></div>
            	<div class="sk-circle7 sk-child"></div>
            	<div class="sk-circle8 sk-child"></div>
            	<div class="sk-circle9 sk-child"></div>
            	<div class="sk-circle10 sk-child"></div>
            	<div class="sk-circle11 sk-child"></div>
            	<div class="sk-circle12 sk-child"></div>
            </div>
            </div> -->
        <!--Loader End-->
        <!--Page Wrapper Start-->
        <div id="wrapper">
            <!--Header Section Start-->
            <?php include_once('header.php');?>
            <!--Header Section End-->
            <!--Content Section Start-->
            <div id="content">
                <section class="banner2 banner-margin-zero">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 ">
                                <h1>Contato</h1>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index">Início </a>
                                    </li>
                                    <li>
                                        <a href="contato"> Contato </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-few-words"></section>
                <section class="contact-us-map">
                    <div id="map-view1"></div>
                    <div class="contact-us-wrapper contact-page-form">
                        <div class="container">
                            <div class="map-form-inner">
                                <h2>Fale <span>conosco</span></h2>
                                <div class="contact-us">
                                    <form name="form" class="contact-form">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="input-text-wrap">
                                                    <input ng-disabled="load" ng-required="true" ng-model="dados.LE_Nome" type="text" placeholder="Nome"  class="contact-name" name="name"/>
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                                <div class="input-text-wrap">
                                                    <input ng-disabled="load" ng-required="true" ng-model="dados.LE_Email" type="email" placeholder="Email" class="contact-mail" name="email"/>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                                <div class="input-text-wrap">
                                                    <input ng-disabled="load" ng-required="true" ng-model="dados.LE_Telefone" mask="(99) 9-9999-9999" type="text" placeholder="Telefone:" class="contact-subject" name="telefone"/>
                                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="textarea-wrap">
                                                    <textarea ng-disabled="load" ng-required="true" ng-model="dados.LE_Descricao" placeholder="Mensagem" name="message"></textarea>
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p></p>
                                            </div>
                                            <div class="col-sm-8">
                                                <button ng-click="enviarLead(dados)" ng-disabled="form.$invalid || load" class="orange-btn">
                                                <i class="fa fa-plus-circle" aria-hidden="true"></i>Enviar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <div id="contactSuccess" style="display: none;">
                                        <span>Obrigado por entrar em contato. Nós entraremos em contato em breve.</span>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--Content Section End-->
            <!--Footer Section start-->
            <?php include_once('footer.php');?>
            <!--Footer Section End-->
        </div>
        <!--Page Wrapper End-->
        <script type="text/javascript" src="assets/js/angular.js"></script>
        <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/less.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDsO6OwGgVm31zWRpikeDjiVLGRXX9HSCA"></script>
        <script type="text/javascript" src="assets/js/jquery.selectBox.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDogvkQfdO8Ws-8osoXlY6_hWK_eYp6brg"></script> -->
        <!-- map                     -->
        <script type="text/javascript" src="assets/js/map.js"></script>
        <!-- map                     -->
        <!-- INTEGRAÇÃO -->
        <script src="http://cdn.marketingmidia9.com.br/js/angular.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/angular-route.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngMask.min.js"></script>
        <script src="http://cdn.marketingmidia9.com.br/js/ngDialog.min.js"></script>
        <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
        <script src='http://cdn.marketingmidia9.com.br/js/sweetalert.min.js'></script>
        <script type="text/javascript">
            angular.module('app', ['ngMask', 'ngDialog'])
            .controller('Lead', function($scope, $log, $http, $location, ngDialog, $httpParamSerializerJQLike){
            $log.warn($location.host());
            $scope.load = false;
            $scope.dados = {};
            var host = 'http://crm2.marketingmidia9.com.br'
            var registra_acesso = function() {
                $http.get(host + '/api/registraAcesso/mNHp0MlQvGi5Jchh9fQAcIEs5a6EyrDwCg137XEhNKo')
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
              dados.EMP_Key = 'mNHp0MlQvGi5Jchh9fQAcIEs5a6EyrDwCg137XEhNKo';
              // dados.EMP_Key = 'F27PPqcdM4zg0n6SXaGrWUPCkK6LGc7za0ni_QBtiG8';
              dados.LE_CodigoTipo = 9997;
              dados.LE_CodigoProduto = 722;
              dados.LE_MetaDado = $scope.meta;
              $log.info(dados);
              $http({
                method: 'POST',
                url: host + '/api2/registraLead',
                data:  $httpParamSerializerJQLike(dados),
                headers: {
                  'Content-Type': 'application/x-www-form-urlencoded'
                }
              })
             .success(function(retorno){
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
                  function(){
                   window.location.href = "";
                  });
                }
                else {
                  swal("Ops!", "Ocorreu um problema ao enviar suas informações, tente novamente", "error");
                }
              })
              .error(function(retorno){
                $scope.load = false;
                $log.error(retorno);
              });
             
            }
            registra_acesso();
            });
        </script>
        <!-- INTEGRAÇÃO -->
    </body>
</html>