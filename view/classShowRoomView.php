<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classShowRoomView
 *
 * @author Administrador
 */
class ShowRoomView
{
    //put your code here
    function __construct()
    {

    } /*  */

    public function render( $sView, ShowRoomModel $oModel )
    {
        switch ( $sView )
        {
            case "error_view":
                $this->renderErrorView( $oModel );
                break;
            case "default":
            default:
                $this->renderDefaultView( $oModel );
        } /*  */
    } /*  */

    private function renderDefaultView( $oModel )
    {
        $htmlShowRoom = '';
        $aoSRoom = $oModel->getData();
        
        $htmlShowRoom .='<table class=\"table table-bordered\">';
        $htmlShowRoom .='<thead>';
        $htmlShowRoom .= '<th>Nome do Produto</th>';
        $htmlShowRoom .= '<th>Quantidade por Unidade</th>';
        $htmlShowRoom .= '<th>Preço Unitário</th>';
        $htmlShowRoom .='</thead>';
        
        foreach ( $aoSRoom as $oItem )
        {
            $htmlShowRoom .= '<tr>';
                $htmlShowRoom .= '<td>';
                    $htmlShowRoom .= htmlspecialchars($oItem->ProductName, ENT_QUOTES, 'UTF-8');
                    //$htmlShowRoom .= $oItem->ProductName;
                $htmlShowRoom .= '</td>';                
                $htmlShowRoom .= '<td>';
                    $htmlShowRoom .= htmlspecialchars( $oItem->QuantityPerUnit, ENT_QUOTES, 'UTF-8');
                $htmlShowRoom .= '</td>';                
                $htmlShowRoom .= '<td>';
                    $preco = number_format($oItem->UnitPrice, 2, ',', '');
                    $htmlShowRoom .= htmlspecialchars('R$ ' . $preco, ENT_QUOTES, 'UTF-8');
                $htmlShowRoom .= '</td>';                
            $htmlShowRoom .= '</tr>';
        }
        $htmlShowRoom .='</table>';
        
        

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"sctWorkspace\",";
        $sResult .= "\"Content\":\"$htmlShowRoom\"}";

        $sResult .= "]}";

        echo $sResult;

    } /* private function renderDefaultView( $oModel ) */
    
    private function renderErrorView( $oModel )
    {
        $sError = $oModel->getError();       

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"sctWorkspace\",";
        $sResult .= "\"Content\":\"$sError\"}";

        $sResult .= "]}";

        echo $sResult;

    } /* private function renderErrorView( $oModel ) */
    
    

} /* class ShowRoomView */
?>
