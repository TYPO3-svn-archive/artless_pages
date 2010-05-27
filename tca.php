<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_artlesspages_relation'] = array (
	'ctrl' => $TCA['tx_artlesspages_relation']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,target'
	),
	'feInterface' => $TCA['tx_artlesspages_relation']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'target' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:artless_pages/locallang_db.xml:tx_artlesspages_relation.target',		
			'config' => array (
				'type' => 'group',	
				'internal_type' => 'db',	
				'allowed' => 'pages',	
				'size' => 5,	
				'minitems' => 0,
				'maxitems' => 100,
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, target')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>