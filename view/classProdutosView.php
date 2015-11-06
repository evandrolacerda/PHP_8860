<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classProdutosView
 *
 * @author Administrador
 */
class ProdutosView {

    //put your code here
    function __construct() {
        
    }

/*  */

    public function render($sView, ProdutosModel $oModel) {
        switch ($sView) {
            case "error_view":
                $this->renderErrorView($oModel);
                break;

            case "view_form":
                $this->renderFormView($oModel);
                break;
            case "default":
            case "default":
            default:
                $this->renderDefaultView($oModel);
                break;
        } /*  */
    }

/*  */

    private function renderDefaultView($oModel) {
        $htmlResult = "<h5>Módulo Products</h5>";
        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"sctWorkspace\",";
        $sResult .= "\"Content\":\"$htmlResult\"}";

        $sResult .= "]}";

        echo $sResult;
    }
    
    private function renderFormView($oModel) {
        $htmlResult = $this->getForm();
        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"sctWorkspace\",";
        $sResult .= "\"Content\":\"$htmlResult\"}";

        $sResult .= "]}";

        echo $sResult;
    }
    
    private function getForm()
    {
        $html = file_get_contents('view/html/form_product.php');
        $html = str_replace('"',"'", $html);
       
        
        return $html;
    }

/* private function renderDefaultView( $oModel ) */

    private function renderErrorView($oModel) {
        $sError = $oModel->getError();

        $sResult = "{\"Data\":[";

        $sResult .= "{\"TargetId\":\"sctWorkspace\",";
        $sResult .= "\"Content\":\"$sError\"}";

        $sResult .= "]}";

        echo $sResult;
    }

/* private function renderErrorView( $oModel ) */
}

/* class ProdutosView */
?>
