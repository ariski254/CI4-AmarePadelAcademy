<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProgramMigration  extends Migration
{
    public function up()
    {
        // Tabel programs
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'nav_link'    => ['type' => 'VARCHAR', 'constraint' => 255],
            'paragraph'   => ['type' => 'TEXT'],
            'list_items'  => ['type' => 'TEXT'], // Disimpan sebagai JSON
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('programs');

        // Tabel program_images
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'program_id'  => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'image'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('program_id', 'programs', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('program_images');
    }

    public function down()
    {
        $this->forge->dropTable('program_images');
        $this->forge->dropTable('programs');
    }
}