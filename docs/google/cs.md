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
	$control = $this->google->set(Google::USE_PLUS); // musí být na jednom řádku
	return $control;
    }
    public function createComponentGoogleFollow(){
	$control = $this->google->set(Google::USE_FOLLOW); // musí být na jednom řádku
	$control->setPageLink('https://plus.google.com/+GcoreCz');
	return $control;
    }
    public function createComponentGoogleShare(){
	$control = $this->google->set(Google::USE_SHARE); // musí být na jednom řádku
	return $control;
    }
    public function createComponentGooglePage(){
	$control = $this->google->set(Google::USE_PAGE); // musí být na jednom řádku
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