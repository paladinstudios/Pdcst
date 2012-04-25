<?php

/**
 * @file
 * template.php for podcast theme.
 *
 * Implement preprocess functions and alter hooks in this file.
 */

/**
 * Preprocess function for page.tpl.php.
 */
function podcast_preprocess_page(&$variables) {

	$slogans = array(
		t('No Homo!'),
		t('You are queer'),
		t('Thank you for visiting us'),
		t('Stop being stupid!'),
		t('Psst...Come on, just log in'),
	);

	$slogans = $slogans[array_rand($slogans)];

	$variables['site_slogan'] = $slogans;

	//Add new variables to page.tpl
	if($variables['logged_in']) {
		$variables['login_message'] = t('Welcome @username, click here to <a href="/user/logout">logout</a>', array('@username' => $variables['user']->name));
	}
	else {
		$variables['login_message'] = t('Stop being gay and <a href="/user/login">login</a>');
	}

	#kpr($variables);

}

/**
 * Preprocess function for node.tpl.php.
 */
function podcast_preprocess_node($variables) {
	if ($variables['type'] == 'article') {
		$node = $variables['node'];
		$variables['submitted_day'] = format_date($node->created, 'custom', 'j');
		$variables['submitted_month'] = format_date($node->created, 'custom', 'M');
		$variables['submitted_year'] = format_date($node->created, 'custom', 'Y');
	}
}