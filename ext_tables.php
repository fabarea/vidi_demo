<?php
if (!defined('TYPO3_MODE')) die ('Access denied.');


if (TYPO3_MODE === 'BE') {

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vididemo_domain_model_publisher');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vididemo_domain_model_book');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vididemo_domain_model_accesscode');
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_vididemo_domain_model_accesslog');

	// Pi1: list of Users
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'vidi_demo',
		'Pi1',
		'Vidi - list of Users'
	);

	$TCA['tt_content']['types']['list']['subtypes_addlist']['vididemo_pi1'] = 'pi_flexform';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('vididemo_pi1', 'FILE:EXT:vidi_demo/Configuration/FlexForm/User.xml');

	// Pi2: list of files
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
		'vidi_demo',
		'Pi2',
		'Vidi - list of Files'
	);

	$TCA['tt_content']['types']['list']['subtypes_addlist']['vididemo_pi2'] = 'pi_flexform';
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('vididemo_pi2', 'FILE:EXT:vidi_demo/Configuration/FlexForm/File.xml');


	// Add eBook main module before 'user'
	// There are not API for doing this... ;(
	// Some hope with this patch merged into 6.2 http://forge.typo3.org/issues/49643
	if (TYPO3_MODE == 'BE') {
		if (!isset($GLOBALS['TBE_MODULES']['ebook'])) {
			$beModules = array();
			foreach ($GLOBALS['TBE_MODULES'] as $key => $val) {
				if ($key == 'user') {
					$beModules['ebook'] = '';
				}
				$beModules[$key] = $val;
			}
			$GLOBALS['TBE_MODULES'] = $beModules;
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
				'ebook',
				'',
				'',
				\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('vidi_demo') . 'mod/ebook/');
		}
	}

	// Register Vidi modules
	/** @var \TYPO3\CMS\Extbase\Object\ObjectManager $objectManager */
	$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Extbase\Object\ObjectManager');

	/** @var \TYPO3\CMS\Extensionmanager\Utility\ConfigurationUtility $configurationUtility */
	$configurationUtility = $objectManager->get('TYPO3\CMS\Extensionmanager\Utility\ConfigurationUtility');
	$configuration = $configurationUtility->getCurrentConfiguration('vidi');

	$dataTypes = array('tx_vididemo_domain_model_book', 'tx_vididemo_domain_model_publisher', 'tx_vididemo_domain_model_accesscode', 'tx_vididemo_domain_model_accesslog');

	// Loop around the data types and register them to be displayed within a BE module.
	foreach ($dataTypes as $dataType) {

		/** @var \Fab\Vidi\Module\ModuleLoader $moduleLoader */
		$moduleLoader = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Fab\Vidi\Module\ModuleLoader', $dataType);
		$moduleLoader->setIcon(sprintf('EXT:vidi_demo/Resources/Public/Icons/%s.gif', $dataType))
			->setModuleLanguageFile(sprintf('LLL:EXT:vidi_demo/Resources/Private/Language/%s.xlf', $dataType))
			->addJavaScriptFiles(array(sprintf('EXT:vidi_demo/Resources/Public/JavaScript/Backend/%s.js', $dataType)))
			->setMainModule('ebook')
			->setDefaultPid($configuration['default_pid']['value'])
			->register();
	}

	$extensionRelativePath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('vidi_demo');

	// Add sprite icons.
	\TYPO3\CMS\Backend\Sprite\SpriteManager::addSingleIcons(
		array(
			'book' => $extensionRelativePath . 'Resources/Public/Icons/tx_vididemo_domain_model_book.gif',
			'publisher' => $extensionRelativePath . 'Resources/Public/Icons/tx_vididemo_domain_model_publisher.gif',
			'access_code' => $extensionRelativePath . 'Resources/Public/Icons/tx_vididemo_domain_model_accesscode.gif',
			'access_log' => $extensionRelativePath . 'Resources/Public/Icons/tx_vididemo_domain_model_accesslog.gif',
		),
		'vidi_demo'
	);
}


// Add static TypoScript
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('vidi_demo', 'Configuration/TypoScript', 'Bobst Forms');


// Add data type to default list of allowed tables on pages.
//$dataTypes = array(
//	'tx_bobst_request',
//);
//
//foreach ($dataTypes as $dataType) {
//	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages($dataType);
//}
