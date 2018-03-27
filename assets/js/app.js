const SiteTitle = document.querySelector('#site-title');
if( SiteTitle !== null ){
	SiteTitle.innerHTML = Array.from(SiteTitle.textContent).map( char => `<span>${char}</span>` ).join('');
}
/**
 * Pagination Links
 */

const PrevLink = document.querySelector('#blog-pagination-prev a');
const NextLink = document.querySelector('#blog-pagination-next a');

if( PrevLink ) PrevLink.classList = "page-nav-prev";
if( NextLink ) NextLink.classList = "page-nav-next";


/**
 * wrap image with a div
 */


jQuery(document).ready( function($){
	$('.grid').masonry({
	  // options
	  itemSelector: '.single-grid',
	  // columnWidth: 200
	});
} );



const AppNavbar = document.querySelector('.app-navbar');

let LastScrollPosition = 0;
window.addEventListener( 'scroll' , function(event){
	var scrollPositionNow = window.scrollY;
	if(scrollPositionNow > LastScrollPosition)
	{
		AppNavbar.classList.remove('sticky-top');
	}else{
		AppNavbar.classList.add('sticky-top');
	}
	LastScrollPosition = scrollPositionNow;
} )
