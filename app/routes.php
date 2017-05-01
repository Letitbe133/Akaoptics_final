<?php
	
	// méthode GET ou POST, chemin, nom de classe, méthode de classe, nom de la route
	$w_routes = array(
		/* GENERAL ROUTES */
		['GET', '/', 'Default#home', 'home'],
		['GET', '/products', 'Products#products', 'products'],
		['GET|POST', '/products/[:id]', 'Products#productsSingle', 'products_single'],
		['GET', '/company', 'Default#company', 'company'],
		['GET', '/achievements', 'Achievements#listAchievements', 'list_achievements'],
		['GET', '/contact', 'Default#contact', 'contact'],
		
		/* DASHBOARD ROUTE */
		['GET', '/aka-admin/', 'Dashboard#dashboard', 'dashboard'],
		
		/* DASHBOARD EVENTS ROUTES */
		['GET|POST', '/aka-admin/events/add', 'Events#eventAdd', 'dashboard_events_add'],
		['GET|POST', '/aka-admin/events/edit/[:id]', 'Events#eventEdit', 'dashboard_events_edit'],
		['GET', '/aka-admin/events/delete/[:id]', 'Events#eventDelete', 'dashboard_events_delete'],
		['GET', '/aka-admin/events/list', 'Events#eventsList', 'dashboard_events_list'],
		
		/* DASHBOARD PRODUCTS ROUTES */
		['GET|POST', '/aka-admin/products/add', 'Products#productAdd', 'dashboard_products_add'],
		['GET|POST', '/aka-admin/specifications', 'Products#specifications', 'dashboard_specifications'],
		['GET|POST', '/aka-admin/products/edit/[:id]', 'Products#productEdit', 'dashboard_products_edit'],
		['GET', '/aka-admin/products/delete/[:id]', 'Products#productDelete', 'dashboard_products_delete'],
		['GET', '/aka-admin/products/list', 'Products#productsList', 'dashboard_products_list'],
		
		/* DASHBOARD USERS ROUTES */
		['GET|POST', '/aka-admin/users/add', 'Users#usersAdd', 'dashboard_users_add'],
		['GET|POST', '/aka-admin/users/edit/[:id]', 'Users#usersEdit', 'dashboard_users_edit'],
		['GET', '/aka-admin/users/delete/[:id]', 'Users#usersDelete', 'dashboard_users_delete'],
		['GET', '/aka-admin/users/list', 'Users#usersList', 'dashboard_users_list'],
		
		/* DASHBOARD SETTINGS ROUTES */
		['GET|POST', '/aka-admin/settings', 'Website#websiteData', 'dashboard_settings'],
		
		/* AUTHENTICATION ROUTES */
		['GET|POST', '/login', 'Auth#login', 'auth_login'],
		['GET', '/logout', 'Auth#logout', 'auth_logout'],
		['GET|POST', '/signup', 'Auth#signup', 'auth_signup'],
		['GET|POST', '/lostpassword', 'Auth#lostPassword', 'auth_lostpassword'],
	);
	
