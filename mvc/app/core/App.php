<?php

class App
{
    protected $controller = 'Home';
public function __consturct()
{
    $url = $this->splitURL();

    if(isset($url[0])); {
        if(file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {

            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }
    }
}

private function splitURL()
{
if(isset($_GET['url'])){

    $url = explode("/",trim($_GET['url'],"/"));
    return $url;
    }
}
}