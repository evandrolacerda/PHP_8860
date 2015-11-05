<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserClass
 *
 * @author Administrador
 */
class UserClass
{
    private $iCode = -1;
    private $sName = "";
    private $sEmail = "";

    function __construct( $sName, $sPassword )
    {
        $this->Login( $sName, $sPassword );
    } /* function __construct( $sName, $sPassword ) */

    private function login( $sName, $sPassword )
    {
        if ( $sName === "Breves" && $sPassword === "123" )
        {
            $this->sName = $sName;
            $this->iCode = 1;
            $this->sEmail = "aa.breves@outlook.com";
        } /* if ( $sName === "Breves" && $sPassword === "123" ) */
    } /* private function login( $sName, $sPassword ) */

    function getCode()
    {
        return $this->iCode;
    } /* function getCode() */

    function getName()
    {
        return $this->sName;
    } /* function getName() */

    function getEmail()
    {
        return $this->sEmail;
    } /* function getEmail() */

} /* class UserClass */

/* ********************************************************* */
$usrUser = new UserClass( "Breves", "123" );

echo $usrUser->getCode()."<br />";
echo $usrUser->getName()."<br />";
echo $usrUser->getEmail()."<br />";

var_dump( $usrUser );

?>
