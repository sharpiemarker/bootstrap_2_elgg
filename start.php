<?php

	/**
	 * Bootstrap
	 *
	 */


elgg_register_event_handler('init','system','bootstrap_init');

function bootstrap_init()
{

  global $CONFIG;

  elgg_register_js('bootstrap', 'mod/bootstrap/vendors/js/bootstrap.js', 'head');
  elgg_register_js('bootstrap', 'mod/bootstrap/vendors/js/bootstrap_2_elgg.js', 'head');

  elgg_load_js('bootstrap');
  elgg_load_js('bootstrap_2_elgg');

  elgg_extend_view('css/elgg', 'bootstrap/css');

}


