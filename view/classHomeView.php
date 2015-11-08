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
            case "home_adm":
                $this->renderHomeAdmView( $oModel );
                break;

            case "default":
            default:
                $this->renderDefaultView( $oModel );
        } /* switch ( $sView ) */
    } /* public function render( $sView, HomeModel $oModel ) */

    private function renderHomeInitView( $oModel )
    {
        $htmlMenuInit = $this->buildMenu( $oModel->getMenuInit(), $oModel );
        $htmlFooter = $this->buildFooterInit( $oModel );

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"hdrTop\",";
        $sResult .= "\"Content\":\"$htmlMenuInit\"},";

        $sResult .= "{\"TargetId\":\"ftrBottom\",";
        $sResult .= "\"Content\":\"$htmlFooter\"}";

        $sResult .= "]}";

        echo $sResult;

    } /* private function renderHomeInitView( $oModel ) */
    
    private function renderHomeAdmView( $oModel )
    {
        $htmlMenu = $this->buildMenu( $oModel->getMenuAdm(), $oModel );

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"hdrTop\",";
        $sResult .= "\"Content\":\"$htmlMenu\"}";

      
        $sResult .= "]}";

        echo $sResult;

    } /* private function renderHomeInitView( $oModel ) */

    private function buildMenu( $asMenu, $oModel = null )
    {
        
        $sHtml = "<div class='btn-group .btn-group-justified' role='group'>";
        foreach ( $asMenu as $csvItem )
        {
            $asItem = explode( ";", $csvItem );

            $sHtml .= "<button id='$asItem[0]' ".
                      "name='$asItem[0]' ".
                      "class='btn btn-primary'".
                      "onclick='$asItem[2]'>";

            $sHtml .= "$asItem[1]</button>";

        } // foreach ( $asInitMenu as $csvItem )
        $sHtml.= '</div>';
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
