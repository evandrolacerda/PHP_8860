<?php

require_once( "classes/classDatabase.php" );

/**
 * Description of classProdutosModel
 *
 * @author Administrador
 */
class ProdutosModel {

    private $dbData = null;
    private $sError = "";
    private $aoProdList = null;

    //put your code here
    function __construct() {
        
    }

    /* function __construct() */

    public function runAction($sAction) {
        $bAction = false;
        switch ($sAction) {
            case "load_form":
                $this->runLoadFormAction();
                break;
            case "sel_product":
                break;
            case "upd_product":
                break;
            case "default":
            default:
                $bAction = $this->runDefaultAction();
        } /* switch ( $sAction ) */

        return $bAction;
    }

    /* public function runAction( $sAction ) */

    public function getData() {
        return $this->aoData;
    }

    private function runDefaultAction() {
        return true;
    }

    /* private function runDefaultAction() */

    public function getError() {
        return $this->sError;
    } /* public getError() */
    
    public function getProdList()
    {
        
    }

    private function runLoadFormAction() {
        $this->dbData = EPL\NWDatabase::Instance();
        
        if ($this->dbData->getStatus())
        {
            $this->dbData->selectTable( 'products');
            if ($this->dbData->getQryStatus())
            {

                
                $this->dbData->column( array('ProductId', 'ProductName') );
                $this->aoProdList = $this->dbData->getRecordSet();
                

                return true;
            }
        }

        $this->sError = $this->dbData->getError();
        return false;
    }

}