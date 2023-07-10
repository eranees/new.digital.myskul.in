<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'email' => [
                    'type' => 'VARCHAR',
                    'constraint' => 64,
                ],
                'password' => [
                    'type' => 'VARCHAR',
                    'constraint' => 32,
                ]

            ]
        );
        $this->forge->addKey('id', true); // Adding primary key constraint
        $this->forge->createTable('users');
        // $this->forge->addKey('fieldname', true);
        // $this->forge->addUniqueKey(['field1', 'field2']);
    }

    public function down()
    {
        // $this->forge->dropColumn('table_name', 'id');
    }
}
