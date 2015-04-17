--
-- Dumping data for table `tx_vididemo_domain_model_publisher`
--
INSERT INTO `tx_vididemo_domain_model_publisher` (`uid`, `pid`, `name`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `t3_origuid`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`)
VALUES
	(1, 1, 'iPublish', 1407321880, 1407258922, 1, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X'');

--
-- Dumping data for table `tx_vididemo_domain_model_book`
--
INSERT INTO `tx_vididemo_domain_model_book` (`uid`, `pid`, `title`, `description`, `author`, `language`, `publisher`, `access_codes`, `files`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `t3_origuid`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`)
VALUES
	(1, 1, 'book1', 'description foo', 'John Doe', 1, 1, 4, 0, 1407407663, 1407258091, 55, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X''),
	(2, 1, 'book2', 'description bar', 'Author Name', 1, 1, 4, 0, 1407407663, 1407258091, 55, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X'');

--
-- Dumping data for table `tx_vididemo_domain_model_accesscode`
--
INSERT INTO `tx_vididemo_domain_model_accesscode` (`uid`, `pid`, `book`, `code`, `total_downloads`, `used_downloads`, `von_arbeitshilfen`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `t3_origuid`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`)
VALUES
	(1, 1, 1, 'book1-code1', 12, 0, 0, 1407406385, 1407259002, 55, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X''),
	(2, 1, 1, 'book1-code2', 0, 0, 0, 1407406385, 1407406385, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X''),
	(4, 1, 1, 'book1-code3', 0, 0, 0, 1407407663, 1407406385, 55, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X''),
	(5, 1, 1, 'book1-code4', 0, 0, 0, 1407407663, 1407406385, 55, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, X''),
	(3, 1, 2, 'book2-code1', 0, 0, 0, 1407407663, 1407406385, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, NULL),
	(6, 1, 2, 'book2-code2', 0, 0, 0, 1407407663, 1407406385, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, NULL);

--
-- Dumping data for table `tx_vididemo_domain_model_accesslog`
--
INSERT INTO `tx_vididemo_domain_model_accesslog` (`uid`, `pid`, `code`, `book`, `file`, `device`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`)
VALUES
	(1, 1, 'book1-code1', 'book1', '', 'some-device', 0, 0, 0, 0, 0),
	(2, 1, 'book1-code2', 'book1', '', 'some-device', 0, 0, 0, 0, 0);
