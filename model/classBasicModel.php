<?php
/**
 * Description of classBasicModel
 *
 * @author Administrador
 */
class BasicModel
{
    private $sDate = "";
    private $sMessage = "";

    //put your code here
    function __construct()
    {

    } /*  */

    public function runAction( $sAction )
    {
        switch ( $sAction )
        {
            case "default":
            default:
                $this->runDefaultAction();
        } /*  */
    } /*  */

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

} /* class BasicModel */
?>
