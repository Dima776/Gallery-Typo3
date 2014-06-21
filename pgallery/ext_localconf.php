<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Pgallery',
	array(
		'PersonalGallery' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'PersonalGallery' => 'list, create, update, delete',
		
	)
);

?>