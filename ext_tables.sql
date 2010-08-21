#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_artlesspages_crdate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_startdate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_enddate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_authors text,
	tx_artlesspages_categories text,
	tx_artlesspages_place text,
	tx_artlesspages_enable_comments tinyint(3) DEFAULT '0' NOT NULL,
	tx_artlesspages_price int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_quantity int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_orders text,
	tx_artlesspages_place tinytext
);