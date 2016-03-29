# netteSocials

Plugin for Nette framework

##Facebook
* Like / Recommend button
* Share button
* Follow button
* Comments 
* Send button
* Page Plugin

##Comming soon
* Google
* Twitter
* if you want next, you can contact me ;)

Package Installation
-------------------

The best way to install Nette Socials is using [Composer](http://getcomposer.org/):

```sh
$ composer require galek/nette-socials
```

[Packagist - Versions](https://packagist.org/packages/galek/nette-socials)

or manual edit composer.json in your project

```json
"require": {
    "galek/nette-socials": "^1.0"
}
```

###Instalation Facebook

More Informations in [CZ](/docs/facebook/cs.md),[EN](/docs/facebook/en.md)

####Config Basic
```config
services:
	- Galek\Socials\Facebook\Facebook('123456789') //Api key
```

