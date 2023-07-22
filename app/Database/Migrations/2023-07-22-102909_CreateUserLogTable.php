<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserLogTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'date' => [
                'type' => 'date',
            ],
            'login_time' => [
                'type' => 'datetime',
            ],
            'logout_time' => [
                'type' => 'datetime',
            ],
            'user_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'user_role' => [
                'type' => 'int',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('user_id');
        $this->forge->addKey('user_role');
        // $this->forge->addForeignKey('user_id', 'student', 'user_id');
        // $this->forge->addForeignKey('user_role', 'user_role', 'ur_id');
        $this->forge->createTable('user_log');
    }

    public function down()
    {
        $this->forge->dropTable('user_log');
    }
}
