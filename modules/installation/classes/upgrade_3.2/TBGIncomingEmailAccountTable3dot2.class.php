<?php

	use b2db\Core,
		b2db\Criteria,
		b2db\Criterion;

	/**
	 * @Table(name="mailing_incoming_email_account_32")
	 */
	class TBGIncomingEmailAccountTable3dot2 extends TBGB2DBTable
	{
		
		const B2DB_TABLE_VERSION = 1;
		const B2DBNAME = 'mailing_incoming_email_account';
		const ID = 'mailing_incoming_email_account.id';
		const NAME = 'mailing_incoming_email_account.name';
		const USERNAME = 'mailing_incoming_email_account.username';
		const PASSWORD = 'mailing_incoming_email_account.password';
		const SERVER = 'mailing_incoming_email_account.server';
		const PORT = 'mailing_incoming_email_account.port';
		const FOLDER = 'mailing_incoming_email_account.folder';
		const SERVER_TYPE = 'mailing_incoming_email_account.server_type';
		const SSL = 'mailing_incoming_email_account.ssl';
		const KEEP_EMAIL = 'mailing_incoming_email_account.keep_email';
		const PROJECT = 'mailing_incoming_email_account.project';
		const ISSUETYPE = 'mailing_incoming_email_account.issuetype';
		const NUM_LAST_FETCHED = 'mailing_incoming_email_account.num_last_fetched';
		const TIME_LAST_FETCHED = 'mailing_incoming_email_account.time_last_fetched';
		const SCOPE = 'mailing_incoming_email_account.scope';

		protected function _initialize()
		{
			parent::_setup(self::B2DBNAME, self::ID);
			parent::_addVarchar(self::NAME, 200);
			parent::_addVarchar(self::SERVER, 200);
			parent::_addVarchar(self::USERNAME, 200);
			parent::_addVarchar(self::PASSWORD, 200);
			parent::_addInteger(self::SERVER_TYPE, 10);
			parent::_addInteger(self::PORT, 3);
			parent::_addBoolean(self::KEEP_EMAIL);
			parent::_addBoolean(self::SSL);
			parent::_addForeignKeyColumn(self::PROJECT, TBGProjectsTable::getTable(), TBGProjectsTable::ID);
			parent::_addForeignKeyColumn(self::SCOPE, TBGScopesTable::getTable(), TBGScopesTable::ID);
		}

	}