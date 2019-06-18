<?php

use yii\db\Migration;

/**
 * Class m190618_100649_create_table_ingredients
 */
class m190618_100649_create_table_ingredients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('ingredients', [
			'id' => $this->primaryKey(),
			'title' => $this->string(),
		]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ingredients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190618_100649_create_table_ingredients cannot be reverted.\n";

        return false;
    }
    */
}
