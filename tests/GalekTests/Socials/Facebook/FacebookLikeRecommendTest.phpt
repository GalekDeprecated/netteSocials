<?php
/*
require_once __DIR__ . '/FacebookTestCase.php';

use Galek\Socials\Facebook\Config;
use Galek\Socials\Facebook\Like;
use Galek\Socials\Facebook\ILikeFactory;
use Tester\Assert;

class FacebookLikeRecommendTest extends FacebookTestCase{
    
    public $container;
    public $control;*/
    /** @var Galek\Socials\Facebook\Like @inject */
   /* public $facebook;
    
    protected function setUp() {

        $control = new ILikeFactory(self::TEST_API);
        $control2 = $control->useLike()->setType(Like::LIKE_TYPE_RECOMMEND);
        
        //$control2->setType(Like::LIKE_TYPE_RECOMMEND);
        
        $presenterFactory = $this->container->getByType('Nette\Application\IPresenterFactory');
        $presenter = $presenterFactory->createPresenter('Homepage');
        $presenter->autoCanonicalize = FALSE;
        $presenter->addComponent($control2, 'facebook');
        $request = new Nette\Application\Request('Homepage:', 'GET', array('action' => 'default'));
        $presenter->run($request);
        //$control2 = $presenter[__CLASS__ . 'facebook'];
        $this->control = $presenter['facebook'];
    }

    public function testRenderRecommend(){
        ob_start();
        $this->control->render();
        $output = ob_get_clean();
        fwrite(fopen(__DIR__ .'/output/renders/js.txt', 'w+'), $output);
        $file = __DIR__.'/src/default/recommend.latte';
        Assert::matchFile($file, $output);
    }
}

$testCase = new FacebookLikeRecommendTest($container);
$testCase->run();*/