<?php
return array(
	'_root_'  => 'moods/index',  // The default route
	'_404_'   => 'moods/404',    // The main 404 route
	
	'hello(/:name)?' => array('moods/hello', 'name' => 'hello'),
);
