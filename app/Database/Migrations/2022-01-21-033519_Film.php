<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Film extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'                => [
				'type'          => 'INT',
                'auto_increment'=> true,
			],
			'judul'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'slug'               => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'sutradara'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'rilis'              => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'poster'             => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at'         => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at'         => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('film');
    }

    public function down()
    {
        $this->forge->dropTable('film');
    }
}

