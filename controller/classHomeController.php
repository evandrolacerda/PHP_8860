<?php

require_once ( "model/classHomeModel.php" );
require_once ( "view/classHomeView.php" );

/**
 * Description of classHomeController
 *
 * @author Administrador
 */
class HomeController
{
    private $oModel = null;
    private $oView  = null;
    /*
     */
    function __construct()
    {
    } /*  */

    function run( $sAction, $asArgs, $sView )
    {
        $this->oModel = new HomeModel();
        $this->parseArgs( $asArgs );
        $this->oModel->runAction( $sAction );

        $this->oView = new HomeView();
        $this->oView->render( $sView, $this->oModel );        
    } /*  */

    private function parseArgs( $asArgs )
    {
        if ( array_key_exists( "date", $asArgs ) )
        {
            $this->oModel->setDate( $asArgs["date"] );
        } /*  */

        if ( array_key_exists( "message", $asArgs ) )
        {
            $this->oModel->setMessage( $asArgs["message"] );
        } /*  */

    } /*  */
} /* class HomeController */

?>
