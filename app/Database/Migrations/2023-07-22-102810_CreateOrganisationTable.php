<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrganisationTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'org_id' => [
                'type' => 'int',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'org_name' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'org_district' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'org_head_id' => [
                'type' => 'int',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addPrimaryKey('org_id');
        $this->forge->addKey('org_head_id');
        // $this->forge->addForeignKey('org_head_id', 'student', 'user_id');
        $this->forge->createTable('organisation');
    }

    public function down()
    {
        $this->forge->dropTable('organisation');
    }
}
