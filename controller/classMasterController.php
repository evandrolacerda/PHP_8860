<?php

require_once "classBasicController.php";
require_once "classHomeController.php";
require_once "classShowRoomController.php";

/**
 * Description of classMasterController
 *
 * @author Administrador
 */
class MasterController
{
    private $sModule = "";
    private $sAction = "";
    private $sView = "";
    private $asArgs = "";

    function MasterController( $asMAV, $asArgs )
    {
        $this->sModule = $asMAV["module"];
        $this->sAction = $asMAV["action"];
        $this->sView   = $asMAV["view"];

        $this->asArgs = $asArgs;

        $this->runModule();
    } /* function MasterController( $asMAV, $asArgs ) */

    private function runModule()
    {
        switch ( $this->sModule )
        {
            case "Home":
                $oController = new HomeController();
                $oController->run( $this->sAction, $this->asArgs, $this->sView );
                break;

            case "ShowRoom":
                $oController = new ShowRoomController();
                $oController->run( $this->sAction, $this->asArgs, $this->sView );
                break;

            case "Basic":
                $oController = new BasicController();
                $oController->run( $this->sAction, $this->asArgs, $this->sView );
                break;

            default:
                echo "Erro: Módulo não existe";

        } /* switch ( $this->sModule ) */
    } /* private runModule() */

} /* class MasterController */
?>
