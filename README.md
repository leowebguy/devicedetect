# Device Detect plugin for Craft

Minimal craft plugin for detecting mobile devices and more

_Wrapper for the [MobileDetect](http://mobiledetect.net/) library by [@serbanghita](https://github.com/serbanghita)_

---

## Installation

Open your terminal and go to your Craft project:

```bash
cd /path/to/project
```

Then tell composer to load the plugin:

```bash
composer require leowebguy/mobile-detect
```

In the Control Panel, go to Settings → Plugins and click the “Install” button for Device Detect.

---

## Usage

The plugin exposes most of MobileDetect's methods, and can be used in your Twig:

```twig
{{ craft.deviceDetect.isMobile ? 'I am mobile.' : 'I am not mobile.' }}
```

### Methods

_Detects all mobile devices, both phones and tablets_

```twig
{{ craft.deviceDetect.isMobile }}
```

_Detects specific mobile devices, either phones or tablets_

```twig
{{ craft.deviceDetect.isTablet }}
{{ craft.deviceDetect.isPhone }}
```

### Other methods

_Detects specific OS_

```twig
{{ craft.deviceDetect.isiOS }}
{{ craft.deviceDetect.isAndroidOS }}
```

_Detects user agent_

```twig
{{ craft.deviceDetect.getUserAgent }}
```
