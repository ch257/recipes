<?php

use yii\db\Migration;

/**
 * Class m190618_102203_create_table_units
 */
class m190618_102203_create_table_units extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		// add table `units`
		$this->createTable('units',[
			'id' => $this->primaryKey(),
			'short_title' => $this->string(),
			'title' => $this->string(),
		]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropTable('units');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190618_102203_create_table_units cannot be reverted.\n";

        return false;
    }
    */
}
