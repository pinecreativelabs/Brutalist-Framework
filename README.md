# Brutalist-Framework
A framework for the brutalist web design trend.

Version: 3.0

Released: Oct. 31, 2023
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
* CSV, XML

***
## Getting Started
Although much of _BF_ uses PHP, this isn't mandatory. You can use just the HTML, CSS, and javascript components if you're developing a static HTML page.

Otherwise, if you plan to utilize PHP, you'll need to use a server. If developing on a local machine, a WAMP, LAMP, or MAMP server will need to be used (depending on what operating system you're using). 

If you plan to develop your project in a specific folder (directory), you'll need to specify the folder name (_$basedir_ variable) in the _core/bekah.php_ script (ex: 'sub-dir'). Otherwise, it's best to build in either a root domain or subdomain folder. 

***
### Structure
There are two primary folders: _/app_ and _/core_. The app directory is for files and folders that you plan to regularly modify, whereas the core directory is for the static (unchanging) files and folders. 

For your convenience, more detailed documentation and examples are provided in the root directory. These include both HTML and PHP pages. 

#### App Directory
The _/app_ directory is ideal for storing application content files, data, and media. Out-of-the-box, it includes some example files that are used throughout _BF_. 

#### Core Directory
The _/core_ directory contains CSS libraries, javascript plugins, PHP scripts, and data files that can be used across your whole application.

The core contains additional (optional) resources called _MOLDS_ which provide additional functionality for your app. 

***
### MOLDS
_MOLDS_ (Makeable Object Layout & Design Source) resources (CSS only) are automatically loaded in the header, but these can be enabled / disabled via the _/core/molds/config.php_ file. See _molds.php_ for full documentation. 

There are three types of MOLDS:
* Tiles
* Boards
* Panels

#### Tiles
_Tiles_ are HTML components that use only CSS and javascript, so they are ideal for static HTML projects. 

#### Boards
_Boards_ use PHP and CSV or XML data to create groups of content. Data files for Boards should be stored in the _/app/data_ directory. 

#### Panels
_Panels_ will be available in 3.1+, and will also use PHP and CSV or XML data. These are more complex than Boards in that they use more complex PHP and their integration may require additional steps. 

***
### Core CSS
Core CSS libraries are found in the _/core/css_ directory. By default, all libraries are imported into the _/core/css/construct.css_ file, so only this file is needed. However, you may wish to load CSS libraries independently (ideal for development). 

***
### JAB
_JAB_ (Javascript Application Base) contains all the javascript files for all CORE components. Both vanilla javascript and jQuery plugins are included in the _/core/jab_ directory. 

Javascript files found in the _/core/jab_ directory are vanilla javascript (no dependencies), as well as jQuery libraries are found here. All javascript found in the _core/jab/plugins_ directories are jQuery plugins, and require a jQuery library to be loaded before them. 

***
### Core Data
Core data files are found in the _/core/data_ directory. These data files are used to prepopulate various input compontents (such as dropdown selectors). 

***
### Core PHP
In the _/core_ directory, you'll find a family of PHP scripts: _kat.php_, _bekah.php_, _brad.php_, and _core.php_.

#### KAT (Key Array Templater)
_KAT_ script is used to define arrays that are used by the _core.php_ script to construct variables. 

#### BEKAH (Base Environment Key Application Helper)
_BEKAH_ is KAT's sister script. She is helpful.

#### BRAD (Build Renderable Application Data)
_BRAD_ works core data to construct variables that render prepopulated form inputs (selectors) and other elements. 

#### CORE.PHP
The _core.php_ script includes KAT, BEKAH, and BRAD, as well as the _/core/molds/config.php_ file. The core script is the only required script that needs to be included in your page header. 
