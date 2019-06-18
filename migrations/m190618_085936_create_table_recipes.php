<?php

use yii\db\Migration;

/**
 * Class m190618_085936_create_table_recipe
 */
class m190618_085936_create_table_recipe extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->createTable('recipes', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('recipes');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190618_085936_create_table_recipe cannot be reverted.\n";

        return false;
    }
    */
}
