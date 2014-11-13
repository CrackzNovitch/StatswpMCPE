<?php

class Client
{

    private $api;
    private $fallback;
    private $host;
    private $port;

    /**
     *  $ Host 
     * $ Port
     */
    public function __construct($host, $port = 19132)
    {
        // Nom / Port MCPE serveur
        $this->host = $host;
        $this->port = $port;
    }         // TODO HERE
