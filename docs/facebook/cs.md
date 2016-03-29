Příklad použití:
```php
abstract class BasePresenter{

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
      return $control;
  }
  public function createComponentFacebookPage(){
      $control = $this->facebook->usePage();
      $control->tabs = Facebook::TAB_ALL;
      return $control;
  }

}
```

#Config
```config
services:
	- Galek\Socials\Facebook\Facebook('123456789') //Api key
```

###Config Extends
```config
services:
	- Galek\Socials\Facebook\Facebook('123456789','cs_CZ') //Api key and set Lang
```