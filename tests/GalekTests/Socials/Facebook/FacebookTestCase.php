<?php

$container = require __DIR__ . '/../bootstrap.php';

use Galek\Socials\Facebook\Facebook;
abstract class FacebookTestCase extends Tester\TestCase {
    const TEST_API = '284382148574512';
    
    /** @var Galek\Socials\Facebook\Config @inject */
    public $facebook;
    
    /** @var Galek\Socials\Facebook\FacebookFactory */
    public $facebookFactory;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    
    public function injectFacebookFactory(Galek\Socials\Facebook\FacebookFactory $factory){
	$this->facebookFactory = $factory;
    }

    protected function setUp() {
        $this->facebook = new Galek\Socials\Facebook\FacebookFactory(self::TEST_API);
    }

    protected function renderComponent($container,$control) {
       // ob_start();
        //$control = new $component(self::TEST_API);
        //$control = new Galek\Socials\Facebook\FacebookFactory(self::TEST_API);
	//$control->create();
	//$facebook = new Galek\Socials\Facebook\FacebookFactory(self::TEST_API);
	//$facebook->create();
        $presenterFactory = $container->getByType('Nette\Application\IPresenterFactory');
        $presenter = $presenterFactory->createPresenter('Homepage');
        $presenter->autoCanonicalize = FALSE;
	$presenter->addComponent($control->create()->create(), __CLASS__ .'facebook');
        $request = new Nette\Application\Request('Homepage', 'GET', array('action' => 'default'));
        $presenter->run($request);
        $control2 = $presenter[__CLASS__ .'facebook'];
        $control2->create();
       // ob_get_clean();
        return $control2;
    }
}