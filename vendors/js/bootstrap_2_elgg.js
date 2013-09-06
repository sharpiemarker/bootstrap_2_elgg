

$(document).ready(function() {

    /* adds bootstrap grid system to elgg classes*/

	$('.elgg-page-default .big_index_mode_box').parents('.elgg-inner').addClass('container-fluid');
	$('.elgg-page-default .big_index_mode_box').parents('.elgg-inner').wrapInner('<div class="row-fluid"></div>');
	$('.elgg-page-default .big_index_mode_box').parents('.row-fluid').wrapInner('<div class="span6"></div>');


	$('.elgg-page-topbar').addClass('container-fluid');
	$('.elgg-page-topbar').addClass('navbar');
	$('.elgg-page-topbar').wrapInner('<div class="navbar-inner"></div>');
	$('.elgg-page-topbar .navbar-inner').wrapInner('<div class="container"></div>');


	$('.elgg-page-topbar .elgg-menu-topbar-alt').addClass('nav-collapse');
	$('.elgg-page-topbar .elgg-menu-topbar-alt').addClass('collapse');
	$('.elgg-page-topbar .elgg-menu-topbar-default .elgg-topbar-logo').addClass('hidden-phone');


	$('.elgg-page-body .elgg-layout-one-column').addClass('container');
	$('.elgg-page-body .elgg-layout-one-column').addClass('pull-left');

	$('.profile').wrapInner('<div class="row-fluid"></div>');
	$('.profile .row-fluid .elgg-inner').addClass('span12');

	$('.elgg-layout-one-sidebar').addClass('container');
	$('.elgg-layout-one-sidebar').wrapInner('<div class="row"></div>');
	$('.elgg-layout-one-sidebar .elgg-main').addClass('span9');
	$('.elgg-layout-one-sidebar .elgg-sidebar').addClass('span2');

	$('.elgg-page-footer').addClass('container');
	$('.elgg-page-footer').wrapInner('<div class="row-fluid"></div>');
	$('.elgg-page-footer .row-fluid').wrapInner('<div class="span12"></div>');


});
