<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m200704_043838_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string()->notNull(),
            'title_en' => $this->string()->notNull(),
            'photo' => $this->string(),
            'date' => $this->integer()->notNull(),
            'description_ru' => $this->text()->notNull(),
            'description_uz' => $this->text()->notNull(),
            'description_en' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
