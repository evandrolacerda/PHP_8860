<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classHomeView
 *
 * @author Administrador
 */
class HomeView
{
    //put your code here
    function __construct()
    {

    } /*  */

    public function render( $sView, HomeModel $oModel )
    {
        switch ( $sView )
        {
            case "home_init":
                $this->renderHomeInitView( $oModel );
                break;

            case "default":
            default:
                $this->renderDefaultView( $oModel );
        } /* switch ( $sView ) */
    } /* public function render( $sView, HomeModel $oModel ) */

    private function renderHomeInitView( $oModel )
    {
        $htmlMenuInit = $this->buildMenuInit( $oModel );
        $htmlFooter = $this->buildFooterInit( $oModel );

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"hdrTop\",";
        $sResult .= "\"Content\":\"$htmlMenuInit\"},";

        $sResult .= "{\"TargetId\":\"ftrBottom\",";
        $sResult .= "\"Content\":\"$htmlFooter\"}";

        $sResult .= "]}";

        echo $sResult;

    } /* private function renderHomeInitView( $oModel ) */

    private function buildMenuInit( $oModel )
    {
        $asInitMenu = $oModel->getMenuInit();

        $sHtml = "";
        foreach ( $asInitMenu as $csvItem )
        {
            $asItem = explode( ";", $csvItem );

            $sHtml .= "<button id='$asItem[0]' ".
                      "name='$asItem[0]' ".
                      "class='menuItem' ".
                      "onclick='$asItem[2]'>";

            $sHtml .= "$asItem[1]</button>";

        } // foreach ( $asInitMenu as $csvItem )
        return  $sHtml;
    } /* private function buildMenuInit() */

    private function buildFooterInit( $oModel )
    {
        $sHtml = "<p>todo: montar html do rodapé.</p>";

        return  $sHtml;
    } /* private function buildFooterInit() */

    private function renderDefaultView( $oModel )
    {
        $sResult = "";

        $sResult .= "<h5>Data: ".$oModel->getDate()."</h5>";
        $sResult .= "<h4>Mensagem: ".$oModel->getMessage()."</h4>";

        echo $sResult;

    } /*  */

} /* class HomeView */
?>
