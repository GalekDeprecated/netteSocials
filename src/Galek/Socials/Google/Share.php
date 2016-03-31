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
 * 
 * @method Share setSize(string $size) Size of Button
 * @method Share setWidth(integer $width) Width Button
 * @method Share setLayout(string $layout) Layout type
 * @method Share setAlign(string $align) Sets the horizontal alignment of the button assets within its frame.
 */
class Share extends Google{
    
    /** @var string|const Size of Button */
    public $size = NULL;
    /** @var integer Width Button */ 
    public $width = 300;
    /** @var string|const Layout Type */
    public $layout = 'inline';
    /** @var string|const Sets the horizontal alignment of the button assets within its frame. */
    public $align = 'left';
    
    public function render(){
        $template = $this->template;
        $template->width = $this->width;
        $template->layout = $this->layout;
        $template->size = $this->size;
        $template->link = $this->link;
        $template->align = $this->align;
        $template->render(__DIR__ .'/share.latte');
    }
    
}
