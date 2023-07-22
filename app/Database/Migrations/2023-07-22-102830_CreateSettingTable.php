<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSettingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'setting_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'description' => [
                'type' => 'text',
                'null' => true,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true,
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => true,
            ],
            'logo' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true,
            ],
            'favicon' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'language' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'site_align' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true,
            ],
            'footer_text' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('setting_id');
        $this->forge->createTable('setting');
    }

    public function down()
    {
        $this->forge->dropTable('setting');
    }
}
