<?
function __construct(){
    $url = $_GET['url'];
    $url = rtrim($url,'/');
    $url = explode('/',$url);

    // var_dump($url);
    $archivo_controller = 'controllers/' . $url[0] . '.php';
    if (file_exists($archivo_controller)) {
        require_once $archivo_controller;
        $controller = new $url[0];  
        if (isset($url[1])) {
            $controller->{$url[1]}();
        }
    }else{
        $controller = new Warning();
    }

}
?>