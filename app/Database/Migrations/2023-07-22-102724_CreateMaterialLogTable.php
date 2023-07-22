<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMaterialLogTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ml_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'ml_mat_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'ml_user_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'ml_seen' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'default' => 0,
            ],
            'ml_date' => [
                'type' => 'datetime',
                // 'default' => 'current_timestamp',
            ],
        ]);

        $this->forge->addPrimaryKey('ml_id');
        $this->forge->addKey('ml_mat_id');
        $this->forge->createTable('material_log');
    }

    public function down()
    {
        $this->forge->dropTable('material_log');
    }
}
