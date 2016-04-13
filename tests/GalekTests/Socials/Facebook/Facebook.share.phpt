<?php

require_once __DIR__ . '/FacebookTestCase.php';

use Galek\Socials\Facebook\Facebook;
use Galek\Socials\Facebook\ShareFactory;
use Galek\Socials\Facebook\Share;
use Tester\Assert;

class FacebookShareTest extends FacebookTestCase{
    
    private $container;
    /** @var Comments */
    public $control;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    protected function setUp(){
	$this->facebook = new Share(self::TEST_API);
        $this->control = $this->renderComponent($this->container,  $this->facebook);
    }

    public function testRenderDefault(){
        ob_start();
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/share/default.latte';
        Assert::matchFile($file, $output);
    }
}

$testCase = new FacebookShareTest($container);
$testCase->run();