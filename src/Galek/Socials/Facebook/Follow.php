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
 * @method Follow setScheme(string $scheme) The color scheme used by the plugin. Can be "light" or "dark".
 * @method Follow setKidDirected(boolean $kid_directed) If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this 
 * @method Follow setShowFaces(boolean $show_faces) Show profile photos when friends like this
 * @method Follow setWidth(integer $width) Width Button
 * @method Follow setHeight(integer $height) Height Button
 * @method Follow setLayout(string layout) Layout
 */
final class Follow extends Config{
    
    /** @var string|const The color scheme used by the plugin. Can be "light" or "dark". */
    public $scheme = 'light';
    /** @var boolean If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this */
    public $kid_directed = false;    
    /** @var boolean Specifies whether to display profile photos below the button (standard layout only).s */
    public $show_faces = true;
    /** @var string|const Layout Type */
    public $layout = 'standard';
    
    public $width = NULL;
    public $height = NULL;

    public function render(){
        $template = $this->template;
        $template->scheme = $this->scheme;
        $template->kid_directed = $this->kid_directed;
        $template->faces = (string)$this->show_faces;
        $template->width = $this->width;
        $template->height = $this->height;
        $template->layout = $this->layout;
        $template->link = $this->pageLink;
        
        $template->render(__DIR__ .'/follow.latte');
    }
}
