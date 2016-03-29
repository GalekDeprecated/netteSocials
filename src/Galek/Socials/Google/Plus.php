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
 * @method Plus setSize(string $size) Size of Button
 * @method Plus setWidth(integer $width) Width Button
 * @method Plus setLayout(string $layout) Layout type
 * @method Plus setAlign(string $align) Sets the horizontal alignment of the button assets within its frame.
 * @method Plus setRecommendations(boolean $recommendations) To disable showing recommendations within the +1 hover bubble, set data-recommendations to false.
 * @method Plus setCount(boolean $count) Deprecated: To disable the count display, use data-annotation="none".
 */
final class Plus extends Google{
    
    /** @var string|const Size of Button */
    public $size = NULL;
    /** @var integer Width Button */ 
    public $width = 300;
    /** @var string|const Layout Type */
    public $layout = 'inline';
    /** @var string|const Sets the horizontal alignment of the button assets within its frame. */
    public $align = 'left';
   /** @var boolean To disable showing recommendations within the +1 hover bubble, set data-recommendations to false.  */
    public $recommendations = true;
    /** @var boolean Deprecated: To disable the count display, use data-annotation="none". */
    public $count = true;


    public function render(){
        $template = $this->template;
        $template->width = $this->width;
        $template->layout = $this->layout;
        $template->size = $this->size;
        $template->link = $this->link;
        $template->align = $this->align;
        $template->recommendations = $this->recommendations;
        $template->count = $this->count;
        $template->render(__DIR__ .'/plus.latte');
    }
}
