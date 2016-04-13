<?php
namespace App\Presenters;
use Nette;
use App\Model;
use Galek\Socials\Facebook\Facebook;
use Galek\Socials\Facebook\Config;
/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @var \Galek\Socials\Facebook\Config @inject */
    public $facebook;
    /** @var \Galek\Socials\Google\Google @inject */
    public $google;

    public function createComponentFacebook(){
	$control = $this->facebook;
	return $control;
    }
    
    public function createComponentGoogle(){
	$control = $this->google;
	return $control;
    }
}