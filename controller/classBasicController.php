<?php

require_once ( "model/classBasicModel.php" );
require_once ( "view/classBasicView.php" );

/**
 * Description of classBasicController
 *
 * @author Administrador
 */
class BasicController
{
    private $oModel = null;
    private $oView  = null;
    /*
     * 
     */
    function __construct()
    {

    } /*  */

    function run( $sAction, $asArgs, $sView )
    {
        $this->oModel = new BasicModel();
        $this->parseArgs( $asArgs );
        $this->oModel->runAction( $sAction );

        $this->oView = new BasicView();
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
} /* class BasicController */

?>
