<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classBasicView
 *
 * @author Administrador
 */
class BasicView
{
    //put your code here
    function __construct()
    {

    } /*  */

    public function render( $sView, BasicModel $oModel )
    {
        switch ( $sView )
        {
            case "default":
            default:
                $this->renderDefaultView( $oModel );
        } /*  */
    } /*  */

    private function renderDefaultView( $oModel )
    {
        $sResult = "";

        $sResult .= "<h5>Data: ".$oModel->getDate()."</h5>";
        $sResult .= "<h4>Mensagem: ".$oModel->getMessage()."</h4>";

        echo $sResult;

    } /*  */

} /* class BasicView */
?>
