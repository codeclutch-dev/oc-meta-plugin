# October Meta Plugin
[![Crowdin](https://badges.crowdin.net/oc-meta-plugin/localized.svg)](https://crowdin.com/project/oc-meta-plugin)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

## Overview

Meta plugin is a base for websites made with October CMS by freelancers. This plugin should be compatible with Winter CMS too because it doesn't use any breaking changes October introduced.

With this plugin is possible:

* Set globally title of a page
* Upload a favicon, a logo and an OpenGraph protocol image
* Set globally meta keywords and meta color
* Make an easy copyright information

And the most important feature:

* Set website author signature and logo

## Installation
### Artisan

Use the Laravel's CLI. Traverse to a project's root directory and run the following:

```
php artisan plugin:install codeclutch.meta
```

### Composer

If you want to use Composer instead, run:

```
composer require codeclutch/oc-meta-plugin
php artisan october:migrate
```

or for Winter CMS:
```
composer require codeclutch/oc-meta-plugin
php artisan winter:up
```

## Documentation
### Copyright

If you want to add copyright information add component and write

>{% component 'signature' %}

### Head

Open layout.htm and in head tags leave only import of your style.css / app.css

Then import component and inside the head tag write

>{% component 'head' %}

### Logo

Wherever you want to use website logo, import component and write

>{% component 'logo' %}

(that's only an img)

### Signature

Open footer (or other file) to attach website author's signature in and import component, and then write
>{% component 'signature' %}

## Contributing
You are free to contribute in the following ways:
* sending pull requests
* bug reporting and feature requesting by creating issues on plugin [GitHub page](https://github.com/codeclutch-ltd/oc-meta-plugin/issues)
* localization to your language using [Crowdin](https://crowdin.com/project/oc-meta-plugin)

## License
The Meta plugin for October CMS is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
