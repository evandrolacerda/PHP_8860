<!DOCTYPE html>
<html  lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Evandro Pereira de Lacerda</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />        
        <link rel="stylesheet" type="text/css" href="css/css/bootstrap.css" />        
        <link rel="shortcut icon" href="media/icons/gear.ico" />

        <script type="text/javascript" src="js/home.js" >
        </script>

        <script type="text/javascript" >
            function processRequest( sModule, sAction, sView, sArgs )
            {
                //alert( "processRequest ");
                var xhttp = new XMLHttpRequest();
                
                var sUrlData = "";
                
                sUrlData += "?module=" + sModule;
                sUrlData += "&action=" + sAction;
                sUrlData += "&view=" + sView;
                
                xhttp.onreadystatechange = function()
                {
                    if ( xhttp.readyState == 4 && xhttp.status == 200 )
                    {
                        processResponse( xhttp.responseText );
                    } /* if ( xhttp.readyState == 4 && xhttp.status == 200 ) */
                } /* xhttp.onreadystatechange = function() */
                
                //alert( "processRequest - open - " + sUrlData );
                xhttp.open( "POST", "loader.php" + sUrlData, true );
                xhttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
                //alert( "processRequest - open - " + sArgs );
                xhttp.send( sArgs );
            } /* function processRequest( sLoad, sAction, sView, sArgs ) */
            
            function processResponse( sResponse )
            {
                alert( sResponse );
                var oResponse = JSON.parse( sResponse );
                
                
                console.log( oResponse.Data.length );
                for ( var i = 0; i < oResponse.Data.length; i++ )
                {
                    var domTarget = document.getElementById( oResponse.Data[i].TargetId );

                    domTarget.innerHTML = oResponse.Data[i].Content;
                } /* for ( var i = 0; i < oResponse.Data.length; i++ ) */
            } /* function processResponse( sResponse ) */
            
        </script>
    </head>
    
    <body>
        <div id="divWrap">
            <header id="hdrTop">
            </header>
            <section id="sctWorkspace">
                
            </section>
            <footer id="ftrBottom">                
            </footer>
        </div>
    </body>
    <script>
        var oDate = new Date();
        var sArgs = "date=" + oDate.toDateString();
        sArgs += "&message=Olá mundo!";
        processRequest( "Home", "load_init", "home_init", sArgs );
    </script>
</html>

















