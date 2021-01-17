<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m200320_182619_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'category_id' => $this->integer()->notNull(),
            'price' => $this->integer()->notNull(),
            'main_photo' => $this->string()->notNull(),
            'description_ru' => $this->text()->notNull(),
            'description_uz' => $this->text()->notNull(),
            'description_en' => $this->text()->notNull(),
            'status' => $this->integer()->defaultValue(0),
            'view' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->createIndex('index-products-category_id', 'products', 'category_id');
        $this->addForeignKey('fkey-products-category_id', 'products', 'category_id', 'categories', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
