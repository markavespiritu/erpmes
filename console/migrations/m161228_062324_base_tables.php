<?php

use yii\db\Migration;

class m161228_062324_base_tables extends Migration
{
    public function up()
    {
        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
        if (!in_array('accomplishment', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%accomplishment}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'project_id' => 'INT(255) NULL',
                'quarter' => 'ENUM(\'Q1\',\'Q2\',\'Q3\',\'Q4\') NULL',
                'physical' => 'DOUBLE NULL',
                'financial' => 'DOUBLE NULL',
                'man_days' => 'DOUBLE NULL',
                'cash_disbursed' => 'DOUBLE NULL',
                'accounts_payable' => 'DOUBLE NULL',
                'expenditure' => 'DOUBLE NULL',
                'releases' => 'DOUBLE NULL',
                'obligation' => 'DOUBLE NULL',
                'remarks' => 'TEXT NULL',
                'date_submitted' => 'DATETIME NULL',
                'submitted_by' => 'VARCHAR(200) NULL',
                'date_saved' => 'DATETIME NULL',
                'saved_by' => 'VARCHAR(200) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('acknowledgement', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%acknowledgement}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'agency_id' => 'INT(255) NULL',
                'type' => 'ENUM(\'Accomplishment\',\'Monitoring Plan\',\'Project Exception\') NULL',
                'quarter' => 'ENUM(\'Q1\',\'Q2\',\'Q3\',\'Q4\') NULL',
                'findings' => 'TEXT NULL',
                'action' => 'TEXT NULL',
                'status' => 'VARCHAR(200) NULL',
                'year' => 'INT(5) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('agency', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%agency}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'agency_type_id' => 'INT(255) NULL',
                'code' => 'VARCHAR(200) NULL',
                'head' => 'VARCHAR(200) NULL',
                'designation' => 'VARCHAR(300) NULL',
                'name' => 'VARCHAR(300) NULL',
                'location' => 'VARCHAR(300) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('agency_type', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%agency_type}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'abbreviation' => 'VARCHAR(200) NULL',
                'description' => 'VARCHAR(200) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('due_date', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%due_date}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'name' => 'VARCHAR(200) NULL',
                'due_date' => 'DATE NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('fund_source', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%fund_source}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'fund_source_type_id' => 'INT(255) NULL',
                'code' => 'VARCHAR(200) NULL',
                'description' => 'TEXT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('fund_source_type', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%fund_source_type}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'type' => 'VARCHAR(200) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('period', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%period}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'name' => 'VARCHAR(200) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('project', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%project}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'agency_id' => 'INT(255) NULL',
                'fund_source_id' => 'INT(255) NULL',
                'sector_id' => 'INT(255) NULL',
                'sub_sector_id' => 'INT(255) NULL',
                'period_id' => 'INT(255) NULL',
                'typhoon_id' => 'INT(255) NULL',
                'region_id' => 'VARCHAR(2) NULL',
                'province_id' => 'VARCHAR(2) NULL',
                'district_id' => 'VARCHAR(2) NULL',
                'citymun_id' => 'VARCHAR(2) NULL',
                'program' => 'TEXT NULL',
                'unit_of_measure' => 'VARCHAR(500) NULL',
                'year_enrolled' => 'INT(5) NULL',
                'data_type' => 'VARCHAR(200) NULL',
                'implementation_date' => 'VARCHAR(200) NULL',
                'objective' => 'TEXT NULL',
                'expected_result' => 'INT(200) NULL',
                'actual_result' => 'INT(200) NULL',
                'status' => 'VARCHAR(200) NULL',
                'enrolled_by' => 'INT(255) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('sector', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%sector}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'name' => 'TEXT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('sub_sector', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%sub_sector}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'sector_id' => 'INT(255) NULL',
                'name' => 'TEXT NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('target', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%target}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'project_id' => 'INT(255) NULL',
                'quarter' => 'ENUM(\'Q1\',\'Q2\',\'Q3\',\'Q4\') NULL',
                'physical' => 'DOUBLE NULL',
                'financial' => 'DOUBLE NULL',
                'man_days' => 'DOUBLE NULL',
                'status' => 'VARCHAR(200) NULL',
                'date_submitted' => 'DATETIME NULL',
                'submitted_by' => 'VARCHAR(200) NULL',
            ], $tableOptions_mysql);
        }
        }
         
        /* MYSQL */
        if (!in_array('typhoon', $tables))  { 
        if ($dbType == "mysql") {
            $this->createTable('{{%typhoon}}', [
                'id' => 'INT(255) NOT NULL AUTO_INCREMENT',
                0 => 'PRIMARY KEY (`id`)',
                'name' => 'VARCHAR(200) NULL',
                'year' => 'INT(5) NULL',
            ], $tableOptions_mysql);
        }
        }
         
         
        $this->createIndex('idx_project_id_0341_00','accomplishment','project_id',0);
        $this->createIndex('idx_agency_id_0391_01','acknowledgement','agency_id',0);
        $this->createIndex('idx_agency_type_id_0451_02','agency','agency_type_id',0);
        $this->createIndex('idx_agency_id_0721_03','project','agency_id',0);
        $this->createIndex('idx_period_id_0721_04','project','period_id',0);
        $this->createIndex('idx_fund_source_id_0721_05','project','fund_source_id',0);
        $this->createIndex('idx_sector_id_0721_06','project','sector_id',0);
        $this->createIndex('idx_sub_sector_id_0721_07','project','sub_sector_id',0);
        $this->createIndex('idx_typhoon_id_0721_08','project','typhoon_id',0);
        $this->createIndex('idx_sector_id_0811_09','sub_sector','sector_id',0);
        $this->createIndex('idx_project_id_0851_10','target','project_id',0);
         
        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_project_0331_00','{{%accomplishment}}', 'project_id', '{{%project}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_agency_0381_01','{{%acknowledgement}}', 'agency_id', '{{%agency}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_agency_type_0441_02','{{%agency}}', 'agency_type_id', '{{%agency_type}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_agency_0711_03','{{%project}}', 'agency_id', '{{%agency}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_fund_source_0711_04','{{%project}}', 'fund_source_id', '{{%fund_source}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_period_0711_05','{{%project}}', 'period_id', '{{%period}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_sector_0711_06','{{%project}}', 'sector_id', '{{%sector}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_sub_sector_0711_07','{{%project}}', 'sub_sector_id', '{{%sub_sector}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_typhoon_0711_08','{{%project}}', 'typhoon_id', '{{%typhoon}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_sector_0801_09','{{%sub_sector}}', 'sector_id', '{{%sector}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->addForeignKey('fk_project_0851_010','{{%target}}', 'project_id', '{{%project}}', 'id', 'CASCADE', 'NO ACTION' );
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `accomplishment`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `acknowledgement`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `agency`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `agency_type`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `due_date`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `fund_source`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `fund_source_type`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `period`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `project`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `sector`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `sub_sector`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `target`');
        $this->execute('SET foreign_key_checks = 1;');
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `typhoon`');
        $this->execute('SET foreign_key_checks = 1;');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
