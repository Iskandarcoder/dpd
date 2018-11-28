<?php

use yii\db\Migration;

/**
 * Class m181128_062156_org
 */
class m181128_062156_org extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%org}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181128_062156_org cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_062156_org cannot be reverted.\n";

        return false;
    }
    */
}
