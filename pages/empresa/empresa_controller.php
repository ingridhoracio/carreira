<?php
  require_once 'dominio/empresa.php';
 class EmpresaController {

     function incluir(Empresa $empresa){
     }
     
     function novo(){
         $empresa = new Empresa();
         require  'pages/empresa/novo.php';
     }
     function listar(){
        $empresas = [];
        $empresa = new Empresa();
        $empresa->setId(1);
        $empresa->setNome("ETEC PEDRO BADRAN");
        $empresa->setTelefone("163818-2122");
        $empresa->setGeolocalizacao("-20.5886455,-47.8621156");
        $empresa->setCidadeIbge(3549409);
        array_push($empresas,$empresa);
        $empresa = new Empresa();
        $empresa->setId(2);
        $empresa->setNome("VENTUROSO VALENTINI");
        $empresa->setTelefone("163818-5454");
        $empresa->setGeolocalizacao("-20.5628803,-47.8587687");
        $empresa->setCidadeIbge(3549409);
        array_push($empresas,$empresa);
        $empresa = new Empresa();
        $empresa->setId(3);
        $empresa->setNome("USINA ALTA MOGIANA");
        $empresa->setTelefone("163810-1000");
        $empresa->setGeolocalizacao("-20.4838359,-47.8761024");
        $empresa->setCidadeIbge(3549409);
        array_push($empresas,$empresa);
        
        require  'pages/empresa/index.php';
     }
     function mostrar($id){

     }
     function atualizar(Empresa $empresa){

     }

     function deletar($id){

     }
}