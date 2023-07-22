<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLanguageTable extends Migration
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
            'phrase' => [
                'type' => 'text',
            ],
            'english' => [
                'type' => 'text',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('language');
    }

    public function down()
    {
        $this->forge->dropTable('language');
    }
}
