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
let lastScrollPosition = 0;
window.addEventListener( 'scroll' , function(){
	let currentScrollPosition = window.scrollY;

	if( currentScrollPosition > lastScrollPosition )
	{
		AppNavbar.classList.remove('sticky-nav')
	}else{
		AppNavbar.classList.add('sticky-nav')
	}



	lastScrollPosition = window.scrollY;
} )