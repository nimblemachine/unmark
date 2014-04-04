<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Mark_Title extends Plain_Migration
{

    public function __construct()
    {
        parent::__construct();
        parent::checkForTables('users_to_marks');
    }

    public function up()
    {
        $this->db->query("ALTER TABLE `users_to_marks` ADD COLUMN `title` varchar(150) DEFAULT NULL COMMENT 'The user title for the mark.' AFTER `active`");
    }

    public function down()
    {
        parent::checkForColumns('title', 'users_to_marks');
        $this->db->query("ALTER TABLE `users_to_marks` DROP COLUMN `title`");
    }
}