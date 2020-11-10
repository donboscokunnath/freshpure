<?php

use yii\db\Migration;

/**
 * Class m200908_112003_investigations_table_changes
 */
class m200908_112003_investigations_table_changes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // $this->execute("ALTER TABLE `investigations` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);");
        // $this->execute("CREATE TABLE admin_details (
        //   id int(11) NOT NULL,
        //   admin_id int(11) NOT NULL COMMENT 'admin_id maps with id in login table',
        //   name varchar(150) NOT NULL,
        //   email varchar(250) NOT NULL,
        //   phone_number varchar(20) NOT NULL,
        //   address longtext NOT NULL,
        //   role_id int(11) NOT NULL,
        //   status tinyint(4) NOT NULL
        // ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        // ");
        // $this->execute("ALTER TABLE admin_details ADD PRIMARY KEY (id);");
        // $this->execute("ALTER TABLE admin_details MODIFY id int(11) NOT NULL AUTO_INCREMENT; COMMIT;");
        // $this->execute("CREATE TABLE login (
        //              id int(11) NOT NULL AUTO_INCREMENT,
        //              email varchar(250) NOT NULL,
        //              password varchar(250) NOT NULL,
        //              type tinyint(4) NOT NULL COMMENT '1:super admin,2:sub super admin,3:hospital admin/Diagnostic Admin',
        //              PRIMARY KEY (id)
        //             ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='1:super admin,2:sub super admin,3:hospital admin/Diagnostic Admin'");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("ALTER TABLE `investigations` CHANGE `id` `id` INT(11) NOT NULL;");
        $this->execute("ALTER TABLE `investigations` DROP PRIMARY KEY;");
        $this->execute("DROP TABLE `admin_details`");
        $this->execute("DROP TABLE `login`");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200908_112003_investigations_table_changes cannot be reverted.\n";

        return false;
    }
    */
}
