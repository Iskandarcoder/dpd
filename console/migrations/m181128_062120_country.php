<?php

use yii\db\Migration;

/**
 * Class m181128_062120_country
 */
class m181128_062120_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer(),
            'number' => $this->string(500)->notNull(),
            'name' => $this->string(500)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062120_country cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062120_country cannot be reverted.\n";

        return false;
    }
    */
}
