<?php

    if($_POST['cod']){
        require_once '../../private/Init.php';
        
        #if $_SESSION
        
        switch($_POST['op']){
            case 'del':
                $bd = new Banco_De_Dados();
                
                $cod = filter_var($_POST['cod'], FILTER_SANITIZE_NUMBER_INT);
                
                if(isset($cod) && $bd->delete(TB_ENDERECO, " id=?;", array($cod)) == 1){
                    if(DEBUG && Config::$log_lvl > 1) logMsg("Endereço de id(". $_POST['cod'] .") foi deletado");
                    echo "Endereço de id(". $_POST['cod'] .") foi deletado!";
                } 
                break;
            case 'edit':
                $bd = new Banco_De_Dados();
                
                $cod = filter_var($_POST['cod'], FILTER_SANITIZE_NUMBER_INT);
                $cep = filter_var($_POST['cep'], FILTER_SANITIZE_STRING);
                $cod_mun = filter_var($_POST['cod_mun'], FILTER_SANITIZE_NUMBER_INT);
                $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_STRING);
                $nro = filter_var($_POST['nro'], FILTER_SANITIZE_STRING);
                $complemento = filter_var($_POST['complemento'], FILTER_SANITIZE_STRING);
                $bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_STRING);
                $cidade = filter_var($_POST['cidade'], FILTER_SANITIZE_STRING);
                $uf = filter_var($_POST['uf'], FILTER_SANITIZE_STRING);
                
                if(isset($cod) && isset($cep) && isset($cod_mun) && isset($endereco) && isset($nro) && isset($complemento) && isset($bairro) && isset($cidade) && isset($uf)){
                    if($bd->update(TB_ENDERECO, "cep=?, cod_mun=?, endereco=?, nro=?, complemento=?, bairro=?, cidade=?, uf=? WHERE id=?;", array($cep, $cod_mun, $endereco, $nro, $complemento, $bairro, $cidade, $uf, $cod)) == 1){
                        if(DEBUG && Config::$log_lvl > 1) logMsg("Endereço de id(". $_POST['cod'] .") foi alterado");
                        echo "Endereço de id(". $_POST['cod'] .") foi alterado!";
                    } 
                }
                break;
            
            default: echo "Opção não encontrada!"; break;
        }
    }