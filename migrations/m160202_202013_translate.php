<?php

use yii\db\Schema;
use yii\db\Migration;

class m160202_202013_translate extends Migration
{
    public function safeUp()
    {
        $this->execute("
            CREATE TABLE source_message (
                id INTEGER PRIMARY KEY AUTO_INCREMENT,
                category VARCHAR(32),
                message TEXT
            );

            CREATE TABLE message (
                id INTEGER,
                language VARCHAR(16),
                translation TEXT,
                PRIMARY KEY (id, language),
                CONSTRAINT fk_message_source_message FOREIGN KEY (id)
                    REFERENCES source_message (id) ON DELETE CASCADE ON UPDATE RESTRICT
            );
        ");
    }

    public function safeDown()
    {
        $this->dropTable('{{%message}}');
        $this->dropTable('{{%source_message}}');
    }
}
