<?php
// source: C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../app/config/config.neon 

class Container_de18d7b4d7 extends Nette\DI\Container
{
	protected $meta = array(
		'types' => array(
			'Nette\Object' => array(
				array(
					'application.application',
					'application.linkGenerator',
					'http.requestFactory',
					'http.request',
					'http.response',
					'http.context',
					'nette.template',
					'security.user',
					'session.session',
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
					'application.1',
					'application.2',
					'container',
				),
			),
			'Nette\Application\Application' => array(1 => array('application.application')),
			'Nette\Application\IPresenterFactory' => array(
				1 => array('application.presenterFactory'),
			),
			'Nette\Application\LinkGenerator' => array(1 => array('application.linkGenerator')),
			'Nette\Caching\Storages\IJournal' => array(1 => array('cache.journal')),
			'Nette\Caching\IStorage' => array(1 => array('cache.storage')),
			'Nette\Http\RequestFactory' => array(1 => array('http.requestFactory')),
			'Nette\Http\IRequest' => array(1 => array('http.request')),
			'Nette\Http\Request' => array(1 => array('http.request')),
			'Nette\Http\IResponse' => array(1 => array('http.response')),
			'Nette\Http\Response' => array(1 => array('http.response')),
			'Nette\Http\Context' => array(1 => array('http.context')),
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => array(1 => array('latte.latteFactory')),
			'Nette\Application\UI\ITemplateFactory' => array(1 => array('latte.templateFactory')),
			'Latte\Object' => array(array('nette.latte')),
			'Latte\Engine' => array(array('nette.latte')),
			'Nette\Templating\Template' => array(array('nette.template')),
			'Nette\Templating\ITemplate' => array(array('nette.template')),
			'Nette\Templating\IFileTemplate' => array(array('nette.template')),
			'Nette\Templating\FileTemplate' => array(array('nette.template')),
			'Nette\Mail\IMailer' => array(1 => array('mail.mailer')),
			'Nette\Application\IRouter' => array(1 => array('routing.router')),
			'Nette\Security\IUserStorage' => array(1 => array('security.userStorage')),
			'Nette\Security\User' => array(1 => array('security.user')),
			'Nette\Http\Session' => array(1 => array('session.session')),
			'Tracy\ILogger' => array(1 => array('tracy.logger')),
			'Tracy\BlueScreen' => array(1 => array('tracy.blueScreen')),
			'Tracy\Bar' => array(1 => array('tracy.bar')),
			'App\RouterFactory' => array(1 => array('22_App_RouterFactory')),
			'Galek\Socials\Google\Google' => array(
				1 => array('23_Galek_Socials_Google_Config'),
			),
			'Nette\Application\UI\Control' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\Application\UI\PresenterComponent' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\ComponentModel\Container' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\ComponentModel\Component' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'ArrayAccess' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\Application\UI\IStatePersistent' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\Application\UI\ISignalReceiver' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\ComponentModel\IComponent' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\ComponentModel\IContainer' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Nette\Application\UI\IRenderable' => array(
				array(
					'23_Galek_Socials_Google_Config',
					'25_Galek_Socials_Facebook_Config',
				),
			),
			'Galek\Socials\Google\Config' => array(
				1 => array('23_Galek_Socials_Google_Config'),
			),
			'Galek\Socials\Google\GoogleFactory' => array(
				1 => array('24_Galek_Socials_Google_GoogleFactory'),
			),
			'Galek\Socials\Facebook\Facebook' => array(
				1 => array('25_Galek_Socials_Facebook_Config'),
			),
			'Galek\Socials\Facebook\Config' => array(
				1 => array('25_Galek_Socials_Facebook_Config'),
			),
			'Galek\Socials\Facebook\FacebookFactory' => array(
				1 => array(
					'26_Galek_Socials_Facebook_FacebookFactory',
				),
			),
			'Nette\Application\IPresenter' => array(array('application.1', 'application.2')),
			'NetteModule\ErrorPresenter' => array(array('application.1')),
			'NetteModule\MicroPresenter' => array(array('application.2')),
			'Nette\DI\Container' => array(1 => array('container')),
		),
		'services' => array(
			'22_App_RouterFactory' => 'App\RouterFactory',
			'23_Galek_Socials_Google_Config' => 'Galek\Socials\Google\Config',
			'24_Galek_Socials_Google_GoogleFactory' => 'Galek\Socials\Google\GoogleFactory',
			'25_Galek_Socials_Facebook_Config' => 'Galek\Socials\Facebook\Config',
			'26_Galek_Socials_Facebook_FacebookFactory' => 'Galek\Socials\Facebook\FacebookFactory',
			'application.1' => 'NetteModule\ErrorPresenter',
			'application.2' => 'NetteModule\MicroPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'nette.latte' => 'Latte\Engine',
			'nette.template' => 'Nette\Templating\FileTemplate',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		),
		'tags' => array(
			'inject' => array(
				'application.1' => TRUE,
				'application.2' => TRUE,
			),
			'nette.presenter' => array(
				'application.1' => 'NetteModule\ErrorPresenter',
				'application.2' => 'NetteModule\MicroPresenter',
			),
		),
		'aliases' => array(
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials',
			'wwwDir' => 'C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials\Google',
			'debugMode' => FALSE,
			'productionMode' => TRUE,
			'environment' => 'production',
			'consoleMode' => FALSE,
			'container' => array('class' => NULL, 'parent' => NULL),
			'tempDir' => 'C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../temp',
			'facebookAPI' => '638598666171888',
		));
	}


	/**
	 * @return App\RouterFactory
	 */
	public function createService__22_App_RouterFactory()
	{
		$service = new App\RouterFactory;
		return $service;
	}


	/**
	 * @return Galek\Socials\Google\Config
	 */
	public function createService__23_Galek_Socials_Google_Config()
	{
		$service = new Galek\Socials\Google\Config;
		return $service;
	}


	/**
	 * @return Galek\Socials\Google\GoogleFactory
	 */
	public function createService__24_Galek_Socials_Google_GoogleFactory()
	{
		$service = new Galek\Socials\Google\GoogleFactory;
		return $service;
	}


	/**
	 * @return Galek\Socials\Facebook\Config
	 */
	public function createService__25_Galek_Socials_Facebook_Config()
	{
		$service = new Galek\Socials\Facebook\Config('638598666171888');
		return $service;
	}


	/**
	 * @return Galek\Socials\Facebook\FacebookFactory
	 */
	public function createService__26_Galek_Socials_Facebook_FacebookFactory()
	{
		$service = new Galek\Socials\Facebook\FacebookFactory('638598666171888');
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'), $this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('http.response'));
		$service->catchExceptions = TRUE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'), $this->getService('http.request')->getUrl(),
			$this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, NULL));
		$service->setMapping(array(
			'*' => 'App\*Module\Presenters\*Presenter',
		));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\FileJournal('C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('http.requestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_de18d7b4d7_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('security.user'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		trigger_error('Service nette.latte is deprecated, implement Nette\Bridges\ApplicationLatte\ILatteFactory.',
			16384);
		$service->setTempDirectory('C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		trigger_error('Service nette.template is deprecated.', 16384);
		$service->registerFilter($this->getService('latte.latteFactory')->create());
		$service->registerHelperLoader('Nette\Templating\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = $this->getService('22_App_RouterFactory')->createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = FALSE;
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
	}

}



final class Container_de18d7b4d7_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_de18d7b4d7 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\Socials/../temp/cache/latte');
		$service->setAutoRefresh(FALSE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}
