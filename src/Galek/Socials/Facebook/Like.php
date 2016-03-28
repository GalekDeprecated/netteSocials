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
final class Like extends Facebook{
    const LAYOUT_STANDARD = 'standard',
          LAYOUT_BOX_COUNT = 'box_count',
          LAYOUT_BUTTON_COUNT = 'BUTTON_COUNT',
          LAYOUT_BUTTON = 'button';
    
    const TYPE_LIKE = 'like',
	TYPE_RECOMMEND = 'recommend';
    
    /** @var boolean Show Friend's faces */
    public $show_faces = true;
    /** @var boolean Include Share Button */
    public $share = false;
    /** @var integer Width Button */ 
    public $width = NULL;
    /** @var string|const Layout Type */
    public $layout = 'standard';
    /** @var string|const Type button */
    public $type = 'like';


    public function render(){
        $template = $this->template;
        $template->faces = (string)$this->show_faces;
        $template->share = (string)$this->share;
        $template->width = $this->width;
        $template->layout = $this->layout;
        $template->type = $this->type;
        $template->link = $this->link;
        
        $template->render(__DIR__ .'/like.latte');
    }
}
