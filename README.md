# Brutalist Framework 3.0.3
A framework for the brutalist web design trend.

![BF Cover](https://www.brutalistframework.com/app/files/images/bf-social-tile.jpg)
## About
_Brutalist Framework_ is a free and open source collection of PHP & HTML templates, CSS libraries, and javascript resources specifically for the brutalist web design style.

Features:
* Flat-file (no database needed)
* Lightweight & portable
* No third-party dependencies
* Open source under MIT license

Ideal for:
* Beginner & novice web designers and developers
* Building lightweight and portable applications or small websites
* Brutalizing your web presence

Technologies Used: 
* HTML5 / CSS3
* Vanilla javascript & jquery
* PHP
* CSV, XML, and JSON

***
## Getting Started
Although much of _BF_ uses PHP, this isn't mandatory. You can use just the HTML, CSS, and javascript components if you're developing a static HTML page.

Otherwise, if you plan to utilize PHP, you'll need to use a server. If developing on a local machine, a WAMP, LAMP, or MAMP server will need to be used (depending on what operating system you're using). 

If you plan to develop your project in a specific folder (directory), you'll need to specify the folder name (_$basedir_ variable) in the _bos/build/sysconfig.php_ script (ex: 'sub-dir'). Otherwise, it's best to build in either a root domain or subdomain folder. 

*** 

#### App Directory
The _/app_ directory is ideal for storing application content files, data, and media. Out-of-the-box, it includes some example files that are used throughout _BF_. 

#### BOS Directory
The _/bos_ directory contains CORE CSS libraries, javascript plugins, PHP scripts, and data files that can be used across your whole application.

The core contains additional (optional) resources called _MOLDS_ which provide additional functionality for your app. 

***
### MOLDS
_MOLDS_ (Modular Object Linked Data Source) will be modules included as part of the BOS backend. These modules will use CSV and XML data files, which will allow the rendering of dynamic content on the front-end of your app. 

***
### Core CSS
Core CSS libraries are found in the _/bos/core/css_ directory. By default, all libraries are imported into the _/bos/core/css/construct.css_ file, so only this file is needed. However, you may wish to load CSS libraries independently (ideal for development). 

***
### JAB
_JAB_ (Javascript Application Base) contains all the javascript files for all CORE components. Both vanilla javascript and jQuery plugins are included in the _/bos/core/jab_ directory. 

Javascript files found in the _/bos/core/jab_ directory are vanilla javascript (no dependencies), as well as jQuery libraries are found here. All javascript found in the _core/jab/plugins_ directories are jQuery plugins, and require a jQuery library to be loaded before them. 

***
### Core Data
Core data files are found in the _/bos/core/data_ directory. These data files are used to prepopulate various input components (such as dropdown selectors). 

***
### PHP Build Constructor
The only PHP file you'll need to require is: _/bos/build/constructor.php_.

This PHP script includes helper and constructor scripts, which are used to render PHP variables on the front-end. 
