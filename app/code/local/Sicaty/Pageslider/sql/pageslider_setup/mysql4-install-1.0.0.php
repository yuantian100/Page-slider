<?php

$installer = $this;

$installer->startSetup ();

$installer->run ( "
 
-- DROP TABLE IF EXISTS {$this->getTable('page_slider')};
CREATE TABLE {$this->getTable('page_slider')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `filename` varchar(255) NOT NULL default '',
  `slider_title` varchar(255) NOT NULL default '',
  `slider_content` text NULL,
  `page_title` varchar(255) NOT NULL default '',
  `page_content` text NULL,
  `status` smallint(6) NOT NULL default '0',
  `weblink` varchar(255) NULL,
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
" );

$installer->endSetup ();