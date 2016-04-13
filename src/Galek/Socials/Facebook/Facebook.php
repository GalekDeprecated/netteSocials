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
abstract class Facebook extends Control{
    
    const LANG_CZ = 'cs_CZ',
	LANG_US = 'en_US',
	LANG_SK = 'sk_SK';
    
    const LAYOUT_BOX_COUNT = 'box_count',
          LAYOUT_BUTTON_COUNT = 'button_count',
	LAYOUT_STANDARD = 'standard',
	LAYOUT_BUTTON = 'button',
	LAYOUT_ICON_LINK = 'icon_link',
	LAYOUT_ICON = 'icon',
	LAYOUT_LINK = 'link';
    
    const LIKE_TYPE_LIKE = 'like',
	LIKE_TYPE_RECOMMEND = 'recommend';
    
    const KID_DIRECTED_YES = true,
	KID_DIRECTED_NO = false;
    
    const SCHEME_DARK = 'dark',
	SCHEME_LIGHT = 'light';
        
    const ORDER_SOCIAL = 'social',
          ORDER_REVERSE_TIME = 'reverse_time',
          ORDER_TIME = 'time';
    
    const TAB_TIMELINE = 'timeline',
	TAB_EVENTS = 'events',
	TAB_MESSAGES = 'messages',
	TAB_TIMELINE_AND_EVENTS = 'timeline,events',
	TAB_TIMELINE_AND_MESSAGES = 'timeline,messages',
	TAB_EVENTS_AND_MESSAGES = 'events,messages',
	TAB_ALL = 'timeline,events,messages';
    
    /** @var string Facebook API key */
    public $apiKey;
    /** @var string ISO code of lang */
    public $lang;
    /** @var string Link to action */
    public $link = '//this';
    /** @var string Url to Facebook page */
    public $pageLink = 'https://www.facebook.com/Jan.Galek.Tvorba.Webu';
    
    /**
     * Set type Share
     * @return \Galek\Socials\Facebook\Share
     */
    public function useShare(){
        return new Share($this->apiKey,  $this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useLike(){
        return new Like($this->apiKey,  $this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useComments(){
        return new Comments($this->apiKey,  $this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useFollow(){
        return new Follow($this->apiKey,  $this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function usePage(){
        return new PagePlugin($this->apiKey,  $this->lang);
    }
    
    /**
     * Set type Like
     * @return \Galek\Socials\Facebook\Like
     */
    public function useSend(){
        return new Send($this->apiKey,  $this->lang);
    }
    

    public function render(){
        $template = $this->template;
        
        //$template->render(__DIR__ .'/default.latte');
    }

    public function renderJs(){
        $template = $this->template;
        $template->apiKey = $this->apiKey;
        $template->lang = $this->lang;
        $template->render(__DIR__ .'/js.latte');
    }
    
}
