<?php

namespace Galek\Socials\Facebook;

class ConfigFactory{

    public function __construct($apiKey = NULL,$lang='cs_CZ') {
        $this->apiKey = $apiKey;
        $this->lang = $lang;
    }

    public function create(){
	return new Config($this->apiKey, $this->lang);
    }
}
