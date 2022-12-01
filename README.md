# Device Detect plugin for Craft

### Detect devices, OS, bots and more

_Wrapper around [MobileDetect](http://mobiledetect.net/) by [@serbanghita](https://github.com/serbanghita)_

---

## Installation

Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```

Then tell composer to load the plugin:

```bash
composer require leowebguy/device-detect
```

In the Control Panel, go to Settings → Plugins and click the “Install” button for Device Detect.

---

## Usage

The plugin exposes most of MobileDetect's methods, and can be used in your Twig:

```twig
{{ craft.deviceDetect.isMobile ? 'I am mobile.' : 'I am not mobile.' }}
```

### Methods

Devices

```twig
{{ craft.deviceDetect.isMobile }}
{{ craft.deviceDetect.isTablet }}
{{ craft.deviceDetect.isiPad }}
{{ craft.deviceDetect.isPhone }}
```

OS

```twig
{{ craft.deviceDetect.isiOS }}
{{ craft.deviceDetect.isiPadOS }}
{{ craft.deviceDetect.isAndroidOS }}
```

Bots

```twig
{{ craft.deviceDetect.isBot }}
{{ craft.deviceDetect.isMobileBot }}
```

User agent

```twig
{{ craft.deviceDetect.getUserAgent }}
```

getUserAgent returns string i.e. _Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36_
