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
 * 
 */
class Share extends Facebook{
    const LAYOUT_BOX_COUNT = 'box_count',
      LAYOUT_BUTTON_COUNT = 'button_count',
      LAYOUT_BUTTON = 'button',
      LAYOUT_ICON_LINK = 'icon_link',
      LAYOUT_ICON = 'icon',
      LAYOUT_LINK = 'link';
    
    /** @var string|const Layout */
    public $layout = 'box_count';
    
    public function render(){
        $template = $this->template;
        $template->layout = $this->layout;
        $template->link = $this->link;
        $template->render(__DIR__ .'/share.latte');
    }
    
}
