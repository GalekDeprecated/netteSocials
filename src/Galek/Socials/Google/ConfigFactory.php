<?php

namespace Galek\Socials\Google;

class ConfigFactory{

    public function __construct($lang='cs_CZ') {
        $this->lang = $lang;
    }

    public function create(){
	return new Config($this->lang);
    }
}
