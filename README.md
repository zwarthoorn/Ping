# Ping

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a small package to ping your website. The exact working of this package is below.
I sure hope you can find a use for this package and you can manage the websites you want to know are still alive

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require zwarthoorn/ping
```

## Usage
**single ping**
There are a few different ways to do this. first the normal way

``` php
$ping = new Zwarthoorn\Ping($url);
echo $ping->ping();
```
This first 

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email zwarthoorncontact@gmail.com instead of using the issue tracker.

## Credits

- [Walter Wiesnekker][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Zwarthoorn/Ping.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://scrutinizer-ci.com/g/zwarthoorn/ping/badges/build.png?b=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Zwarthoorn/Ping.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Zwarthoorn/Ping.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Zwarthoorn/Ping.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zwarthoorn/ping
[link-travis]: https://scrutinizer-ci.com/g/zwarthoorn/ping/badges/build.png?b=master
[link-scrutinizer]: https://scrutinizer-ci.com/g/zwarthoorn/ping/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zwarthoorn/ping
[link-downloads]: https://packagist.org/packages/zwarthoorn/ping
[link-author]: https://github.com/Zwarthoorn
[link-contributors]: ../../contributors
