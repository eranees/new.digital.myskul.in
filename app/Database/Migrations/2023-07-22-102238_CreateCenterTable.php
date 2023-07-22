<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCenterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'center_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'center_name' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'center_head_id' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true,
            ],
            'center_cluster_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'center_type_id' => [
                'type' => 'int',
                'constraint' => 11,
                'default' => 1,
            ],
        ]);

        $this->forge->addPrimaryKey('center_id');
        $this->forge->addKey('center_head_id');
        $this->forge->addKey('center_cluster_id');
        $this->forge->addKey('center_type_id');
        // $this->forge->addForeignKey('center_head_id', 'student', 'user_id');
        // $this->forge->addForeignKey('center_type_id', 'center_type', 'ct_id');
        $this->forge->createTable('center');
    }

    public function down()
    {
        $this->forge->dropTable('center');
    }
}
