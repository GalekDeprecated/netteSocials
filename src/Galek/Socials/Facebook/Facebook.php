<?php

/*
 * Copyright (C) 2016 Jan Galek
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Galek\Socials\Facebook;

use Nette\Application\UI\Control;

/**
 * Description of Facebook
 *
 * @author Jan Galek
 * 
 * @method Facebook setApiKey(string $apiKey) Set api key
 * @method Facebook setLang(string $lang) set ISO code lang https://www.facebook.com/translations/FacebookLocales.xml
 */
abstract class Facebook extends Control{
    
    const LANG_CZ = 'cs_CZ',
	LANG_US = 'en_US',
	LANG_SK = 'sk_SK';

    /** @var string Facebook API key */
    private $apiKey;
    /** @var string ISO code of lang */
    private $lang;
    /** @var string Link to action */
    public $link = 'this';
    
    public function __construct($apiKey,$lang='cs_CZ') {
        parent::__construct($parent=NULL, $name=NULL);
        $this->apiKey = $apiKey;
        $this->lang = $lang;
    }
    
    public function render(){
        $template = $this->template;
        
        $template->render(__DIR__ .'/default.latte');
    }

    public function renderJs(){
        $template = $this->template;
        $template->apiKey = $this->apiKey;
        $template->lang = $this->lang;
        
        $template->render(__DIR__ .'/js.latte');
    }
    
    
}
