<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCenterTypeTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'ct_id' => [
				'type' => 'int',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'ct_name' => [
				'type' => 'varchar',
				'constraint' => 100,
			],
			'ct_age_group' => [
				'type' => 'varchar',
				'constraint' => 20,
			],
			'ct_status' => [
				'type' => 'tinyint',
				'constraint' => 1,
				'default' => 1,
			],
		]);

		$this->forge->addPrimaryKey('ct_id');
		$this->forge->createTable('center_type');
	}

	public function down()
	{
		$this->forge->dropTable('center_type');
	}
}
