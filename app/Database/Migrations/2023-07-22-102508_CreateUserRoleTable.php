<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserRoleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ur_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
                'comment' => 'UserRoleId',
            ],
            'ur_role' => [
                'type' => 'varchar',
                'constraint' => 200,
                'comment' => 'UserRole',
            ],
            'ur_date_of_creation' => [
                'type' => 'datetime',
                'comment' => 'Date Of Creation',
            ],
            'ur_status' => [
                'type' => 'int',
                'constraint' => 11,
                'default' => 1,
                'comment' => 'Status',
            ],
        ]);

        $this->forge->addPrimaryKey('ur_id');
        $this->forge->createTable('user_role');
    }

    public function down()
    {
        $this->forge->dropTable('user_role');
    }
}
