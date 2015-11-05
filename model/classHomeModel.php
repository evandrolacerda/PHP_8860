<?php
/**
 * Description of classHomeModel
 *
 * @author Administrador
 */
class HomeModel
{
    private $sDate = "";
    private $sMessage = "";

    private $asMenuInit = array();

    //put your code here
    function __construct()
    {

    } /* function __construct() */

    public function runAction( $sAction )
    {
        switch ( $sAction )
        {
            case "load_init":
                $this->loadInit();
                break;

            case "load_adm":
                $this->loadAdm();
                break;

            case "load_cli":
                $this->loadCli();
                break;

            case "default":
            default:
                $this->runDefaultAction();
        } /* switch ( $sAction ) */
    } /* public function runAction( $sAction ) */

    private function loadInit()
    {
        $this->asMenuInit[0] = "miQuemSomos;Quem somos;miQuemSomos_onclick()";
        $this->asMenuInit[1] = "miShowRoom;Show room;miShowRoom_onclick()";
        $this->asMenuInit[2] = "miContato;Contato;miContato_onclick()";

    } /* private function loadInit() */

    public function getMenuInit()
    {
        return $this->asMenuInit;
    } /* private function getMenuInit() */

    private function loadAdm()
    {

    } /* private function loadAdm() */

    private function loadCli()
    {

    } /* private function loadCli() */

    private function runDefaultAction()
    {

    } /*  */

    public function setDate( $sDate )
    {
        $this->sDate = $sDate;
    } /*  */

    public function setMessage( $sMessage )
    {
        $this->sMessage = $sMessage;
    } /*  */

    public function getDate()
    {
        return $this->sDate;
    } /*  */

    public function getMessage()
    {
        return $this->sMessage;
    } /*  */

} /* class HomeModel */
?>