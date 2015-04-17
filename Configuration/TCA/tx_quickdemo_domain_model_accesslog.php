<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:access_log',
		'label' => 'code',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
		),
		#'hideTable' => TRUE,
		'searchFields' => 'code,book,file,device',
		'typeicon_classes' => array(
			'default' => 'extensions-vidi_demo-access_log',
		),
	),
	'interface' => array(
		'showRecordFieldList' => 'code, book, file, device, crdate',
	),
	'types' => array(
		'1' => array('showitem' => 'code, book, file, device, crdate'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'code' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'readOnly' => 1,
			),
		),
		'book' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:book',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'readOnly' => 1,
			),
		),
		'file' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:file',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'readOnly' => 1,
			),
		),
		'device' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:device',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim',
				'readOnly' => 1,
			),
		),
		'crdate' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesslog.xlf:crdate',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'eval' => 'datetime',
				'readOnly' => 1,
			),
		),
	),
	'grid' => array(
		'columns' => array(
			'__checkbox' => array(
				'renderer' => new \TYPO3\CMS\Vidi\Grid\CheckBoxComponent(),
			),
			'code' => array(
				'visible' => TRUE,
			),
			'book' => array(
				'visible' => TRUE,
			),
			'file' => array(
				'visible' => TRUE,
			),
			'crdate' => array(
				'visible' => TRUE,
				'format' => 'datetime',
			),
			'device' => array(
				'visible' => TRUE,
			),
			'__buttons' => array(
				'renderer' => new \TYPO3\CMS\Vidi\Grid\ButtonGroupComponent(),
			),
		),
	),
);