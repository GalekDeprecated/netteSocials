Příklad použití:

#Config
```config
services:
	- Galek\Socials\Facebook\Config('123456789') //Api klíč
```

###Config Extends
```config
services:
	- Galek\Socials\Facebook\Config('123456789','cs_CZ') //Api klíč a nastavení jazyka
```

###Presenter
```php
use Galek\Socials\Facebook\Facebook;

abstract class BasePresenter{

    /** @var Facebook @inject */
    public $facebook;

  public function createComponentFacebook(){
      $control = $this->facebook;
      return $control;
  }
  
  public function createComponentFacebookShare(){
      $control = $this->facebook->useShare();
      $control->layout = Facebook::LAYOUT_BOX_COUNT;
      return $control;
  }
  public function createComponentFacebookLike(){
      $control = $this->facebook->useLike();
      $control->layout = Facebook::LAYOUT_STANDARD;
      $control->type = Facebook::LIKE_TYPE_LIKE;
      return $control;
  }
  public function createComponentFacebookComments(){
      $control = $this->facebook->useComments();
      $control->count = 20;
      $control->scheme = Facebook::SCHEME_DARK;
      return $control;
  }
  public function createComponentFacebookSend(){
      $control = $this->facebook->useSend();
      $control->kid_directed = false;
      return $control;
  }
  public function createComponentFacebookFollow(){
      $control = $this->facebook->useFollow();
      $control->kid_directed = false;
      $control->layout = Facebook::LAYOUT_BOX_COUNT;
      $control->scheme = Facebook::SCHEME_DARK;
      $control->setPageLink('https://www.facebook.com/GCORE.cz');
      return $control;
  }
  public function createComponentFacebookPage(){
      $control = $this->facebook->usePage();
      $control->setPageLink('https://www.facebook.com/GCORE.cz');
      $control->tabs = Facebook::TAB_ALL;
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
        {control facebookPage}
    </aside>
    <section class="share">
        <span>{control facebookShare}</span>
        <span>{control facebookLike}</span>
        <span>{control facebookFollow}</span>
        <span>{control facebookSend}</span>
        <span>{control facebookComments}</span>
    </section>
    {control facebook:js}
</body>
</html>
```