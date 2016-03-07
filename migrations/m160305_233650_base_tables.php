<?php

use yii\db\Migration;

class m160305_233650_base_tables extends Migration
{
    public function up()
    {
        $this->createTable('common_status',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
        $this->insert('common_status',[
            'name' => 'active'
        ]);
        $this->insert('common_status',[
            'name' => 'inactive'
        ]);
        $this->createTable('pet_status',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
        $this->insert('pet_status',[
            'name' => 'active'
        ]);
        $this->insert('pet_status',[
            'name' => 'inactive'
        ]);
        $this->insert('pet_status',[
            'name' => 'protected'
        ]);
        $this->createTable('breed',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'date_create' => $this->dateTime()->notNull(),
            'date_update' => $this->dateTime()->notNull(),
            'common_status_id' => $this->integer()->notNull()
        ]);
        $this->createTable('brood',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'date_create' => $this->dateTime()->notNull(),
            'date_update' => $this->dateTime()->notNull(),
            'breed_id' => $this->integer()->notNull(),
            'common_status_id' => $this->integer()->notNull(),
        ]);
        $this->createTable('pet',[
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'date_create' => $this->dateTime()->notNull(),
            'date_update' => $this->dateTime()->notNull(),
            'brood_id' => $this->integer()->notNull(),
            'pet_status_id' => $this->integer()->notNull()
        ]);
        $this->createTable('pet_image',[
            'id' => $this->primaryKey(),
            'source_url' => $this->string()->notNull(),
            'alt' => $this->string()->notNull(),
            'pet_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('pet_to_pet_status',
            'pet','pet_status_id',
            'pet_status', 'id',
            'cascade', 'cascade');
        $this->addForeignKey('breed_to_common_status',
            'breed','common_status_id',
            'common_status', 'id',
            'cascade', 'cascade');
        $this->addForeignKey('brood_to_common_status',
            'brood','common_status_id',
            'common_status', 'id',
            'cascade', 'cascade');
        $this->addForeignKey('pet_to_brood',
            'pet','brood_id',
            'brood', 'id',
            'cascade', 'cascade');
        $this->addForeignKey('brood_to_breed',
            'brood','breed_id',
            'breed', 'id',
            'cascade', 'cascade');
        $this->addForeignKey('pet_to_pet_image',
            'pet_image','pet_id',
            'pet', 'id',
            'cascade', 'cascade');
        $this->createTable('slide',[
            'id' => $this->primaryKey(),
            'source_url' => $this->string()->notNull(),
            'alt' => $this->string()->notNull(),
            'common_status_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey('slide_to_common_status',
            'slide','common_status_id',
            'common_status', 'id',
            'cascade', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('slide_to_common_status', 'slide');
        $this->dropTable('slide');
        $this->dropForeignKey('pet_to_pet_image', 'pet_image');
        $this->dropForeignKey('pet_to_brood', 'pet');
        $this->dropForeignKey('brood_to_breed', 'brood');
        $this->dropForeignKey('breed_to_common_status', 'breed');
        $this->dropForeignKey('brood_to_common_status', 'brood');
        $this->dropForeignKey('pet_to_pet_status', 'pet');
        $this->dropTable('pet_image');
        $this->dropTable('pet');
        $this->dropTable('brood');
        $this->dropTable('breed');
        $this->dropTable('pet_status');
        $this->dropTable('common_status');
    }
}
