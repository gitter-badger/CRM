<?php
use Illuminate\Database\Capsule\Manager as Capsule;  
$capsule = new Capsule; 
//Database configuration.
$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'churchinfo',
    'username'  => 'churchinfo',
    'password'  => 'churchinfo',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));
$capsule->bootEloquent();
//$con = $capsule->getConector();
//
// Create the Books model 
class User extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
	protected $table = 'users';
}
//Family
class Family extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
	protected $table = 'familys';
	//Scopes custom functions in model.
	 public function scopeLast10edited($query)
    {
       // return $query->where('fam_ID', '>', 1)->take(10)->orderBy('fam_DateLastEdited', 'desc');
		 return $query->take(10)->orderBy('updated', 'desc');
    }
	//New families
	 public function scopeNewfamily($query)
    {
       // return $query->where('fam_ID', '>', 1)->take(10)->orderBy('fam_DateLastEdited', 'desc');
		 return $query->where('updated', '=', null)->take(10)->orderBy('updated', 'desc');
    }
	//Family count
	 
	
	//
}
//Person
class Person extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
	//protected $table = 'person_per';
	protected $table = 'persons';
	//Scopes
	 public function scopeLast10edited($query)
    {
       // return $query->where('fam_ID', '>', 1)->take(10)->orderBy('fam_DateLastEdited', 'desc');
		 return $query->take(10)->orderBy('created', 'desc');
    }
	
	//New families
	 public function scopeNewperson($query)
    {
       // return $query->where('fam_ID', '>', 1)->take(10)->orderBy('fam_DateLastEdited', 'desc');
		 return $query->where('updated', '=', null)->take(10)->orderBy('created', 'desc');
    }
	//Per adult Gender
	 public function scopeAdultmen($query)
    {
       return $query->where('gender', '=', '1');
	   //->where('per_fmr_ID', '=', '1');
    }
	//
	public function scopeAdultwomen($query)
    {
       return $query->where('gender', '=', '2');
	   //->where('per_fmr_ID', '=', '2');
    }
	//boys
	public function scopeBoys($query)
    {
       return $query->where('gender', '=', '1');
	   //->where('per_fmr_ID', '!=', '2')->where('per_fmr_ID', '!=', '1');
    }
	//Girls
	public function scopeGirls($query)
    {
       return $query->where('gender', '=', '2');
	   //->where('per_fmr_ID', '!=', '2')->where('per_fmr_ID', '!=', '1');
    }
	
	//
}
//
class Group extends Illuminate\Database\Eloquent\Model {
    public $timestamps = false;
	protected $table = 'group_grp';
		
	}
//Functions.