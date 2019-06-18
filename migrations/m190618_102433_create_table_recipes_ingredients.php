<?php

use yii\db\Migration;

/**
 * Class m190618_102433_create_table_recipes_ingredients
 */
class m190618_102433_create_table_recipes_ingredients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		// add  table `recipes_ingredients`
		$this->createTable('recipes_ingredients', [
			'recipe_id' => $this->integer(),
			'ingredient_id' => $this->integer(),
			'amount' => $this->decimal(5,2),
			'unit_id' => $this->integer(),
		]);

		// add foreign key for table `recipes`
        $this->addForeignKey(
            'fk-recipes_ingredients-recipe_id',
            'recipes_ingredients',
            'recipe_id',
            'recipes',
            'id'
        );
		// add foreign key for table `ingredients`
        $this->addForeignKey(
            'fk-recipes_ingredients-ingredient_id',
            'recipes_ingredients',
            'ingredient_id',
            'ingredients',
            'id'
        );
		// add foreign key for table `units`
		$this->addForeignKey(
			'fk-recipes_ingredients-unit_id',
			'recipes_ingredients',
			'unit_id',
			'units',
			'id'
		);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		// drops foreign key for table `recipes`
		$this->dropForeignKey(
            'fk-recipes_ingredients-recipe_id',
            'recipes_ingredients'
        );
		
		// drops foreign key for table `ingredients`
		$this->dropForeignKey(
            'fk-recipes_ingredients-ingredient_id',
            'recipes_ingredients'
        );
		
		// drops foreign key for table `units`
		$this->dropForeignKey(
			'fk-recipes_ingredients-unit_id',
			'recipes_ingredients'
		);
		
		// drops table `recipes_ingredients`
		$this->dropTable('recipes_ingredients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190618_102433_create_table_recipes_ingredients cannot be reverted.\n";

        return false;
    }
    */
}
