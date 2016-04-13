<?php

require_once __DIR__ . '/FacebookTestCase.php';

use Galek\Socials\Facebook\Facebook;
use Galek\Socials\Facebook\FacebookFactory;
use Galek\Socials\Facebook\Like;
use Tester\Assert;

class FacebookLikeTest extends FacebookTestCase{
    
    private $container;
    /** @var Like */
    public $control;
    
    function __construct(Nette\DI\Container $container){
        $this->container = $container;
    }
    protected function setUp(){
	$this->facebook = new Galek\Socials\Facebook\LikeFactory(self::TEST_API);
        $this->control = $this->renderComponent($this->container,  $this->facebook);
    }

    public function testRenderDefault(){
        ob_start();
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/like.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderRecommend(){
        ob_start();
	$this->control->setType(Like::LIKE_TYPE_RECOMMEND);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/recommend.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderScheme(){
        ob_start();
	$this->control->setScheme(Like::SCHEME_DARK);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/scheme.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderKid(){
        ob_start();
	$this->control->kid_directed = TRUE;
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/kid.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderWidth(){
        ob_start();
	$this->control->setWidth(200);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/width.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderLayout(){
        ob_start();
	$this->control->setScheme(Like::SCHEME_DARK);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/layout.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderFaces(){
        ob_start();
	$this->control->setScheme(Like::SCHEME_DARK);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/faces.latte';
        Assert::matchFile($file, $output);
    }
    public function testRenderShare(){
        ob_start();
	$this->control->setScheme(Like::SCHEME_DARK);
        $this->control->render();
        $output = ob_get_clean();
        $file = __DIR__.'/src/default/like/share.latte';
        Assert::matchFile($file, $output);
    }
}

$testCase = new FacebookLikeTest($container);
$testCase->run();