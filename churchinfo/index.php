<?php 
//Include composer autoload.
include('vendor/autoload.php');
//
include('models/Eloquent.php');
//phpinfo();
/*$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});*/
//
//Slim Framework Instance params
//echo "Funciona";
 $app = new \Slim\Slim(array(
    'debug' => true,
    'templates.path' => './views'
));
//////////////////////////////////////
use Slim\Middleware\SessionCookie;
$app->add(new SessionCookie(array('secret' => 'myappsecret')));
//Autehticate
$authenticate = function ($app) {
    return function () use ($app) {
        if (!isset($_SESSION['user'])) {
            $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
            $app->flash('error', 'Login required');
            $app->redirect('/login');
        }
    };
};
$app->hook('slim.before.dispatch', function() use ($app) { 
   $user = null;
   if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
   }
   $app->view()->setData('user', $user);
});
$app->get("/logout", function () use ($app) {
   unset($_SESSION['user']);
   $app->view()->setData('user', null);
   $app->render('templates/logout.php');
});
$app->get("/login", function () use ($app) {
   $flash = $app->view()->getData('flash');
   $error = '';
   if (isset($flash['error'])) {
      $error = $flash['error'];
   }
   $urlRedirect = '/';
   if ($app->request()->get('r') && $app->request()->get('r') != '/logout' && $app->request()->get('r') != '/login') {
      $_SESSION['urlRedirect'] = $app->request()->get('r');
   }
   if (isset($_SESSION['urlRedirect'])) {
      $urlRedirect = $_SESSION['urlRedirect'];
   }
   $email_value = $email_error = $password_error = '';
   if (isset($flash['email'])) {
      $email_value = $flash['email'];
   }
   if (isset($flash['errors']['email'])) {
      $email_error = $flash['errors']['email'];
   }
   if (isset($flash['errors']['password'])) {
      $password_error = $flash['errors']['password'];
   }
   $app->render('templates/login.php', array('error' => $error, 'email_value' => $email_value, 'email_error' => $email_error, 'password_error' => $password_error, 'urlRedirect' => $urlRedirect));
});


$app->post("/login", function () use ($app) {
    $email = $app->request()->post('email');
    $password = $app->request()->post('password');
    $errors = array();
	//Query user if exist in database:
	 $usuario = User::where('username', '=', $email)->get();
	 $exists = User::where('username', '=', $email)->count();	
	 //
				if ($exists == 0) {
					$errors['email'] = "User is not found";
				}
				if($exists != 0){ 	
				 $hashed_password = $usuario[0]['password'];
	            $verificacin = crypt($password, $hashed_password);
				
				if ($verificacin != $hashed_password ) {
					$app->flash('email', $email);
					$errors['password'] = "Password does not match.";
				}
				if (count($errors) > 0) {
					$app->flash('errors', $errors);
					$app->redirect('/login');
				}
				$_SESSION['user'] = $email;
				if (isset($_SESSION['urlRedirect'])) {
				   $tmp = $_SESSION['urlRedirect'];
				   unset($_SESSION['urlRedirect']);
				   $app->redirect($tmp);
				}
				
		}
    $app->redirect('/');
});
///////Base 64 generator
 $app->get('/base64', function () use ($app) {
	 $username = "test";
	 $user_input = "mypassword";
	 $usuario = User::where('usr_UserName', '=', $username)->get();
	echo   $usuario2 = User::where('usr_UserName', '=', $username)->count();die;
	// echo base64_encode($username);
//echo $hashed_password =  crypt('mypassword');
//$hashed_password = '$1$2YpWy7bf$TQCQKxjrGdykkEn3/z7Vg1';
//$hashed_password = '$1$2YpWy7bf$TQCQKxjrGdykkEn3/z7Vg1';
$hashed_password = $usuario[0]['usr_Password'];
$verificacin = crypt($user_input, $hashed_password);
if($verificacin == $hashed_password ){
	echo "Esta bien";
}else{
	echo "Esta Mal";
}
//
	 
	 });
/////////////Create user in system//////////////	 
$app->get('/createuser', function () use ($app) {	
//
$usuario = "admin";

$user = new User;
//$user->usr_per_ID = '3';
$user->username = $usuario;
$user->email = 'mail@email.com';
$user->password = crypt('123456789qq');
$user->first_name = "Jhon";
$user->last_name = "Doe";
//$user->usr_NeedPasswordChange = '0';

/*$user->usr_EditRecords = '1';
$user->usr_DeleteRecords = '1';
$user->usr_MenuOptions = '1';
$user->usr_ManageGroups = '1';
$user->usr_Finance = '1';
$user->usr_Communication = '1';
$user->usr_Notes = '1';
$user->usr_Admin = '1';
$user->usr_showPledges = '1';
$user->usr_showPayments = '1';
$usuario = "prueba4";*/
//$user->usr_UserName = $usuario;
//$user->usr_EditSelf = '1';
//
if(!User::where('username', '=', $usuario)->exists()){
   // user found
   $user->save();
   //
   echo "User created succesfully";
}else{
	
	echo "the user already exists";
}
}); 
//CREATE DUMMY USER DATA

$app->get('/dummy', function () use ($app) {
	$faker = Faker\Factory::create();
	 echo "Funciona";
	
	 
		
		
		for ($i=0; $i < 5; $i++) {
				$person = new Person;
				$person->title = $faker->title($gender = null|'male'|'female');
				$person->first_name = $faker->firstName;
				//$person->middle_name = "Martin";
				$person->last_name = $faker->lastName;
				$person->address1 = $faker->address;
				$person->address2 = $faker->address;
				$person->city = $faker->city ;
				$person->state = $faker->state;
				$person->zip = $faker->postcode;
				$person->country = $faker->country;
				$person->homephone = $faker->phoneNumber;	
				$person->workphone = $faker->phoneNumber;	
				$person->cellphone = $faker->phoneNumber; 
				$person->peremail = $faker->email;
				$person->workemail = $faker->email;
				$person->gender = rand(1,2);
			
				$person->save();
		}
	 //
	 
	 });

//Zonas protegidas.
$app->get("/private/about", $authenticate($app), function () use ($app) {
   $app->render('templates/privateAbout.php');
});
///////////////////////////////////////////////////////////////////////////////////////////
//Slim framework ROUTES
 //Controller with all ROUTES   
require 'controllers/MainController.php';
//END OF FILE
/////////////////////////////////////////////

//
//$app->run();

?>