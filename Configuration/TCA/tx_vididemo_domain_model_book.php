<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:book',
		'label' => 'title',
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
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,author,access_codes,publisher',
		'typeicon_classes' => array(
			'default' => 'extensions-vidi_demo-book',
		),
	),
	'types' => array(
		'1' => array('showitem' => '
			--div--;LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:tabs.details, hidden;;1,
				--palette--;LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:palette.title;title, files, language, publisher, description,
			--div--;LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:tabs.codes, access_codes'
		),
	),
	'palettes' => array(
		'title' => array('canNotCollapse' => '1', 'showitem' => 'title, author'),
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
				'foreign_table' => 'tx_vididemo_domain_model_book',
				'foreign_table_where' => 'AND tx_vididemo_domain_model_book.pid=###CURRENT_PID### AND tx_vididemo_domain_model_book.sys_language_uid IN (-1,0)',
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
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'author' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:author',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 2,
			),
		),
		'language' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:language',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:language.item.blindtext', ''),
					array('LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:language.item.english', 1),
					array('LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:language.item.german', 2),
					array('LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:language.item.french', 2),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'publisher' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:publisher',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:publisher.item.blindtext', 0),
				),
				'foreign_table' => 'tx_vididemo_domain_model_publisher',
				#'foreign_table_where' => 'AND tx_vididemo_domain_model_publisher.pid=###STORAGE_PID###',
				'minitems' => 1,
				'maxitems' => 1,
			),
		),
		'access_codes' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:access_codes',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_vididemo_domain_model_accesscode',
				'foreign_field' => 'book',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 1,
					'expandSingle' => 1,
					'levelLinksPosition' => 'top',
					'newRecordLinkAddTitle' => 1,
					'showSynchronizationLink' => 0,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1,
					'enabledControls' => array(
						'info' => FALSE,
						'new' => TRUE,
					),
				),
			),
		),
		'files' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:files',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'files',
				array(
					'maxitems' => 3,
					'appearance' => array(
						'headerThumbnail' => array(
							'field' => NULL,
						),
						'enabledControls' => array(
							'info' => FALSE,
							'new' => FALSE,
							'dragdrop' => FALSE,
							'sort' => FALSE,
							'hide' => TRUE,
							'delete' => TRUE,
							'localize' => FALSE,
						),
						'createNewRelationLinkTitle' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:addFileReference',
					),
				),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
	),
	'grid' => array(
		'excluded_fields' => 'files',
		'columns' => array(
			'__checkbox' => array(
				'renderer' => new \Fab\Vidi\Grid\CheckBoxComponent(),
			),
			'uid' => array(
				'visible' => FALSE,
				'label' => 'uid',
				'width' => '5px',
			),
			'title' => array(
				'visible' => TRUE,
			),
			'author' => array(
				'visible' => TRUE,
			),
			'publisher' => array(
				'visible' => TRUE,
				'renderer' => 'Fab\Vidi\Grid\RelationRenderer',
			),
			'access_codes' => array(
				'visible' => TRUE,
				'renderers' => array(
					new Fab\Vidi\Grid\GenericColumn('Fab\Vidi\Grid\RelationEditRenderer'),
					new Fab\Vidi\Grid\GenericColumn(
						'Fab\Vidi\Grid\RelationCountRenderer',
						array(
							'labelSingular' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_accesscode.xlf:access_code',
							'labelPlural' => 'LLL:EXT:vidi_demo/Resources/Private/Language/tx_vididemo_domain_model_book.xlf:access_codes',
							'sourceModule' => 'ebook_VidiTxVididemoDomainModelBookM1',
							'targetModule' => 'ebook_VidiTxVididemoDomainModelAccesscodeM1',
						)
					),
				),
			),
			'__buttons' => array(
				'renderer' => new \Fab\Vidi\Grid\ButtonGroupComponent(),
			),
		),
	),
);