<?php

use Phinx\Migration\AbstractMigration;

class FamilyMigration extends AbstractMigration
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
		//Family migrations
		$persons = $this->table('familys');
		$persons->addColumn('famname', 'string', array('limit' => 20))
				 ->addColumn('address1', 'string', array('limit' => 255))		  
				 ->addColumn('address2', 'string', array('limit' => 255))			
				 ->addColumn('city', 'string', array('limit' => 255))
				 ->addColumn('state', 'string', array('limit' => 255))
				 ->addColumn('zip', 'string', array('limit' => 255))
				 ->addColumn('country', 'string', array('limit' => 255))
				 ->addColumn('famhomephone', 'string', array('limit' => 255))
				 ->addColumn('famworkphone', 'string', array('limit' => 255))
				 ->addColumn('famcellphone', 'string', array('limit' => 255))
				 ->addColumn('famemail', 'date')
				 ->addColumn('created', 'datetime')
				 ->addColumn('updated', 'datetime', array('null' => true))  
				 ->addColumn('enteredby', 'string', array('limit' => 255))
				 ->addColumn('editedby', 'string', array('limit' => 255))
				 ->addColumn('scancheck', 'string', array('limit' => 255))
				 ->addColumn('scancredit', 'string', array('limit' => 255))	
				 ->addColumn('sendnewsletter', 'boolean')
				 ->addColumn('datedeactivated', 'date')
				 ->addColumn('oktocanvass', 'boolean')
				 ->addColumn('canvasser', 'boolean')
				 ->addColumn('latitude', 'string', array('limit' => 60))
				 ->addColumn('longitude', 'string', array('limit' => 60))
				 ->addColumn('envelope', 'string', array('limit' => 60))		 
				 ->addColumn('weddingdate', 'string', array('limit' => 255))		 
				 ->addColumn('gender', 'string', array('limit' => 30))
				 ->addColumn('frienddate', 'datetime')               
				 ->save();
		 
		
		//
    //$this->dropTable('familys');
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
		//$this->dropTable('familys');
    }
}