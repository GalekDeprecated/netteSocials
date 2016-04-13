<?php

require_once __DIR__ . '/FacebookTestCase.php';

use Galek\Socials\Facebook\Facebook;
use Galek\Socials\Facebook\Like;
use Tester\Assert;

class FacebookLikeTest extends FacebookTestCase{
    
    private $container;
    /** @var Like */
    public $control;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    protected function setUp() {
        $this->facebook = new Like(self::TEST_API);
        $this->control = $this->renderComponent($this->container);
    }

    public function testRenderDefault(){
        ob_start();
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like.latte';
        Assert::matchFile($file, $output);
    }

}

$testCase = new FacebookLikeTest($container);
$testCase->run();