<?php

namespace Galek\Socials\Google;

class GoogleFactory{
    public $lang;
    
    public function __construct($lang='cs') {
        $this->lang = $lang;
    }
    
    public function create(){
	return new ConfigFactory($this->lang);
    }
    
}
