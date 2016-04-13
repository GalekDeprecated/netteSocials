<?php

require_once __DIR__ . '/GoogleCase.php';

use Galek\Socials\Google\Google;
use Tester\Assert;

class FacebookTest extends GoogleCase{
    
    private $container;
    /** @var Google */
    public $control;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    protected function setUp() {
        $this->facebook = new Galek\Socials\Google\ConfigFactory();
        $this->control = $this->renderComponent($this->container,  $this->facebook);
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