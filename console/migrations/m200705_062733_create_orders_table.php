<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m200705_062733_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNulL(),
            'count' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'location' => $this->string(),
            'date' => $this->integer(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string(),
            'description' => $this->text(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'creaetd_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ], $tableOptions);
        $this->createIndex('index-orders-product_id', 'orders', 'product_id');
        $this->addForeignKey('fkey-orders-product_id', 'orders', 'product_id', 'products', 'id', 'RESTRICT', 'RESTRICT');
        $this->createIndex('index-orders-created_by', 'orders', 'created_by');
        $this->addForeignKey('fkey-orders-created_by', 'orders', 'created_by', 'user', 'id', 'RESTRICT', 'RESTRICT');
        $this->createIndex('index-orders-updated_by', 'orders', 'updated_by');
        $this->addForeignKey('fkey-orders-updated_by', 'orders', 'updated_by', 'user', 'id', 'RESTRICT', 'RESTRICT');

    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
