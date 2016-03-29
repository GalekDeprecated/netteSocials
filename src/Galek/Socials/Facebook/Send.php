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
 * @method Send setScheme(string $scheme) The color scheme used by the plugin. Can be "light" or "dark".
 * @method Send setKidDirected(boolean $kid_directed) If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this 
 */
final class Send extends Facebook{
    
    /** @var string|const Scheme color light|dark */
    public $scheme = 'light';
    /** @var boolean If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this */
    public $kid_directed = false;


    public function render(){
        $template = $this->template;
        $template->scheme = $this->scheme;
        $template->kid_directed = $this->kid_directed;
        $template->link = $this->link;
        
        $template->render(__DIR__ .'/send.latte');
    }
}
