<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMaterialTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'mat_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'mat_title' => [
                'type' => 'varchar',
                'constraint' => 300,
            ],
            'mat_desc' => [
                'type' => 'text',
            ],
            'mat_type' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
            'mat_video_link' => [
                'type' => 'varchar',
                'constraint' => 300,
            ],
            'mat_doc_link' => [
                'type' => 'varchar',
                'constraint' => 300,
            ],
            'mat_date' => [
                'type' => 'datetime',
                // 'default' => 'now()',
            ],
            'org_idd' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true,
            ],
            'cluster_idd' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true,
            ],
            'center_idd' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true,
            ],
            'mat_by' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'mat_status' => [
                'type' => 'tinyint',
                'constraint' => 1,
            ],
        ]);

        $this->forge->addPrimaryKey('mat_id');
        $this->forge->addKey('mat_by');
        $this->forge->createTable('material');
    }

    public function down()
    {
        $this->forge->dropTable('material');
    }
}
