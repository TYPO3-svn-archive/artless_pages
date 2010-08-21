<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$tempColumns = array(
	'tx_artlesspages_crdate' => array (
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_crdate',
		'config' => array (
			'type'     => 'input',
			'size'     => '12',
			'max'      => '20',
			'eval'     => 'datetime',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'tx_artlesspages_startdate' => array(
		'exclude' => 0,		
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_startdate',		
		'config' => array (
			'type'     => 'input',
			'size'     => '12',
			'max'      => '20',
			'eval'     => 'datetime',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'tx_artlesspages_enddate' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_enddate',
		'config' => array(
			'type'     => 'input',
			'size'     => '12',
			'max'      => '20',
			'eval'     => 'datetime',
			'checkbox' => '0',
			'default'  => '0'
		)
	),
	'tx_artlesspages_authors' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_authors',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'size' => 5,
			'minitems' => 0,
			'maxitems' => 20,
		)
	),
	'tx_artlesspages_categories' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_categories',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'pages',
			'size' => 5,	
			'minitems' => 0,
			'maxitems' => 20,
		)
	),
	'tx_artlesspages_enable_comments' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_enable_comments',
		'config' => array(
			'type' => 'check',
		)
	),
	'tx_artlesspages_price' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_price',
		'config' => array (
			'type'     => 'input',
			'size'     => '4',
			'max'      => '4',
			'eval'     => 'int',
			'checkbox' => '0',
			'range'    => array(
				'upper' => '1000',
				'lower' => '10'
			),
			'default' => 0
		)
	),
	'tx_artlesspages_quantity' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_quantity',
		'config' => array(
			'type'     => 'input',
			'size'     => '4',
			'max'      => '4',
			'eval'     => 'int',
			'checkbox' => '0',
			'range'    => array(
				'upper' => '1000',
				'lower' => '10'
			),
			'default' => 0
		)
	),
	'tx_artlesspages_orders' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_orders',
		'config' => array(
			'type' => 'group',
			'internal_type' => 'db',
			'allowed' => 'tt_address',
			'size' => 5,
			'minitems' => 0,
			'maxitems' => 100,
		)
	),
	'tx_artlesspages_place' => array(        
        'exclude' => 0,
        'label' => 'LLL:EXT:artless_pages/locallang_db.xml:pages.tx_artlesspages_place',        
        'config' => array(
            'type' => 'input',    
            'size' => '30',
        )
    ),
);


t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addToAllTCAtypes('pages','--div--;Artless Pages, tx_artlesspages_crdate;;;;1-1-1, tx_artlesspages_startdate, tx_artlesspages_enddate, tx_artlesspages_authors, tx_artlesspages_categories, tx_artlesspages_enable_comments, tx_artlesspages_price, tx_artlesspages_quantity, tx_artlesspages_orders, tx_artlesspages_place');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/artless_pages/', 'Artless Pages');

?>