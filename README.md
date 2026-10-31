# Device Detect plugin for Craft

### Detect devices, OS, bots and more

Wrapper around [MobileDetect](http://mobiledetect.net/) by [@serbanghita](https://github.com/serbanghita)

## Requirements

This plugin requires Craft CMS ^5.0.0 and PHP ^8.2 || ^8.3 || ^8.4 || ^8.5.

## Installation

Open your terminal and go to your Craft project:

```bash
composer require leowebguy/device-detect -w && php craft plugin/install device-detect
```

## Usage

The plugin exposes MobileDetect's methods and can be used in your Twig templates:

```twig
{{ craft.deviceDetect.isMobile ? 'I am mobile.' : 'I am not mobile.' }}
```

### Devices

```twig
{{ craft.deviceDetect.isMobile }}
{{ craft.deviceDetect.isTablet }}
{{ craft.deviceDetect.isiPad }}
{{ craft.deviceDetect.isPhone }}
```

### Operating Systems

```twig
{{ craft.deviceDetect.isiOS }}
{{ craft.deviceDetect.isiPadOS }}
{{ craft.deviceDetect.isAndroidOS }}
```

### User Agent

```twig
{{ craft.deviceDetect.getUserAgent }}
```

`getUserAgent` returns a string, e.g. `Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36`.

## Development

Run quality checks and linters:

```bash
# Static analysis
composer phpstan

# Code style
composer pint-test
composer pint
```

