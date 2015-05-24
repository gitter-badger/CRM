<?php

use Phinx\Migration\AbstractMigration;

class UserMigration extends AbstractMigration
{
    /**
     * User migration.
     * Base table for users, 
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
		//
		 $users = $this->table('users');
         $users->addColumn('username', 'string', array('limit' => 20))
			  ->addColumn('email', 'string', array('limit' => 100))
              ->addColumn('password', 'string', array('limit' => 40))
              ->addColumn('password_salt', 'string', array('limit' => 40))              
              ->addColumn('first_name', 'string', array('limit' => 30))
              ->addColumn('last_name', 'string', array('limit' => 30))
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime', array('null' => true))
              ->addIndex(array('username', 'email'), array('unique' => true))
              ->save();
			 // $this->dropTable('users1');
		
		
		//
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
		
    }
}