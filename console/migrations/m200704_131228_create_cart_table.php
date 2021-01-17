<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cart}}`.
 */
class m200704_131228_create_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%cart}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNulL(),
            'session_id' => $this->string()->notNull(),
            'count' => $this->string()->notNull(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ], $tableOptions);
        $this->createIndex('index-cart-product_id', 'cart', 'product_id');
        $this->addForeignKey('fkey-cart-product_id', 'cart', 'product_id', 'products', 'id', 'RESTRICT', 'RESTRICT');
        $this->createIndex('index-cart-created_by', 'cart', 'created_by');
        $this->addForeignKey('fkey-cart-created_by', 'cart', 'created_by', 'user', 'id', 'RESTRICT', 'RESTRICT');
        $this->createIndex('index-cart-updated_by', 'cart', 'updated_by');
        $this->addForeignKey('fkey-cart-updated_by', 'cart', 'updated_by', 'user', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cart}}');
    }
}
