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
 * @method Follow setSize(string $size) Size of Button (height)
 * @method Follow setLayout(string $layout) Layout type
 */
final class Follow extends Google{
    
    /** @var string|const Layout Type */
    public $layout = NULL;
    /** @var string|const Size of Button */
    public $size = NULL;

    public function render(){
        $template = $this->template;
        $template->size = $this->size;
        $template->layout = $this->layout;
        $template->link = $this->pageLink;
        
        $template->render(__DIR__ .'/follow.latte');
    }
}
