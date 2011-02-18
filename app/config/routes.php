<?php

  // this is the routes file

	Router::connect('/', array('controller' => 'pages', 'action' => 'welcome'));

	// janky ticket route redirect
	Router::connect('/t/:num', array('controller' => 'tickets', 'action' => 'ticket_redirect'));
	
	Router::connect('/_:page', array('controller' => 'pages', 'action' => 'display'));
	
	Router::connect('/404', array('controller'=>'pages', 'action'=>'notfound'));
	
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
	
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	
	Router::connect('/mdx_admin', array('controller' => 'users', 'action' => 'admin_landing'));
	
	Router::connect('/mdx_members', array('controller' => 'members', 'action' => 'member_landing'));

	Router::connect('/mdx_clients', array('controller' => 'clients', 'action' => 'client_landing'));
	
	
