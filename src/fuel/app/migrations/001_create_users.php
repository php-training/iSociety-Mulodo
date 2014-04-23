<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('user', array(
//			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'iduser' => array('constraint' => 11, 'type' => 'int', 'auto_increment'=>true),
			'username' => array(),
			'password' => array(),
			'status' => array ('constraint' => 11, 'type' => 'int', 'auto_increment'=>true),
//			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
//			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('iduser'));
	}

	public function down()
	{
		\DBUtil::drop_table('user');
	}
}