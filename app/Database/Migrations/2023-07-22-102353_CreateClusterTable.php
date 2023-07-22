<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClusterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cluster_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'cluster_name' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'cluster_org_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'cluster_head_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addPrimaryKey('cluster_id');
        $this->forge->createTable('cluster');
    }

    public function down()
    {
        $this->forge->dropTable('cluster');
    }
}
