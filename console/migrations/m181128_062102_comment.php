<?php

use yii\db\Migration;

/**
 * Class m181128_062102_comment
 */
class m181128_062102_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'doc_id' => $this->integer(),
            'doc_id' => $this->integer(),
            'user_id' => $this->integer(),
            'text' => $this->text(),
            'date' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062102_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062102_comment cannot be reverted.\n";

        return false;
    }
    */
}
