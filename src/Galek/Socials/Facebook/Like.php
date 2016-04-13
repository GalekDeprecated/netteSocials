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
 * @method Like setScheme(string $scheme) The color scheme used by the plugin. Can be "light" or "dark".
 * @method Like setKidDirected(boolean $kid_directed) If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this 
 * @method Like setShowFaces(boolean $show_faces) Show profile photos when friends like this
 * @method Like setShare(boolean $share) Show Friend's faces
 * @method Like setWidth(integer $width) Width Button
 * @method Like setType(string $type) Type button
 * @method Like setLayout(string $layout) Layout
 * @method string getType() Get Type button
 */
final class Like extends Config{
    
    /** @var string|const The color scheme used by the plugin. Can be "light" or "dark". */
    public $scheme = 'light';
    /** @var boolean If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this */
    public $kid_directed = false;
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
    
    public function __construct($apiKey,$lang='cs_CZ') {
	parent::__construct($apiKey, $lang);
    }

    public function render(){
        $template = $this->template;
        $template->faces = ($this->show_faces ? 'true' : 'false');
        $template->share = ($this->share ? 'true' : 'false');
        $template->scheme = $this->scheme;
	$template->kid_directed = ($this->kid_directed ? 'true' : 'false');
        $template->width = $this->width;
        $template->layout = $this->layout;
        $template->type = $this->getType();
        //$template->type = $this->type;
        $template->link = $this->link;
        
        $template->render(__DIR__ .'/like.latte');
    }
    /*
    public function create(){
        return new Like($this->apiKey);
    }*/
}
