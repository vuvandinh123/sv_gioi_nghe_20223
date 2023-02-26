<?php 
class Route
{
    public static function route_site(){
        $path_view="views/frontend/";
        if(isset($_REQUEST['option'])){
            $path_view.=$_REQUEST['option'].'.php';
        }
        else{
            $path_view.='home.php';
        }
        require_once($path_view);
    }
   
}