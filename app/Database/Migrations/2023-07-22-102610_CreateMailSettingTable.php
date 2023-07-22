<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMailSettingTable extends Migration
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
            'protocol' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'mailpath' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'mailtype' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'validate_email' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'wordwrap' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('mail_setting');
    }

    public function down()
    {
        $this->forge->dropTable('mail_setting');
    }
}
