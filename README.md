[![Latest Stable Version](http://poser.pugx.org/nguyenanhung/template-crawler-package/v)](https://packagist.org/packages/template-backend-package) [![Total Downloads](http://poser.pugx.org/nguyenanhung/template-crawler-package/downloads)](https://packagist.org/packages/nguyenanhung/template-crawler-package) [![Latest Unstable Version](http://poser.pugx.org/nguyenanhung/template-crawler-package/v/unstable)](https://packagist.org/packages/nguyenanhung/template-crawler-package) [![License](http://poser.pugx.org/nguyenanhung/template-crawler-package/license)](https://packagist.org/packages/nguyenanhung/template-crawler-package) [![PHP Version Require](http://poser.pugx.org/nguyenanhung/template-crawler-package/require/php)](https://packagist.org/packages/nguyenanhung/template-crawler-package)

# Template start Crawler Packages

Template for repository Crawler Packages - Basic, Simple and Lightweight

## Use this Template

First, you can `Use this template` for new project: [Use this template](https://github.com/nguyenanhung/template-crawler-package/generate)

Second, clone your project to your to path in your machine

Finally, your edit file `composer.json` in root folder of project

```json
{
    "type": "library",
    "name": "nguyenanhung/template-crawler-package",
    "description": "Structure Repository Template for Crawler Package",
    "keywords": [
        "crawler",
        "helper",
        "library",
        "php"
    ],
    "homepage": "https://github.com/nguyenanhung/template-crawler-package",
    "license": "MIT",
    "minimum-stability": "stable",
    "authors": [
        {
            "name": "Nguyen An Hung",
            "email": "dev@nguyenanhung.com",
            "homepage": "https://nguyenanhung.com",
            "role": "Developer"
        }
    ],
    "require": {
        "php": ">=7.1.3",
        "ext-curl": "*",
        "ext-json": "*",
        "ext-mbstring": "*",
        "nguyenanhung/requests": "^3.0",
        "nguyenanhung/database": "^3.0",
        "nguyenanhung/my-crawler": "^1.0"
    },
    "autoload": {
        "psr-4": {
            "nguyenanhung\\Crawlers\\Your_Project\\": "src/"
        },
        "files": [
            "helpers/helpers.php"
        ]
    }
}

```

Replace name space `REPLACE_FOR_YOUR` to Project Crawler space, example: `Google`. After change namespace, project namespace same `"nguyenanhung\\Crawlers\\Google\\": "src/"`

Finished, your can writing new awesome helper and library now time.

## Contact & Support

If any question & request, please contact following information

| Name        | Email                | Skype            | Facebook      |
|-------------|----------------------|------------------|---------------|
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Vietnam with Love <3