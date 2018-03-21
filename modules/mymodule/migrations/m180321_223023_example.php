<?php
use yii\db\Migration;

/**
 * Class m180321_223023_example
 *
 * yii migrate --migrationPath=@app/modules/mymodule/migrations
 */
class m180321_223023_example extends Migration
{
    public $engine = 'ENGINE=MyISAM DEFAULT CHARSET=utf8';

    public function up()
    {
        $this->createTable('{{%gr_advantage}}', [
            'id' => $this->primaryKey(),
            'preview' => $this->string(),
            'title' =>$this->string(),
            'order_num' => $this->integer(),
            'caption' => $this->string(),
            'status' => $this->boolean()->defaultValue(true)
        ], $this->engine);
    }

    public function down()
    {
        $this->dropTable('{{%gr_advantage}}');
        echo "m180321_223023_example cannot be reverted.\n";

        return false;
    }
}
