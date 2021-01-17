<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%site_links}}`.
 */
class m200325_063608_create_site_links_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%site_links}}', [
            'id' => $this->primaryKey(),
            'link_id' => $this->integer()->notNull(),
            'url' => $this->string()->notNull()
        ], $tableOptions);

        $this->createIndex('index-site_links-link_id', 'site_links', 'link_id');
        $this->addForeignKey('fkey-site_links-link_id', 'site_links', 'link_id', 'links', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%site_links}}');
    }
}
