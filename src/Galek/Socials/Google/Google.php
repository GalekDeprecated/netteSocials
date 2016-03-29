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

namespace Galek\Socials\Google;

use Nette\Application\UI\Control;

/**
 * Description of Facebook
 *
 * @author Jan Galek
 * 
 * @method Google setLang(string $lang) set ISO code lang 
 * @method Google setPageLink(string $pageLink) Set Url to Google page
 * @method Google setParse(string $parse) Sets the loading mechanism to use
 * @method Google setLink(string $link) Link to action
 */
class Google extends Control{
    
    const LANG_CZ = 'cs',
	LANG_US = 'en-US',
	LANG_UK = 'en-GB',
	LANG_SK = 'sk';
    
    const LAYOUT_LINE = 'inline',
          LAYOUT_BUBLE = NULL,
	LAYOUT_NONE = 'none';
    
    const SIZE_SMALL = 'small',
	SIZE_MEDIUM = 'medium',
	SIZE_STANDARD = NULL,
	SIZE_TALL = 'tall';
    
    const PARSE_EXPLICIT = 'explicit',
          PARSE_ONLOAD = 'onload';
    
    const ALIGN_LEFT = 'left',
	ALIGN_RIGHT = 'right';


  /** @var string ISO code of lang */
    public $lang;
    /** @var string Url to Facebook page */
    public $pageLink = 'https://www.facebook.com/Jan.Galek.Tvorba.Webu';
    /** @var string Sets the loading mechanism to use. */
    public $parse = 'onload';
    /** @var string Link to action */
    public $link = '//this';
    
    public function __construct($lang='cs') {
        $this->lang = $lang;
    }
    
    /**
     * Set type Share
     * @return \Galek\Socials\Facebook\Share
     */
    public function useShare(){
        return new Share($this->lang);
    }
    
    /**
     * Set type Plus
     * @return \Galek\Socials\Google\Plus
     */
    public function usePlus(){
        return new Plus($this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useComments(){
        return new Comments($this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useFollow(){
        return new Follow($this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function usePage(){
        return new PagePlugin($this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useSend(){
        return new Send($this->lang);
    }

    public function render(){
        $template = $this->template;
        
        $template->render(__DIR__ .'/default.latte');
    }

    public function renderJs(){
        $template = $this->template;
        $template->lang = $this->lang;
        $template->parse = $this->parse;
        $template->render(__DIR__ .'/js.latte');
    }
    
}
