MenuBundle
==========
[![Latest Stable Version](https://poser.pugx.org/core23/menu-bundle/v/stable)](https://packagist.org/packages/core23/menu-bundle)
[![Latest Unstable Version](https://poser.pugx.org/core23/menu-bundle/v/unstable)](https://packagist.org/packages/core23/menu-bundle)
[![License](https://poser.pugx.org/core23/menu-bundle/license)](LICENSE.md)

[![Total Downloads](https://poser.pugx.org/core23/menu-bundle/downloads)](https://packagist.org/packages/core23/menu-bundle)
[![Monthly Downloads](https://poser.pugx.org/core23/menu-bundle/d/monthly)](https://packagist.org/packages/core23/menu-bundle)
[![Daily Downloads](https://poser.pugx.org/core23/menu-bundle/d/daily)](https://packagist.org/packages/core23/menu-bundle)

[![Build Status](https://travis-ci.org/core23/MenuBundle.svg)](https://travis-ci.org/core23/MenuBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/core23/MenuBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/core23/MenuBundle)
[![Code Climate](https://codeclimate.com/github/core23/MenuBundle/badges/gpa.svg)](https://codeclimate.com/github/core23/MenuBundle)
[![Coverage Status](https://coveralls.io/repos/core23/MenuBundle/badge.svg)](https://coveralls.io/r/core23/MenuBundle)

[![Donate to this project using Flattr](https://img.shields.io/badge/flattr-donate-yellow.svg)](https://flattr.com/profile/core23)
[![Donate to this project using PayPal](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://paypal.me/gripp)

This bundle provides services for defining static menus for sonata.

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```
composer require core23/menu-bundle
```

### Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Core23\MenuBundle\Core23MenuBundle::class => ['all' => true],
];
```

## Usage

Create a configuration file called `core23_menu.yaml`:

```yaml
# config/packages/core23_menu.yaml

core23_menu:
    groups:
        // Header menu
        header:
            name: 'Header'
            attributes:
                id: 'header-nav'
                
        // Footer menu                
        footer:
            name: 'Footer'
            
        // Main menu
        main:
            name: 'Main'
            attributes:
                class: 'nav navbar-nav'
            items:
                home:
                    label: 'Home'
                    icon: 'fa fa-home'
                    route: 'app_home'
                    routeParams: { path: '/' }
                downloads:
                    label: 'Download'
                    route: 'app_download_index'
                event:
                    label: 'Event'
                    route: 'app_event_index'
                    // Submenu items
                    children:
                        venue:
                            label: 'Venue'
                            route: 'app_venue_index'
```

## License

This bundle is under the [MIT license](LICENSE.md).

