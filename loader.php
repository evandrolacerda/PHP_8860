<?php
require_once "controller/classMasterController.php";
function __autoload( $class ){
    
    ?>
    <script>
        alert('<?php echo $class; ?>');
    </script>
    
    <?php
}


ini_set( "display_errors", 1 );
error_reporting( E_ALL );

$oMaster = new MasterController( $_GET, $_POST );


?>
