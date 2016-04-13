<?php
namespace App\Presenters;
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
use Nette;

use Galek\Socials\Facebook\Facebook;
/**
 * Description of HomepagePresenter
 *
 * @author Jan
 */
class HomepagePresenter extends BasePresenter{

    public function createComponentFacebookShare(){
	$control = $this->facebook->useShare();
	$control->layout = Facebook::LAYOUT_BOX_COUNT;
	return $control;
    }
    public function createComponentFacebookLike(){
	$control = $this->facebook->useLike();
	$control->layout = Facebook::LAYOUT_STANDARD;
	$control->type = Facebook::LIKE_TYPE_LIKE;
	return $control;
    }
    public function createComponentFacebookComments(){
	$control = $this->facebook->useComments();
	$control->count = 20;
	$control->scheme = Facebook::SCHEME_DARK;
	return $control;
    }
    public function createComponentFacebookSend(){
	$control = $this->facebook->useSend();
	$control->kid_directed = false;
	return $control;
    }
    public function createComponentFacebookFollow(){
	$control = $this->facebook->useFollow();
	$control->kid_directed = false;
	$control->layout = Facebook::LAYOUT_BOX_COUNT;
	$control->scheme = Facebook::SCHEME_DARK;
	$control->setPageLink('https://www.facebook.com/GCORE.cz');
	return $control;
    }
    public function createComponentFacebookPage(){
	$control = $this->facebook->usePage();
	$control->setPageLink('https://www.facebook.com/GCORE.cz');
	$control->tabs = Facebook::TAB_ALL;
	return $control;
    }
    
    public function createComponentGooglePlus(){
	$control = $this->google->usePlus();
	return $control;
    }
    public function createComponentGoogleFollow(){
	$control = $this->google->useFollow();
	$control->setPageLink('https://plus.google.com/+GcoreCz');
	return $control;
    }
    public function createComponentGoogleShare(){
	$control = $this->google->useShare();
	return $control;
    }
    public function createComponentGooglePage(){
	$control = $this->google->usePage();
	$control->setPageLink('https://plus.google.com/+GcoreCz');
	return $control;
    }
    
}
