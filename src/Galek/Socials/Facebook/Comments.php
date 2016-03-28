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
final class Comments extends Facebook{
    const LAYOUT_STANDARD = 'standard',
          LAYOUT_BOX_COUNT = 'box_count',
          LAYOUT_BUTTON_COUNT = 'BUTTON_COUNT',
          LAYOUT_BUTTON = 'button';
    
    const TYPE_LIKE = 'like',
	TYPE_RECOMMEND = 'recommend';
    
    const SCHEME_DARK = 'dark',
	SCHEME_LIGHT = 'light';
    
    const ORDER_SOCIAL = 'social',
          ORDER_REVERSE_TIME = 'reverse_time',
          ORDER_TIME = 'time';
    
    /** @var string|const The color scheme used by the plugin. Can be "light" or "dark". */
    public $scheme = 'light';
    /** @var boolean A boolean value that specifies whether to show the mobile-optimized version or not.*/
    public $mobile = NULL;
    /** @var integer The number of comments to show by default. The minimum value is 1.*/
    public $count = 10;
    /** @var string The order to use when displaying comments. Can be "social", "reverse_time", or "time".*/
    public $order = 'social';
    /** @var integer The width of the plugin. Either a pixel value or the literal 100% for fluid width. The mobile version of the Comments plugin ignores the width parameter, and instead has a fluid width of 100%. The minimum width supported by the comments plugin is 320px. */
    public $width = 550;

    public function render(){
        $template = $this->template;
        $template->scheme = $this->scheme;
        $template->mobile = $this->mobile;
        $template->count = $this->count;
        $template->order = $this->order;
        $template->width = $this->width;
        $template->link = $this->link;
        
        $template->render(__DIR__ .'/comments.latte');
    }
}
