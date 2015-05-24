<?php 

//Functions from main controller.
    // Create a route for the home page
	$app->get("/", $authenticate($app), function () use ($app) {
    //$app->get('/', function () use ($app) {
	    //Variables
        $rsLastFamilies = Family::last10edited()->get();
		$rsNewFamilies = Family::newfamily()->get();
		$rsLastPeople = Person::last10edited()->get();
		$rsNewPeople = Person::newperson()->get();
		$rsAdultsMaleGender = Person::adultmen()->count();
		$rsAdultsWomenGender = Person::adultwomen()->count();
		$rsboys = Person::Boys()->count();
		$rsgirls = Person::Girls()->count();
		$families = Family::all()->count();
		$members = Person::where('per_cls_ID', '=', 2)->count();
		$sundayschoolclass = Group::where('grp_Type', '=', 4)->count();
		//
		//$sSQL = "select * from family_fam order by fam_DateLastEdited desc  LIMIT 10;";
		//$rsLastFamilies = RunQuery($sSQL);
		
		//echo $rsAdultsMaleGender;die;
		//var_dump($rsNewFamilies);die;
		//passing variables to View variablename => value,
        $app->view()->setData(array(
		'rsLastFamilies' => $rsLastFamilies,
		'rsNewFamilies' => $rsNewFamilies,
		'rsLastPeople' => $rsLastPeople,
		'rsNewPeople' => $rsNewPeople,
		'rsAdultsMaleGender' => $rsAdultsMaleGender,
		'rsAdultsWomenGender' => $rsAdultsWomenGender,
		'rsboys' => $rsboys,
		'rsgirls' => $rsgirls,
		'families' => $families,
		'members' => $members,
		'sundayschoolclass' => $sundayschoolclass
		));
        //load view
        $app->render('home.php');
            
    });
	
	//Person EDITOR.
	//
	 $app->get('/Addperson', function () use ($app) {
        
        //$app->view()->setData(array('foo' => 'bar'));
        //General header
        $app->render('partials/header.php');
		//Each content page should be differente.
		$app->render('person.php');
		
		//General footer
		$app->render('partials/footer.php');
            
    });
//Add person location with post.
//post route
	$app->post('/Addperson', function () use ($app) {
    //Create book	
	$name =  $app->request->post('name');
	//Return JSON headers.
	$app->response->headers->set('Content-Type', 'application/json');
	
	$user = new Person();
	//
	$user->per_Title = $app->request->post('Title');
	$user->per_FirstName = $app->request->post('FirstName');
	$user->per_MiddleName = $app->request->post('MiddleName');
	$user->per_LastName = $app->request->post('LastName');
	//$user->per_Suffix = 'xxx'; Suffix
	$user->per_Address1 = $app->request->post('per_Address1');
	$user->per_Address2 = $app->request->post('per_Address2');
	$user->per_City = $app->request->post('per_City');
	$user->per_State = $app->request->post('per_State');
	$user->per_Zip = $app->request->post('per_Zip');
	$user->per_Country = $app->request->post('per_Country');
	$user->per_HomePhone = $app->request->post('per_HomePhone');
	$user->per_WorkPhone = $app->request->post('per_WorkPhone');
	$user->per_CellPhone = $app->request->post('per_CellPhone');
	$user->per_Email = $app->request->post('per_Email');
	$user->per_WorkEmail = $app->request->post('per_WorkEmail');
	//$user->per_BirthMonth = $app->request->post('BirthMonth');
	$user->per_BirthMonth = 2013;
	$user->per_BirthDay = $app->request->post('BirthDay');
	$user->per_BirthYear = $app->request->post('BirthYear');
	$user->per_MembershipDate = $app->request->post('per_MembershipDate');
	$user->per_Gender = $app->request->post('Gender');
	//$user->per_fmr_ID = $app->request->post('per_fmr_ID');
	$user->per_fmr_ID = 1;
	//$user->per_cls_ID = $app->request->post('per_cls_ID');
	$user->per_cls_ID = 1;
	
	//$user->per_fam_ID = $app->request->post('per_fam_ID');
	$user->per_fam_ID = 1;
	//$user->per_Envelope = 'xxx';
	//$user->per_DateLastEdited = 'xxx';
	//$user->per_DateEntered = 'xxx';
	//$user->per_EnteredBy = $app->request->post('per_EnteredBy');
	$user->per_EnteredBy = 1;
	$user->per_EditedBy = $app->request->post('per_EditedBy');
	//$user->per_FriendDate = 'xxx';
	//$user->per_Flags = $app->request->post('per_Flags');
	$user->per_Flags = 1;
	//$user->name = 'xxx';
	
	/*
	per_Title
	per_FirstName
	per_MiddleName
	per_LastName
	per_Suffix
	per_Address1
	per_Address2
	per_City
	per_State
	per_Zip
	per_Country
	per_HomePhone
	per_WorkPhone
	per_CellPhone
	per_Email
	per_WorkEmail
	per_BirthMonth
	per_BirthDay
	per_BirthYear
	per_MembershipDate
	per_Gender
	per_fmr_ID
	per_cls_ID
	per_fam_ID
	per_Envelope
	per_DateLastEdited
	per_DateEntered
	per_EnteredBy
	per_EditedBy
	per_FriendDate
	per_Flags*/
	
	//reponse
	//$user->save();
	
	if($user->save()){
	  $arr = array ('result'=>1,'message'=>'The Record was created succesfully');
	}else{
		 $arr = array ('result'=>0,'message'=>'There was an error creating the record, pleas try again');
	}

    echo json_encode($arr); 
	
	});	
	
	
	
	//
	 $app->get('/user', function () use ($app) {
        
        //$app->view()->setData(array('foo' => 'bar'));
        
        $app->render('user.php');
            
    });
	
	//
	 $app->get('/family', function () use ($app) {
        
        $app->view()->setData(array('foo' => 'variable pass to view'));
        
        $app->render('family.php');
            
    });
	
////the last line it to execute the app

$app->run();

//DO NOT CLOSE PHP TAG