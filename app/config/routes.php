<?php

  // this is the routes file

	Router::connect('/', array('controller' => 'pages', 'action' => 'welcome'));
	
	Router::connect('/_:page', array('controller' => 'pages', 'action' => 'display'));
