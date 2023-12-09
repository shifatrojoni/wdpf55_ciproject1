<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products1Migration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category_id'=>[
                'type' => 'VARCHAR',
                'constraint' => 10,
                'unsigned' => true,
            ],
            'product_img'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'product'=>[
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
           
            'price'=>[
                'type' => 'INT',
            ],
            'sku'=>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'model'=>[
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id','category','id','CASCADE','CASCADE');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
