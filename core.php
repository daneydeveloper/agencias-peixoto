<?php 
	
	/*Chave da Empresa*/
	define(KEY, 'ogKEeQT5hbnObI6GcZiisPr0MtjGWZ-AFy2qrMphUJc');
	define(KEY_GROUP, 'ogKEeQT5hbnObI6GcZiisPr0MtjGWZ-AFy2qrMphUJc,qNXM6ry4OgSmXSlXRSQPOhQSVgwdICWDCoRaD1bpnzc,ZYeEAA1BIVhY_wzNYAPWOCznpFs9ECZ0czxOjPd5vaM');

	/*Função para o GET básico da API*/
	function get($url){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => 'http://crm2.marketingmidia9.com.br/api3/' . $url,
		));
		$resp = curl_exec($curl);
		return $resp;
 }

 /*Função para Listar os Seminovos*/

 function getSeminovos($id_modelo = null){
 	return json_decode(get('listarSeminovos/' . KEY_GROUP . "/" . $id_modelo));
 }

/*Função para Detalhar o Seminovo*/
 function getDetalheSeminovo($url) {
 	return json_decode(get('detalheSeminovos/' . KEY_GROUP . "/" . $url));
 }

 function getMontadoras(){
 		return json_decode(get('getMontadoras/' . KEY_GROUP));
 }

  function searchSeminovos($data) {
 	return json_decode(get('search/' . KEY_GROUP . "?" .  http_build_query($data)));
 }
 // var_dump(getDetalheSeminovo('hb20-1-0-comfort-plus'));



?>