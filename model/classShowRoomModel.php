<?php
require_once( "classes/classDatabase.php" );





/**
 * Description of classShowRoomModel
 *
 * @author Administrador
 */
class ShowRoomModel
{
    private $dbData = null;
    private $sError = "";
    private $aoData = null;

    //put your code here
    function __construct()
    {
        
    }

/* function __construct() */

    public function runAction($sAction)
    {
        $bAction = false;
        switch ($sAction) {
            case "default":
            default:
                $bAction = $this->runDefaultAction();
        } /* switch ( $sAction ) */

        return $bAction;
    }

/* public function runAction( $sAction ) */

    public function getData()
    {
        return $this->aoData;
    }

    private function runDefaultAction()
    {
        $this->dbData = EPL\NWDatabase::Instance();
        if ($this->dbData->getStatus())
        {
            $this->dbData->selectTable( 'products');
            if ($this->dbData->getQryStatus())
            {
//                while ($oRecord = $this->dbData->getRecord()) {
//                    $this->aoData[] = $oRecord;
//                }
                
                $this->dbData->column( array('ProductName', 'QuantityPerUnit', 'UnitPrice') );
                $this->aoData = $this->dbData->getRecordSet();
                

                return true;
            }
        }

        $this->sError = $this->dbData->getError();
        return false;
    }

/* private function runDefaultAction() */

    public function getError()
    {
        return $this->sError;
    }

/* public getError() */
}

/* class ShowRoomModel */
?>
