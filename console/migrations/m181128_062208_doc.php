<?php

use yii\db\Migration;

/**
 * Class m181128_062208_doc
 */
class m181128_062208_doc extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%doc}}', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer(),
            'country_id' => $this->integer(),
            'g_category_id' => $this->integer(),
            'category_doc_id' => $this->integer(),
            'number_doc' => $this->string(500)->notNull(),
            'name' => $this->text()->notNull(),
            'p_date' => $this->date(),
            'p_place' => $this->string(500)->notNull(),
            'effective_date' => $this->date(),
            'effective_text' => $this->text(),
            'loss_date' => $this->date(),
            'denonsatsiya' => $this->text(),
            'status' => $this->integer()->defaultValue(1)->notNull(),
            'in_status' => $this->integer()->defaultValue(1)->notNull(),
            'members' => $this->string(500)->notNull(),
            'description' => $this->text()->notNull(),
            'doc_text' => $this->text(),
            'file_doc' => $this->text(),
            'reg_date' => $this->date(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062208_doc cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062208_doc cannot be reverted.\n";

        return false;
    }
    */
}
