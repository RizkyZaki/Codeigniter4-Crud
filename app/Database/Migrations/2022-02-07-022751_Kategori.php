<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'                => [
				'type'          => 'INT',
                'auto_increment'=> true,
			],
			'kategori'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
