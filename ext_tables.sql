#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_artlesspages_crdate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_startdate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_enddate int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_authors text,
	tx_artlesspages_categories text,
	tx_artlesspages_enable_comments tinyint(3) DEFAULT '0' NOT NULL,
	tx_artlesspages_price int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_quantity int(11) DEFAULT '0' NOT NULL,
	tx_artlesspages_orders text
);



#
# Table structure for table 'tx_artlesspages_relation'
#
CREATE TABLE tx_artlesspages_relation (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	target text,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);