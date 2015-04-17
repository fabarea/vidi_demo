<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fab.vidi_demo',
	'Pi1',
	array(
		'UserDemo' => 'list',
	),
	array(
		'UserDemo' => 'list',
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Fab.vidi_demo',
	'Pi2',
	array(
		'FileDemo' => 'list',
	),
	array(
		'FileDemo' => 'list',
	)
);

