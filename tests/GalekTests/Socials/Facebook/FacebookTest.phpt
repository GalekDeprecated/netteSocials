<?php

require_once __DIR__ . '/FacebookTestCase.php';

use Galek\Socials\Facebook\Facebook;
use Tester\Assert;

class FacebookTest extends FacebookTestCase{
    
    private $container;
    /** @var Facebook */
    public $control;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    protected function setUp() {
        $this->facebook = new Galek\Socials\Facebook\Config(self::TEST_API);
        $this->control = $this->renderComponent($this->container);
    }

    public function testRenderJs(){
        ob_start();
        $this->control->renderJs();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/js.latte';
        Assert::matchFile($file, $output);
    }
}

$testCase = new FacebookTest($container);
$testCase->run();