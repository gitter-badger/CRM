<?php

use Phinx\Migration\AbstractMigration;

class PersonMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
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
		$persons = $this->table('persons');
		$persons->addColumn('title', 'string', array('limit' => 20))
		 ->addColumn('first_name', 'string', array('limit' => 255))		  
		 ->addColumn('middle_name', 'string', array('limit' => 255))
		 ->addColumn('last_name', 'string', array('limit' => 255))
		 ->addColumn('address1', 'string', array('limit' => 255))
		 ->addColumn('address2', 'string', array('limit' => 255))
		 ->addColumn('city', 'string', array('limit' => 255))
		 ->addColumn('state', 'string', array('limit' => 255))
		 ->addColumn('zip', 'string', array('limit' => 255))
		 ->addColumn('country', 'string', array('limit' => 255))
		 ->addColumn('homephone', 'string', array('limit' => 255))
		 ->addColumn('workphone', 'string', array('limit' => 255))
		 ->addColumn('cellphone', 'string', array('limit' => 255))
		 ->addColumn('peremail', 'string', array('limit' => 255))
		 ->addColumn('workemail', 'string', array('limit' => 255))
		 ->addColumn('birthmonth', 'string', array('limit' => 255))
		 ->addColumn('birthday', 'string', array('limit' => 30))
		 ->addColumn('birthyear', 'string', array('limit' => 30))
		 ->addColumn('clsid', 'string', array('limit' => 30))
		 ->addColumn('membershipdate', 'datetime')
		 ->addColumn('gender', 'string', array('limit' => 30))		 
		 ->addColumn('frienddate', 'datetime')            
         ->addColumn('created', 'datetime')
         ->addColumn('updated', 'datetime', array('null' => true))         
         ->save();
		 //$this->dropTable('persons');
		//
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
		//$this->dropTable('persons');
    }
}