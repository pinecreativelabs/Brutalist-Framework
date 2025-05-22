# Brutalist Framework 2.5.4
A framework for the brutalist web design trend.

![BF Cover](https://www.brutalistframework.com/app/files/images/bf-social-tile.jpg)
## About
_Brutalist Framework_ is a free and open source collection of HTML templates, CSS libraries, and javascript resources specifically for the brutalist web design style.

Ideal for:
* Beginner & novice web designers and developers
* Building lightweight and portable applications or small websites
* Brutalizing your web presence
* Static HTML websites / applications

Technologies Used: 
* HTML5 / CSS3
* Vanilla javascript & jquery
* CSV, XML, and JSON

***
## STATIC BUILD
Currently, _BF_ is a framework for building (rapid prototyping) static HTML web pages. Everything you need is found in the _/static_ directory.

#### App Directory
The _/app_ directory is ideal for storing application content files, data, and media. Out-of-the-box, it includes some example files that are used throughout _BF_. 

#### Core Directory
The _/core_ directory contains CORE CSS libraries, javascript plugins, and data files that can be used across your whole application. 

***
### Core CSS
Core CSS libraries are found in the _/static/core/css_ directory. By default, all libraries are imported into the _/static/core/css/construct.css_ file, so only this file is needed. However, you may wish to load CSS libraries independently (ideal for development). 

***
### JAB
_JAB_ (Javascript Application Base) contains all the javascript files for all CORE components. Both vanilla javascript and jQuery plugins are included in the _/static/core/jab_ directory. 

Javascript files found in the _/static/core/jab_ directory are vanilla javascript (no dependencies), as well as jQuery libraries are found here. All javascript found in the _core/jab/plugins_ directories are jQuery plugins, and require a jQuery library to be loaded before them. 

***
### Core Data
Core data files are found in the _/static/core/data_ directory. These data files could be used to prepopulate various input components (such as dropdown selectors). 