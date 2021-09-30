<?php
date_default_timezone_set('America/Mexico_City');

class Funcciones
{
    private $host;
    private $uri;

    public function getHost()
    {
        return $this->host;
    }
    public function getUri()
    {
        return $this->uri;
    }
    public function setHost($host)
    {
        $this->host = $host;
    }
    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}

$site = new Funcciones();
$site->setHost($_SERVER["HTTP_HOST"]);
$site->setUri($_SERVER["REQUEST_URI"]);
$ruta = 'http://' . $site->getHost() . $site->getUri();

$date = Date("Y-m-d H:i:s");
