HttpAdapter
===========

This PHP 5.3+ library provides you simple HTTP adapters.

[![Build Status](https://secure.travis-ci.org/toin0u/HttpAdapter.png)](http://travis-ci.org/toin0u/HttpAdapter)
[![Coverage Status](https://coveralls.io/repos/toin0u/HttpAdapter/badge.png?branch=master)](https://coveralls.io/r/toin0u/HttpAdapter)
[![Latest Stable Version](https://poser.pugx.org/toin0u/http-adapter/v/stable.png)](https://packagist.org/packages/toin0u/http-adapter)
[![Total Downloads](https://poser.pugx.org/toin0u/http-adapter/downloads.png)](https://packagist.org/packages/toin0u/http-adapter)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/3aaca262-e71d-4256-a41e-be59f7d8d874/mini.png)](https://insight.sensiolabs.com/projects/3aaca262-e71d-4256-a41e-be59f7d8d874)


Installation
------------

This library can be found on [Packagist](https://packagist.org/packages/toin0u/http-adapter).
The recommended way to install this is through [composer](http://getcomposer.org).

Edit `compose.json` and add:

```json
{
    "require": {
        "toin0u/http-adapter": "~1.0"
    }
}
```

And install dependecies:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```

Available adapters
------------------

* `CurlHttpAdapter` to use [cURL](http://php.net/manual/book.curl.php).
* `BuzzHttpAdapter` to use [Buzz](https://github.com/kriswallsmith/Buzz), a lightweight PHP 5.3 library for
issuing HTTP requests.
* `GuzzleHttpAdapter` to use [Guzzle](https://github.com/guzzle/guzzle), PHP 5.3+ HTTP client and framework
for building RESTful web service clients.
* `ZendHttpAdapter` to use [Zend Http Client](http://framework.zend.com/manual/2.0/en/modules/zend.http.client.html).
* `SocketHttpAdapter` to use a [socket](http://www.php.net/manual/function.fsockopen.php).


Usage
-----

```php
<?php

require 'vendor/autoload.php';

$adapter = new HttpAdapter\CurlHttpAdapter;
$url     = 'http://ifconfig.me/ip';

printf('IP: %s', $adapter->getContent($url)); // IP: 127.0.0.1

```


Contributing
------------

Please see [CONTRIBUTING](https://github.com/toin0u/HttpAdapter/blob/master/CONTRIBUTING.md) for details.


Credits
-------

* [Antoine Corcy](https://twitter.com/toin0u)
* [All contributors](https://github.com/toin0u/HttpAdapter/contributors)


Acknowledgment
--------------

This set of adapters comes originally from the [Geocoder PHP library](http://geocoder-php.org/).


Support
-------

[Please open an issues in github](https://github.com/toin0u/HttpAdapter/issues)


License
-------

HttpAdapter is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/HttpAdapter/blob/master/LICENSE) file for details.
