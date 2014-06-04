<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_pgallery_domain_model_personalgallery'] = array(
	'ctrl' => $TCA['tx_pgallery_domain_model_personalgallery']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, link, comment, var1, var2, var3',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, link, comment, var1, var2, var3,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
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
				'foreign_table' => 'tx_pgallery_domain_model_personalgallery',
				'foreign_table_where' => 'AND tx_pgallery_domain_model_personalgallery.pid=###CURRENT_PID### AND tx_pgallery_domain_model_personalgallery.sys_language_uid IN (-1,0)',
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
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'link' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.link',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'comment' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.comment',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'var1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.var1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'var2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.var2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'var3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:pgallery/Resources/Private/Language/locallang_db.xlf:tx_pgallery_domain_model_personalgallery.var3',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);

?>