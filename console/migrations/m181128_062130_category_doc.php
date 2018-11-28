<?php

use yii\db\Migration;

/**
 * Class m181128_062130_category_doc
 */
class m181128_062130_category_doc extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category_doc}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(500)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062130_category_doc cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062130_category_doc cannot be reverted.\n";

        return false;
    }
    */
}
