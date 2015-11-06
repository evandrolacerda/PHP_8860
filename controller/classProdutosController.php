<?php
require_once ( "model/classProdutosModel.php" );
require_once ( "view/classProdutosView.php" );

/**
 * Description of classProdutosController
 *
 * @author Administrador
 */
class ProdutosController
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
        $this->oModel = new ProdutosModel();
        $this->oView = new ProdutosView();
        
        $this->parseArgs( $asArgs );
        
        if( !$this->oModel->runAction( $sAction ) ){
            $sView = "error_view";
        }

        
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
} 