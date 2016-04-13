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
 * @method Facebook setPageLink(string $pageLink) Set Url to Facebook page
 * @method Facebook setLink(string $link) Link to action
 * @method string getApiKey() Get api key
 * @method string getLang() Get ISO code of lang
 * @method string getPageLink() Get Url to Facebook page
 * @method string getLink() Get Link to action
 */
class FacebookFactory{
    public $apiKey,$lang;
    
    public function __construct($apiKey = NULL,$lang='cs_CZ') {
        $this->apiKey = $apiKey;
        $this->lang = $lang;
    }
    
    public function create(){
	return new ConfigFactory($this->apiKey, $this->lang);
    }
    
}
