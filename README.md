AF6Bus
==============================================================

This sitepackage is used as a base for all TYPO3 websites developed by Alexander Freundlieb.
Any custom modifications should be made in the extension *af6passenger* to maintain
updatability of this extension.

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
* Download the [latest version](https://github.com/alexanderfreundlieb/sitepackage_af/releases)
of this extension as well as [af6passenger](https://github.com/alexanderfreundlieb/af6passenger/releases)
and unzip the files. 
* In your TYPO3 installation, create a new folder called `packages` in your root directory
and move the two extensions inside it.
* Update your `composer.json` with the following code:
```
"repositories": [
    {
        "type": "path",
        "url": "./packages/*/"
    }
]
```
* Run `composer install alexander-freundlieb/af6bus:@dev` and
`composer install alexander-freundlieb/af6passenger:@dev`
* Include the TypoScript in your TYPO3 Installation
* Set the needed TypoScript constants
