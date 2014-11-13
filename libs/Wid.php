<?php

class Wid extends WP_Widget
{
    /**
     * @var 
     */
    private $defaults;

    public function __construct($name, $defaults = null)
    {
        parent::__construct(strtolower($name), $name);

        $this->defaults = $defaults;
    }                           // Todo Here
