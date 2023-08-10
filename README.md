AF6Bus
==============================================================

This sitepackage is used as a base for all TYPO3 websites developed by Alexander Freundlieb.
Any custom modifications should be made in the extension [af6passenger](https://github.com/alexanderfreundlieb/af6passenger/) 
to maintain updatability of this extension.

## Version compatibility
| AF6Bus Version | TYPO3 Version |
|----------------|---------------|
| ^1.0.0         | ^12.4         |

## Dependencies
| Dependency       | Version |
|------------------|---------|
| WS SCSS          | ^12.0   |
| Container        | ^2.2    |
| Content defender | ^3.2    |

## Installation
* Run ```composer require alexander-freundlieb/af6bus``` if you plan on only
using this extension or run ```composer require alexander-freundlieb/af6passenger```
if you plan on both using this extension as well as [af6passenger](https://github.com/alexanderfreundlieb/af6passenger/)
* Include the TypoScript in your TYPO3 Installation
* Set the needed TypoScript constants
