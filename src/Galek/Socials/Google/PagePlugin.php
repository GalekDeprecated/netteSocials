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
/**
 * Description of Share
 *
 * @author Jan Galek
 * @method PagePlugin setSize(integer $size) Size of Button [16,32,64]
 * @method PagePlugin setTypeBadge(string $size) Type of Badge [person,page,community]
 * @method PagePlugin setType(boolean $type) True = Badge, False = Icon
 * @method PagePlugin setName(string $name) Custon name for Badge Icon
 * @method PagePlugin setScheme(string $scheme) The color scheme used by the plugin. Can be "light" or "dark". 
 * @method PagePlugin setWidth(int $width) Width Badge
 * @method PagePlugin setTagLine(boolean $tagline) Displays the user's tag line if set to true.
 * @method PagePlugin setCoverPhoto(boolean $coverphoto) Displays the cover photo in the badge if set to true and the photo exists.
 */
final class PagePlugin extends Google{
    
    const PAGEPLUGIN_SIZE_SMALL = 16,
	PAGEPLUGIN_SIZE_MEDIUM = 32,
	PAGEPLUGIN_SIZE_BIG = 64;
    
    const PAGE_TYPE_PERSON = 'person',
	PAGE_TYPE_PAGE = 'page',
	PAGE_TYPE_COMMUNITY = 'comunnity';
    
    
    const LAYOUT_VERTICAL = 'portrait',
          LAYOUT_HORIZONTAL = 'landscape';

    const SCHEME_DARK = 'dark',
	SCHEME_LIGHT = 'light';
    /** @var integer Size of Button [16,32,64] */
    public $size = 32;
    /** @var integer Width Badge */ 
    public $width = 300;
    /** @var string|const The color scheme used by the plugin. Can be "light" or "dark". */
    public $scheme = 'light';
    /** @var string Custon name for Badge Icon */
    public $name = NULL;
    /** @var boolean True = Badge, False = Icon */
    public $type = TRUE;
    /** @var string|const [person,page,community] */
    public $badgeType = TRUE;
    /** @var boolean Displays the user's tag line if set to true.*/
    public $tagline = true;
    /** @var boolean Displays the cover photo in the badge if set to true and the photo exists.*/
    public $coverphoto = true;

    public function render(){
        $template = $this->template;
        $template->width = $this->width;
        $template->link = $this->pageLink;
        if($this->type){
	  $template->badgeType = $this->badgeType;
	  $template->scheme = $this->scheme;
	  $template->tagline = (string)$this->tagline;
	  $template->coverphoto = (string)$this->coverphoto;
	  $template->render(__DIR__ .'/page.latte');
        }else{
	  $template->size = $this->size;
	  $template->name = $this->name;
	  $template->render(__DIR__ .'/pageIcon.latte');
        }
    }
}
