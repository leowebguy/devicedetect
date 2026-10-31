# Release Notes for Device Detect

All notable changes to this project will be documented in this file.

## 3.2.0 - 2026.10.31
### Added
- Compatibility with PHP ^8.2 || ^8.3 || ^8.4 || ^8.5 and Craft CMS ^5.0.0
- PHPStan strict static analysis configuration (`phpstan.neon`) at Level 8

### Changed
- Added strict return type to plugin initialization (`Detect::init(): void`)
- Modernized closure signatures and event bindings
- Formatted codebase to PSR-12 standard via Laravel Pint
- Updated `composer.json` metadata (`authors`, `extra` properties, dev scripts)

## 3.1 - 2024.11.22
### + mobiledetectlib ^4.8

## 3.0.0 - 2024.03.26
### Craft 5, PHP 8.2

## 2.0.1 - 2023.03.24
### Cleanup, PHP 8.2

## 2.0.0 - 2022.11.30
### Add additional methods
New methods: isiPad, isiPadOS, isBot, isMobileBot

## 1.0.1 - 2022.08.24
### C4 Cleanup

## 1.0.0 - 2022.05.29
### Initial release
Craft plugin initial release
