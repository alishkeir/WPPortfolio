/*
 * Click Handlers
 */
$('.btn-search').on('click', function(e){
	e.preventDefault()

	$('.header').toggleClass('show-search')
})