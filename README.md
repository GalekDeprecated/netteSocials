# netteSocials

[![Travis] (https://travis-ci.org/JanGalek/netteSocials.svg?branch=master)](https://travis-ci.org/JanGalek/netteSocials)
[![Join the chat at https://gitter.im/GcoreCZ/netteSocials](https://badges.gitter.im/GcoreCZ/netteSocials.svg)](https://gitter.im/GcoreCZ/netteSocials?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Downloads this Month](https://img.shields.io/packagist/dm/galek/nette-socials.svg)](https://packagist.org/packages/galek/nette-socials)

Plugin for Nette framework

##Facebook
* Like / Recommend button
* Share button
* Follow button
* Comments 
* Send button
* Page Plugin

##Comming soon
* Google (testing)
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

###Instalation Google

More Informations in [CZ](/docs/google/cs.md),[EN](/docs/google/en.md)

####Config Basic
```config
services:
	- Galek\Socials\Facebook\Config('123456789') //Api key
	- Galek\Socials\Google\Config() //Api key
```

###Fast local test
after download, you can look to fast test render. You need to go [TestFolder](/tests/GalekTests/) of repository dir.

After tests, you can remove tests dir ;)