<?php

namespace Galek\Socials\Google;

class Config extends Google{

    public function __construct($lang='cs_CZ') {
        $this->lang = $lang;
    }
    
    public function create(){
	return $this;
    }
}
