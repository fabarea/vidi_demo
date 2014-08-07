<?php

########################################################################
# Extension Manager/Repository config file for ext "bobst_forms".
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Quick demo to illustrate various features of Vidi', # , Quick Form, Messenger, Media Upload
	'description' => 'Quick demo to illustrate various features of Vidi.', # , Quick Form, Messenger, Media Upload
	'category' => 'plugin',
	'author' => 'Fabien Udriot',
	'author_email' => 'fabien.udriot@ecodev.ch',
	'state' => 'stable',
	'internal' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0-dev',
	'constraints' => array(
		'depends' => array(
			'vidi' => '',
			'media' => '',
			#'media_upload' => '',
			#'quick_demo' => '',
			#'messenger' => '',
			'typo3' => '6.2.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
);

?>