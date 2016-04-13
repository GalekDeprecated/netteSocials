<?php

$container = require __DIR__ . '/../bootstrap.php';

use Galek\Socials\Facebook\Facebook;
abstract class FacebookTestCase extends Tester\TestCase {
    const TEST_API = '284382148574512';
    
    /** @var Galek\Socials\Facebook\Config @inject */
    public $facebook;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    
    protected function setUp() {
        $this->facebook = new Galek\Socials\Facebook\Config(self::TEST_API);
    }

    protected function renderComponent($container) {
       // ob_start();
        //$control = new $component(self::TEST_API);
        $control = $this->facebook;
        $presenterFactory = $container->getByType('Nette\Application\IPresenterFactory');
        $presenter = $presenterFactory->createPresenter('Homepage');
        $presenter->autoCanonicalize = FALSE;
        $presenter->addComponent($control, __CLASS__ . 'facebook');
        $request = new Nette\Application\Request('Homepage:', 'GET', array('action' => 'default'));
        $presenter->run($request);
        $control2 = $presenter[__CLASS__ . 'facebook'];
        
       // ob_get_clean();
        return $control2;
    }
}