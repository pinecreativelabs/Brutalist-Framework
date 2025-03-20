'use strict';
(function(){
	// Constructor function
	const VanillaTabs = function( opts ) {
		this.options = Object.assign( VanillaTabs.defaults, opts );
		this.elems = document.querySelectorAll( this.options.selector );
		buildUI( this );
		handleNavigation( this );
		handleResponsive( this );
	}

	// Private function to initialize the UI Elements
	function buildUI( tabs ){
		// walk on all tabs on the page
		tabs.elems.forEach( function( el, i ) {
			let tabsElem = el,
			childNodes = tabsElem.childNodes,
			tabsTitles = [],
			tabsStyle = tabs.options.type;
			tabsElem.classList.add( 'style__' + tabs.options.type );
			for( let i = 0; i < childNodes.length; i++ ) {
				if( childNodes[i].classList && childNodes[i].classList.contains( 'tab-content') ) {
					let tabItem = childNodes[i];
					// grab tab title from data attribute
					let tabTitle = tabItem.dataset.title ? tabItem.dataset.title : '';
					tabsTitles.push( tabTitle );
					// wrap tab content
					let tabContent = tabItem.innerHTML;
					tabItem.innerHTML = '<div class="tab_content_wrapper">' + tabContent + '</div>';
					// insert nav link for accordion navigation
					tabItem.insertAdjacentHTML( 'afterbegin', '<a class="tabs__nav_link">' + tabTitle + '</a>');
				}
			}

			// create horizontal / vertical tabs navigation elements
			let navElemsHTML = '';
			tabsTitles.forEach( function( title ) {
				navElemsHTML = navElemsHTML + '<a class="tabs__nav_link">' + title + '</a>';
			});
			tabsElem.insertAdjacentHTML( 'afterbegin', '<li class="tabs__nav">' + navElemsHTML + '</li>');
			// set initial active tab
			let activeTabIndex = Number( tabs.options.activeIndex );
			// validate active tab index. but, you can specify -1 for accordion tabs to make all of them closed by defaults
			if( tabsStyle != 'accordion' && activeTabIndex != -1 ) {
				if( activeTabIndex > (tabsTitles.length - 1) ) {
					console.warn( 'VANILLA TABS: Active tab number from settings is bigger than tabs count. Please remember, that index starts from Zero! To avoid crashes, activeIndex option was reverted to 0.');
					activeTabIndex = 0;
				}
				tabsElem.querySelectorAll( '.tabs__nav > .tabs__nav_link')[ activeTabIndex ].classList.add( 'is__active' );
				tabsElem.querySelectorAll( '.tab-content')[ activeTabIndex ].classList.add( 'is__active' );
				tabsElem.querySelectorAll( '.tab-content > .tabs__nav_link')[ activeTabIndex ].classList.add( 'is__active' );
			}
		});
	}

	// Navigation: assign click events
	function handleNavigation( tabs ) {
		let tabsStyle = tabs.options.type;
		// walk on all tabs on the page
		tabs.elems.forEach( function( el, i ) {
			let tabsElem = el;
			tabsElem.addEventListener( 'click', function( e ){
				if( e.target && e.target.classList.contains( 'tabs__nav_link') ) {
					e.preventDefault();
					let activeTabIndex;
					// if we click on main navigation link
					if( e.target.parentElement.classList == 'tabs__nav' ) {
						activeTabIndex = Array.prototype.slice.call( e.target.parentElement.children ).indexOf( e.target );
					// if we click on accordion nav link
					} else {
						activeTabIndex = Array.prototype.slice.call( e.target.parentElement.parentElement.children ).indexOf( e.target.parentElement ) - 1;
					}
					let tabsContent = tabsElem.getElementsByClassName( 'tab-content'),
					mainNavLinks = tabsElem.querySelectorAll( '.tabs__nav > .tabs__nav_link'),
					accordionNavLinks = tabsElem.querySelectorAll( '.tab-content > .tabs__nav_link');
					// toggle accordion panel
					if( ( tabsStyle == 'accordion' || tabsElem.classList.contains( 'is__responsive') ) && e.target.classList.contains( 'is__active') ) {
						tabsContent[ activeTabIndex ].classList.remove( 'is__active');
						mainNavLinks[ activeTabIndex ].classList.remove( 'is__active');
						accordionNavLinks[ activeTabIndex ].classList.remove( 'is__active');
						return;
					}
					// remove active class for inactive tabs
					for( let i = 0; i < tabsContent.length; i++ ) {
						tabsContent[ i ].classList.remove( 'is__active');
					}
					// add active class for a current (active) tab
					tabsContent[ activeTabIndex ].classList.add( 'is__active');
					// add active classes and remove inactive for main nav links
					mainNavLinks.forEach( function( el ) {
						el.classList.remove( 'is__active');
					});
					mainNavLinks[ activeTabIndex ].classList.add( 'is__active');
					// add active classes and remove inactive for accordion nav links
					accordionNavLinks.forEach( function( el ) {
						el.classList.remove( 'is__active');
					});									
					accordionNavLinks[ activeTabIndex ].classList.add( 'is__active');
				}
			});
		});
	}

	// Responsive: tabs to accordion
	function handleResponsive( tabs ) {
		const responsiveClassName = 'is__responsive',
		tabsStyle = tabs.options.type;
		window.addEventListener( 'resize', function() {
			// walk on all tabs on the page
			tabs.elems.forEach( function( el, i ) {
				let tabsElem = el,
				tabsContent = tabsElem.getElementsByClassName( 'tab-content'),
				mainNavLinks = tabsElem.querySelectorAll( '.tabs__nav > .tabs__nav_link'),
				accordionNavLinks = tabsElem.querySelectorAll( '.tab-content > .tabs__nav_link');
				if( window.innerWidth > Number( tabs.options.responsiveBreak ) ) {
					tabsElem.classList.remove( responsiveClassName );
					if( tabsStyle != 'accordion' ) {
						// set first active tab if all of tabs were closed in accordion mode
						let openTabs = tabsElem.querySelectorAll( '.tabs__nav_link.is__active');
						if( openTabs.length == 0 ) {
							tabsContent[0].classList.add('is__active');
							mainNavLinks[0].classList.add('is__active');
							accordionNavLinks[0].classList.add('is__active');
						}
					}
				} else {
					tabsElem.classList.add( responsiveClassName );
				}
			});
		});
		// manually fire resize event
		window.dispatchEvent( new Event( 'resize' ));
	}

	// Attach our defaults for plugin to the plugin itself
	VanillaTabs.defaults = {
		'selector': '.b-tabs', 'type': 'horizontal',
		'responsiveBreak': 840, 'activeIndex' : 0
	}
	// make accessible globally
	window.VanillaTabs = VanillaTabs;
})();

// INITIALIZE B-TABS
document.addEventListener('DOMContentLoaded', () => {
	// horizontal tabs
	new VanillaTabs({
		'selector': '.tabs-h', 'type': 'horizontal', 
		'responsiveBreak': 840, 'activeIndex' : 0
	});
	// vertical tabs
	new VanillaTabs({
		'selector': '.tabs-v', 'type': 'vertical', 
		'responsiveBreak': 840,	'activeIndex' : 0
	});
	// accordion
	new VanillaTabs({
		'selector': '.tabs-a', 'type': 'accordion',
		'responsiveBreak': 840, 'activeIndex' : -1
	});
});