<?php

/*
 * Copyright (C) 2016 Galek
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

/**
 * Description of Like
 *
 * @author Galek
 */

use Nette\Application\UI;

use Tester\Assert;
use Galek\Socials\Facebook\Share as FShare;


require __DIR__ . '/../bootstrap.php';


class TestPresenter extends UI\Presenter
{

    protected function createComponentFBLike(){
	$control = new FShare('284382148574512');
	Assert::equal('284382148574512', $control->getApiKey());
	
	$control->setLang(FShare::LANG_CZ);
	Assert::equal(FShare::LANG_CZ, $control->getLang());
	Assert::notEqual('cz', $control->getLang());
	
	$control->setLayout(FShare::LAYOUT_BUTTON);
	$control->setKidDirected(FALSE);
	$control->setShare(TRUE);
	$control->setLayout(FShare::LAYOUT_BOX_COUNT);
	return $control;
    }
    
    public function renderDefault(){
	
    }
    
}

test(function () {
	$control = new FShare('284382148574512');
	$control->setLang(FShare::LANG_CZ);
	$control->setLayout(FShare::LAYOUT_BOX_COUNT);
	return $control;
});


test(function () { // compatibility with 2.0
	$presenter = new TestPresenter;
	$form = new UI\Form;
	$form->setAction('action');
	$presenter['name'] = $form;
	Assert::false(isset($form[TestPresenter::SIGNAL_KEY]));
});
