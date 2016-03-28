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
/**
 * Description of Share
 *
 * @author Jan Galek
 */
final class PagePlugin extends Facebook{
    const LAYOUT_STANDARD = 'standard',
          LAYOUT_BOX_COUNT = 'box_count',
          LAYOUT_BUTTON_COUNT = 'BUTTON_COUNT',
          LAYOUT_BUTTON = 'button';
    
    const TYPE_LIKE = 'like',
	TYPE_RECOMMEND = 'recommend';
    
    const TAB_TIMELINE = 'timeline',
	TAB_EVENTS = 'events',
	TAB_MESSAGES = 'messages',
	TAB_TIMELINE_AND_EVENTS = 'timeline,events',
	TAB_TIMELINE_AND_MESSAGES = 'timeline,messages',
	TAB_EVENTS_AND_MESSAGES = 'events,messages',
	TAB_ALL = 'timeline,events,messages';
    

    /** @var integer Width Button */ 
    public $width = 340;
    /** @var integer Height Button */ 
    public $height = 500;
    /** @var string Tabs to render i.e. timeline, events, messages. Use a comma-separated list to add multiple tabs, i.e. timeline, events. */
    public $tabs = 'timeline';
    /** @var boolean Hide cover photo in the header */
    public $hide_cover = false;
    /** @var boolean Show profile photos when friends like this */
    public $show_faces = true;
    /** @var boolean Hide the custom call to action button (if available) */
    public $cta = false;
    /** @var boolean Use the small header instead */
    public $small_header = false;
    /** @var boolean Try to fit inside the container width */
    public $adapt_width = true;

    public function render(){
        $template = $this->template;
        $template->faces = (string)$this->show_faces;
        $template->width = $this->width;
        $template->height = $this->height;
        $template->tabs = $this->tabs;
        $template->hide_cover = (string)$this->hide_cover;
        $template->cta = (string)$this->cta;
        $template->small_header = (string)$this->small_header;
        $template->adapt_width = (string)$this->adapt_width;
        $template->link = $this->link;
        
        $template->render(__DIR__ .'/page.latte');
    }
}
