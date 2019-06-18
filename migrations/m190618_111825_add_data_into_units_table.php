<?php

use yii\db\Migration;

/**
 * Class m190618_111825_add_data_into_units_table
 */
class m190618_111825_add_data_into_units_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->execute('
			insert into units
			  (short_title, title)
			values
			  (\'г\', \'грамм\'),
			  (\'кг\', \'килограмм\'),
			  (\'мл\', \'миллилитр\'),
			  (\'л\', \'литр\'),
			  (\'ч.л.\', \'чайная ложка\'),
			  (\'д.л.\', \'десертная ложка\'),
			  (\'ст.л.\', \'столовая ложка\'),
			  (\'ст.\', \'стакан 200 мл\'),
			  (\'шт\', \'штука\'),
			  (\'ч.\', \'часть\');
		');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `units`
		$this->dropForeignKey(
			'fk-recipes_ingredients-unit_id',
			'recipes_ingredients'
		);
		
		$this->execute('truncate table units;');
		
		// add foreign key for table `units`
		$this->addForeignKey(
			'fk-recipes_ingredients-unit_id',
			'recipes_ingredients',
			'unit_id',
			'units',
			'id'
		);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190618_111825_add_data_into_units_table cannot be reverted.\n";

        return false;
    }
    */
}
