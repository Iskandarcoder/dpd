<?php

use yii\db\Migration;

/**
 * Class m181128_062143_g_category
 */
class m181128_062143_g_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%g_category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(500)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062143_g_category cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062143_g_category cannot be reverted.\n";

        return false;
    }
    */
}
