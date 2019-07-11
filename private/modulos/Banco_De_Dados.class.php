<?php

class Banco_De_Dados
{	
    private $link = null;
    private $config;
    private $query;

    public function __construct()
    {		
        if(is_null($this->link)){
            try{
                $this->config = new Config();
                $this->link=new PDO("mysql:host=".$this->config->DB_LINK.";dbname=".$this->config->DB_NOME.";", $this->config->DB_USR, $this->config->DB_SEN);
                
                $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                logMsg("Conexão [". $this->link->errorCode(). "]");
                
                return $this->link;

            } 
            catch (PDOException $e){
                if(DEBUG){
                    logMsg($e->getMessage());
                    echo $e->getMessage();
                }
            }
        } else 
            return $this->link;
    }
		
    public function getCon(){
        return $this->link;
    }

    private function prepExec($prepare, $execute){
        $this->query = $this->getCon()->prepare($prepare);
        return $this->query->execute($execute);		
    }


    public function insert($tabela, $condicao, $exec){
        $exe = $this->prepExec("INSERT INTO ".$tabela." SET $condicao;", $exec);

        if(DEBUG) 
           logMsg("Inserido id: ". $this->getCon()->lastInsertId(). " no BD na ". $tabela);

        return $this->getCon()->lastInsertId();
    }


    public function select($campos, $tabela, $condicao, $exec){
        $this->prepExec("SELECT $campos FROM $tabela $condicao", $exec);

        if($this->query->rowCount() > 0){
            if(DEBUG)logMsg("Selecionado : ". $this->query->rowCount(). " rows do BD na ". $tabela);
            return $this->query;
        }else{
            if(DEBUG) 
               logMsg("Selecionado : ". $this->query->rowCount(). " rows do BD na ". $tabela);
               return array();
        }
    }

    public function update($tabela, $condicao, $exec){
        return $this->prepExec("UPDATE $tabela SET $condicao",$exec);

        if(DEBUG) 
           logMsg("Update no BD, tabela: ". $tabela, 1);
    }

    public function delete($tabela, $condicao, $exec){
        return $this->prepExec("DELETE FROM $tabela WHERE $condicao",$exec);

        if(DEBUG)
           logMsg("Deletado do DB: $tabela onde: $condicao");
    }
    
    public function callProcedure($nome, $parametros){
        return $this->link->query("CALL $nome($parametros);");
    }
	
}

?>