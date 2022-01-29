<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
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
			'isi'          => [
				'type'           => 'VARCHAR',
				'constraint'	 => '1000',
			],
			'foto'             => [
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
		$this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}


