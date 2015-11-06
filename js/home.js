/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function miQuemSomos_onclick()
{
    alert( "miQuemSomos_onclick" );
}

function miShowRoom_onclick()
{
    processRequest( "ShowRoom", "load", "default", null );
}

function miContato_onclick()
{
    alert( "miContato_onclick" );
}

function miLogin_onclick()
{
    if( true )
    {
        processRequest( "Home", "load_adm", "home_adm", null );
    }
}

function miLogout_onclick()
{
    processRequest( "Home", "load_init", "home_init", null );
}

function miProducts_onclick()
{
    processRequest( "Products", "default", "view_form", null );
}

function miCategories_onclick()
{
    alert( "miCategories_onclick" );
}

function miSuppliers_onclick()
{
    alert( "miSuppliers_onclick" );
}

function cmInsert_onclick()
{
    
}

function cmUpdate_onclick()
{
    
}