<?php

$container = require __DIR__ . '/../bootstrap.php';

use Galek\Socials\Google\Google;
abstract class GoogleCase extends Tester\TestCase {
    const TEST_API = '284382148574512';
    
    /** @var Galek\Socials\Google\Config @inject */
    public $facebook;
    
    /** @var Galek\Socials\Facebook\FacebookFactory */
    public $facebookFactory;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    
    public function injectFacebookFactory(Galek\Socials\Google\Google $factory){
	$this->facebookFactory = $factory;
    }

    protected function setUp() {
        $this->facebook = new Galek\Socials\Google\GoogleFactory();
    }

    protected function renderComponent($container,$control) {
        $presenterFactory = $container->getByType('Nette\Application\IPresenterFactory');
        $presenter = $presenterFactory->createPresenter('Homepage');
        $presenter->autoCanonicalize = FALSE;
	$presenter->addComponent($control->create(), __CLASS__ .'google');
        $request = new Nette\Application\Request('Homepage', 'GET', array('action' => 'default'));
        $presenter->run($request);
        $control2 = $presenter[__CLASS__ .'google'];
        //$control2;
        return $control2;
    }
}