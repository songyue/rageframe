<?php

use yii\db\Migration;

class m170807_012354_member_auth extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%member_auth}}', [
            'id' => 'int(10) NOT NULL AUTO_INCREMENT',
            'member_id' => 'int(10) NULL',
            'source' => 'varchar(255) NULL',
            'source_id' => 'varchar(255) NULL',
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户_第三方登录'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%member_auth}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

