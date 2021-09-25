<?php

use yii\db\Migration;

/**
 * Class m210925_085315_insert_news_items
 */
class m210925_085315_insert_news_items extends Migration
{
    public $table = 'news';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert($this->table, [
            'id' => 1,
            'description' => 'subtotal, longeing, parmigiano, phosphatide, understandably, fillagreed, cervix, axile, animalizing, videodiscs',
            'date' => '2021-09-25 11:50:01',
        ]);

        $this->insert($this->table, [
            'id' => 2,
            'description' => 'acidifying, catalogued, overgird, paddywack, execute, animalist, dogedoms, outserving, unplaced, greatcoats',
            'date' => '2021-09-25 11:50:02',
        ]);

        $this->insert($this->table, [
            'id' => 3,
            'description' => 'gimmickry, flinders, apimanias, crookednesses, reshone, roselles, cantilevered, bobsledded, declarer, thermals',
            'date' => '2021-09-25 11:50:03',
        ]);

        $this->insert($this->table, [
            'id' => 4,
            'description' => 'unbowing, craped, weariness, trebbianos, bookers, provokingly, adulate, zingers, impower, kalewife',
            'date' => '2021-09-25 11:50:04',
        ]);

        $this->insert($this->table, [
            'id' => 5,
            'description' => 'geophone, lungworms, jumpsuits, isinglasses, isoplethic, keets, reclames, potbelly, costless, flaggers',
            'date' => '2021-09-25 11:50:05',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete($this->table, ['in', 'id', [
            '1',
            '2',
            '3',
            '4',
            '5'
        ]]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210925_085315_insert_news_items cannot be reverted.\n";

        return false;
    }
    */
}
