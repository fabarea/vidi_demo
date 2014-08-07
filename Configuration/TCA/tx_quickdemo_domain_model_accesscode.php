<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:access_code',
		'label' => 'code',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		#'hideTable' => TRUE,
		'searchFields' => 'code',
		'typeicon_classes' => array(
			'default' => 'extensions-quick_demo-access_code',
		),
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, code, total_downloads, used_downloads'),
	),
	'palettes' => array(
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_quickdemo_domain_model_accesscode',
				'foreign_table_where' => 'AND tx_quickdemo_domain_model_accesscode.pid=###CURRENT_PID### AND tx_quickdemo_domain_model_accesscode.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'code' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'required, unique, trim, alphanum_x',
			),
		),
		'total_downloads' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:total_downloads',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int',
				'default' => 0,
			),
		),
		'used_downloads' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:used_downloads',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'default' => 0,
				'readOnly' => 1,
			),
		),
		'book' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:book',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_quickdemo_domain_model_book',
				'foreign_field' => 'access_codes',
				'minitems' => 1,
				'maxitems' => 1,
			),
		),
	),
	'grid' => array(
		'columns' => array(
			'__checkbox' => array(
				'width' => '5px',
				'sortable' => FALSE,
				'html' => '<input type="checkbox" class="checkbox-row-top"/>',
			),
			'uid' => array(
				'visible' => FALSE,
				'label' => 'uid',
				'width' => '5px',
			),
			'code' => array(
				'visible' => TRUE,
			),
			'book' => array(
				'visible' => TRUE,
			),
			'total_downloads' => array(
				'visible' => TRUE,
				'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:total_downloads',
			),
			'used_downloads' => array(
				'visible' => TRUE,
				'label' => 'LLL:EXT:quick_demo/Resources/Private/Language/tx_quickdemo_domain_model_accesscode.xlf:used_downloads',
			),
			'__buttons' => array(
				'sortable' => FALSE,
				'width' => '70px',
			),
		),
	),
);