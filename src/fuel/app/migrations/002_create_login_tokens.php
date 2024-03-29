<?php

namespace Fuel\Migrations;

class Create_login_tokens
{
	public function up()
	{
		\DBUtil::create_table('login_tokens', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'iduser' => array('constraint' => 11, 'type' => 'int'),
			'token' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('type' => 'timestamp'),
			'due_date' => array('type' => 'datetime'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('login_tokens');
	}
}