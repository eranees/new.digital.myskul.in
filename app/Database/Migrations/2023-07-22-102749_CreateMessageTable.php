<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMessageTable extends Migration
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
            'sender_id' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'receiver_id' => [
                'type' => 'varchar',
                'constraint' => 20,
            ],
            'subject' => [
                'type' => 'varchar',
                'constraint' => 255,
            ],
            'message' => [
                'type' => 'text',
            ],
            'picture' => [
                'type' => 'varchar',
                'constraint' => 300,
            ],
            'datetime' => [
                'type' => 'datetime',
            ],
            'sender_status' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'default' => 0,
                'comment' => '0=unseen, 1=seen, 2=delete',
            ],
            'receiver_status' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'default' => 0,
                'comment' => '0=unseen, 1=seen, 2=delete',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('sender_id');
        $this->forge->addKey('receiver_id');
        $this->forge->createTable('message');
    }

    public function down()
    {
        $this->forge->dropTable('message');
    }
}
