Příklad použití:

#Config
```config
services:
	- Galek\Socials\Facebook\Config
```

###Config Extends
```config
services:
	- Galek\Socials\Facebook\Config('cs_CZ') // nastavení jazyka
```

###Presenter
```php
use Galek\Socials\Google\Google;

abstract class BasePresenter{

    /** @var \Galek\Socials\Google\Google @inject */
    public $google;

    public function createComponentGoogle(){
	$control = $this->google;
	return $control;
    }

    public function createComponentGooglePlus(){
	$control = $this->google->usePlus();
	return $control;
    }
    public function createComponentGoogleFollow(){
	$control = $this->google->useFollow();
	$control->setPageLink('https://plus.google.com/+GcoreCz');
	return $control;
    }
    public function createComponentGoogleShare(){
	$control = $this->google->useShare();
	return $control;
    }
    public function createComponentGooglePage(){
	$control = $this->google->usePage();
	$control->setPageLink('https://plus.google.com/+GcoreCz');
	return $control;
    }

}
```

###Template 
```latte
<html>
<head>
    <title>Example</title>
</head>
<body>
    <aside>
        {control googlePage}
    </aside>
    <section class="share">
        <span>{control googlePlus}</span>
        <span>{control googleShare}</span>
        <span>{control googleFollow}</span>
    </section>
    {control google:js}
</body>
</html>
```