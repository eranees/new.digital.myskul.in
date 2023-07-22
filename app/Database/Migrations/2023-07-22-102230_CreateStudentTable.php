<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'int',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'firstname' => [
                'type' => 'varchar',
                'constraint' => 50,
                'character set' => 'utf8',
            ],
            'user_role' => [
                'type' => 'int',
                'constraint' => 11,
                'default' => 5,
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
            'center_id' => [
                'type' => 'int',
                'constraint' => 11,
                'null' => true,
            ],
            'mobile' => [
                'type' => 'varchar',
                'constraint' => 20,
                'character set' => 'utf8',
                'null' => true,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
                'character set' => 'utf8',
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => 32,
                'character set' => 'utf8',
            ],
            'picture' => [
                'type' => 'varchar',
                'constraint' => 50,
                'character set' => 'utf8',
            ],
            'district' => [
                'type' => 'varchar',
                'constraint' => 200,
            ],
            'block' => [
                'type' => 'varchar',
                'constraint' => 200,
                'null' => true,
            ],
            'village' => [
                'type' => 'varchar',
                'constraint' => 200,
                'null' => true,
            ],
            'school_type' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'school_level' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'school_name' => [
                'type' => 'varchar',
                'constraint' => 200,
                'null' => true,
            ],
            'sex' => [
                'type' => 'varchar',
                'constraint' => 10,
                'character set' => 'utf8',
            ],
            'age' => [
                'type' => 'varchar',
                'constraint' => 11,
            ],
            'class' => [
                'type' => 'varchar',
                'constraint' => 10,
                'null' => true,
            ],
            'school_status' => [
                'type' => 'varchar',
                'constraint' => 50,
            ],
            'father_name' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'father_occup' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'mother_name' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'mother_occup' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true,
            ],
            'socail_status' => [
                'type' => 'varchar',
                'constraint' => 20,
                'null' => true,
            ],
            'remarks' => [
                'type' => 'varchar',
                'constraint' => 300,
                'null' => true,
            ],
            'created_by' => [
                'type' => 'int',
                'constraint' => 11,
            ],
            'create_date' => [
                'type' => 'date',
                'null' => true,
            ],
            'update_date' => [
                'type' => 'date',
                'null' => true,
            ],
            'status' => [
                'type' => 'tinyint',
                'constraint' => 1,
                'default' => 1,
            ],
        ]);

        $this->forge->addPrimaryKey('user_id');
        $this->forge->addKey('user_id');
        $this->forge->addKey('org_idd');
        $this->forge->addKey('cluster_idd');
        $this->forge->addKey('center_id');
        $this->forge->addForeignKey('center_id', 'center', 'center_id');
        $this->forge->addForeignKey('cluster_idd', 'cluster', 'cluster_id');
        $this->forge->addForeignKey('org_idd', 'organisation', 'org_id');
        $this->forge->addForeignKey('user_role', 'user_role', 'ur_id');
        $this->forge->createTable('student');
    }

    public function down()
    {
        $this->forge->dropTable('student');
    }
}
