<?php

/*
 * Copyright (C) 2016 Jan
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

namespace Galek\NetteSocials\Facebook;

use Nette\Application\UI\Control;

/**
 * Description of Facebook
 *
 * @author Jan
 */
class Facebook extends Control{
    
    /** @var string Facebook API key */
    private $api;
    
    public function __construct(\Nette\ComponentModel\IContainer $parent = NULL, $name = NULL,$api) {
        parent::__construct($parent, $name);
        $this->api = $api;
    }
    
}
