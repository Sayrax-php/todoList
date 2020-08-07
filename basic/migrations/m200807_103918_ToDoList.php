<?php

use yii\db\Migration;

/**
 * Class m200807_103918_ToDoList
 */
class m200807_103918_ToDoList extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ToDoList', [
            'ID' => $this->primaryKey(),
            'Date' => $this->date()->NotNull(),
            'Time' => $this->time(),
            'Description' => $this->text()->notNull(),
            'Place' => $this->string(50),
            'Urgency'=> $this->integer(),
            'Stage' => $this->string(20)->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ToDoList');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200807_103918_ToDoList cannot be reverted.\n";

        return false;
    }
    */
}
