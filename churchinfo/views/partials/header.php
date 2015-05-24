
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		    <!-- jQuery -->
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="http://demo2.churchwebcrm.com/css/AdminLTE.css" />

    <!-- google font libraries -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"  />

    <!-- Ionicons -->
    <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

        <title>ChurchInfo: Person Editor</title>

	</head>
<body class="skin-blue">

    <script type="text/javascript" src="http://demo2.churchwebcrm.com/Include/jscalendar/calendar.js"></script>
    <script type="text/javascript" src="http://demo2.churchwebcrm.com/Include/jscalendar/lang/calendar-en.js"></script>

    <script language="javascript" type="text/javascript">

        // Popup Calendar stuff
        function selected(cal, date)
        {
            cal.sel.value = date; // update the date in the input field.
            if (cal.dateClicked)
                cal.callCloseHandler();
        }

        function closeHandler(cal)
        {
            cal.hide(); // hide the calendar
        }

        function showCalendar(id, format)
        {
            var el = document.getElementById(id);
            if (calendar != null)
            {
                calendar.hide();
            }
            else
            {
                var cal = new Calendar(false, null, selected, closeHandler);
                cal.weekNumbers = false;
                calendar = cal;                  // remember it in the global var
                cal.setRange(1900, 2070);        // min/max year allowed.
                cal.create();
            }
            calendar.setDateFormat(format);    // set the specified date format
            calendar.parseDate(el.value);      // try to parse the text in field
            calendar.sel = el;                 // inform it what input field we use
            calendar.showAtElement(el);        // show the calendar below it
            return false;
        }

        var MINUTE = 60 * 1000;
        var HOUR = 60 * MINUTE;
        var DAY = 24 * HOUR;
        var WEEK = 7 * DAY;

        function isDisabled(date)
        {
            var today = new Date();
            return (Math.abs(date.getTime() - today.getTime()) / DAY) > 10;
        }

        // Clear a field on the first focus
        var priorSelect = new Array();
        function ClearFieldOnce(sField) {
            if (priorSelect[sField.id]) {
                sField.select();
            } else {
                sField.value = "";
                priorSelect[sField.id] = true;
            }
        }

        function LimitTextSize(theTextArea,size) {
            if (theTextArea.value.length > size) {
                theTextArea.value = theTextArea.value.substr(0,size);
            }
        }

        function popUp(URL)
        {
            day = new Date();
            id = day.getTime();
            eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=yes,location=0,statusbar=0,menubar=0,resizable=yes,width=600,height=400,left = 100,top = 50');");
        }

    </script>


        <header class="header">
        <a href="Menu.php" class="logo">
            Church Info CRM
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                                        <li class="dropdown profile-dropdown">
                        <a class="btn" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href='http://demo2.churchwebcrm.com/UserList.php'><i class="fa fa-angle-double-right"></i> Edit Users</a></li>
<li><a href='http://demo2.churchwebcrm.com/UserEditor.php'><i class="fa fa-angle-double-right"></i> Add New User</a></li>
<li><a href='http://demo2.churchwebcrm.com/PersonCustomFieldsEditor.php'><i class="fa fa-angle-double-right"></i> Edit Custom Person Fields</a></li>
<li><a href='http://demo2.churchwebcrm.com/FamilyCustomFieldsEditor.php'><i class="fa fa-angle-double-right"></i> Edit Custom Family Fields</a></li>
<li><a href='http://demo2.churchwebcrm.com/DonationFundEditor.php'><i class="fa fa-angle-double-right"></i> Edit Donation Funds</a></li>
<li><a href='http://demo2.churchwebcrm.com/BackupDatabase.php'><i class="fa fa-angle-double-right"></i> Backup Database</a></li>
<li><a href='http://demo2.churchwebcrm.com/CSVImport.php'><i class="fa fa-angle-double-right"></i> CSV Import</a></li>
<li><a href='http://demo2.churchwebcrm.com/AccessReport.php'><i class="fa fa-angle-double-right"></i> Access report</a></li>
<li><a href='http://demo2.churchwebcrm.com/SettingsGeneral.php'><i class="fa fa-angle-double-right"></i> Edit General Settings</a></li>
<li><a href='http://demo2.churchwebcrm.com/SettingsReport.php'><i class="fa fa-angle-double-right"></i> Edit Report Settings</a></li>
<li><a href='http://demo2.churchwebcrm.com/SettingsUser.php'><i class="fa fa-angle-double-right"></i> Edit User Default Settings</a></li>
<li><a href='http://demo2.churchwebcrm.com/ManageEnvelopes.php'><i class="fa fa-angle-double-right"></i> Envelope Manager</a></li>
<li><a href='http://demo2.churchwebcrm.com/Register.php'><i class="fa fa-angle-double-right"></i> Update registration</a></li>
<li><a href='http://demo2.churchwebcrm.com/MenuSetup.php'><i class="fa fa-angle-double-right"></i> Menu Options</a></li>
                        </ul>
                    </li>
                                        <li class="dropdown profile-dropdown">
                        <a class="btn" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-question-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href='http://demo2.churchwebcrm.com/Help.php?page=About'><i class="fa fa-angle-double-right"></i> About ChurchInfo</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Wiki'><i class="fa fa-angle-double-right"></i> Wiki Documentation</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=People'><i class="fa fa-angle-double-right"></i> People</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Family'><i class="fa fa-angle-double-right"></i> Families</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Geographic'><i class="fa fa-angle-double-right"></i> Geographic features</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Groups'><i class="fa fa-angle-double-right"></i> Groups</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Finances'><i class="fa fa-angle-double-right"></i> Finances</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Fundraiser'><i class="fa fa-angle-double-right"></i> Fundraiser</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Reports'><i class="fa fa-angle-double-right"></i> Reports</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Admin'><i class="fa fa-angle-double-right"></i> Administration</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Cart'><i class="fa fa-angle-double-right"></i> Cart</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Properties'><i class="fa fa-angle-double-right"></i> Properties</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Notes'><i class="fa fa-angle-double-right"></i> Notes</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Custom'><i class="fa fa-angle-double-right"></i> Custom Fields</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Class'><i class="fa fa-angle-double-right"></i> Classifications</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Canvass'><i class="fa fa-angle-double-right"></i> Canvass Support</a></li>
<li><a href='http://demo2.churchwebcrm.com/Help.php?page=Events'><i class="fa fa-angle-double-right"></i> Events</a></li>
                        </ul>
                    </li>
                    <li class="dropdown profile-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="http://www.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=18&d=mm&r=g" class="img-circle" />
                            <span class="hidden-xs">ChurchInfo Admin </span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="PersonView.php?PersonID=1"><i class="fa fa-user"></i>Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="UserPasswordChange.php">Change My Password</a></li>
                            <li><a href="SettingsIndividual.php">Change My Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="Default.php?Logoff=True"><i class="fa fa-power-off"></i>Log Off</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xxs">
                        <a class="btn" href="Default.php?Logoff=True">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
	<!--Inicio del side bar-->
	
    <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="http://www.gravatar.com/avatar/d41d8cd98f00b204e9800998ecf8427e?s=70&d=mm&r=g" class="img-circle" />
                        </div>
                        <div class="pull-left info">
                            <p>Welcome, ChurchInfo</p>
                        </div>
                    </div>
                    <!-- search form -->
                    <div class="sidebar-form">
                        <input type="text" class="form-control searchPerson" placeholder="Search..." onfocus="ClearFieldOnce(this);"/>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="/">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
    <a href="#">
<i class="fa fa-users"></i>
<span>Members</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='/Addperson'><i class="fa fa-angle-double-right"></i> Add New Person</a></li>
<li><a href='http://demo2.churchwebcrm.com/SelectList.php?mode=person'><i class="fa fa-angle-double-right"></i> View All Persons</a></li>
<li><a href='http://demo2.churchwebcrm.com/OptionManager.php?mode=classes'><i class="fa fa-angle-double-right"></i> Classification Manager</a></li>
<li><a href='http://demo2.churchwebcrm.com/VolunteerOpportunityEditor.php'><i class="fa fa-angle-double-right"></i> Edit volunteer opportunities</a></li>
<li><a href='http://demo2.churchwebcrm.com/FamilyEditor.php'><i class="fa fa-angle-double-right"></i> Add New Family</a></li>
<li><a href='http://demo2.churchwebcrm.com/FamilyList.php'><i class="fa fa-angle-double-right"></i> View All Families</a></li>
<li><a href='http://demo2.churchwebcrm.com/GeoPage.php'><i class="fa fa-angle-double-right"></i> Family Geographic Utilties</a></li>
<li><a href='http://demo2.churchwebcrm.com/MapUsingGoogle.php?GroupID=-1'><i class="fa fa-angle-double-right"></i> Family Map</a></li>
<li><a href='http://demo2.churchwebcrm.com/OptionManager.php?mode=famroles'><i class="fa fa-angle-double-right"></i> Family Roles Manager</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-stack-overflow"></i>
<span>Sunday School</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            <li><a href='SundaySchoolClassView.php?groupId=1'><i class='fa fa-angle-double-right'></i> Angels class</a></li><li><a href='SundaySchoolClassView.php?groupId=3'><i class='fa fa-angle-double-right'></i> High School Class</a></li>
<li><a href='http://demo2.churchwebcrm.com/Reports/SundaySchoolClassList.php'><i class="fa fa-angle-double-right"></i> Dashbaord</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-shopping-cart"></i>
<span>Cart</span>
<i class="fa fa-angle-left pull-right"></i>
<small class="badge pull-right bg-green">0</small>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/CartView.php'><i class="fa fa-angle-double-right"></i> List Cart Items</a></li>
<li><a href='http://demo2.churchwebcrm.com/CartView.php?Action=EmptyCart'><i class="fa fa-angle-double-right"></i> Empty Cart</a></li>
<li><a href='http://demo2.churchwebcrm.com/CartToGroup.php'><i class="fa fa-angle-double-right"></i> Empty Cart to Group</a></li>
<li><a href='http://demo2.churchwebcrm.com/CartToFamily.php'><i class="fa fa-angle-double-right"></i> Empty Cart to Family</a></li>
<li><a href='http://demo2.churchwebcrm.com/CartToEvent.php'><i class="fa fa-angle-double-right"></i> Empty Cart to Event</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-tag"></i>
<span>Groups</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/GroupList.php'><i class="fa fa-angle-double-right"></i> List Groups</a></li>
<li><a href='http://demo2.churchwebcrm.com/GroupEditor.php'><i class="fa fa-angle-double-right"></i> Add a New Group</a></li>
<li><a href='http://demo2.churchwebcrm.com/OptionManager.php?mode=grptypes'><i class="fa fa-angle-double-right"></i> Edit Group Types</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-file-pdf-o"></i>
<span>Data/Reports</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/CSVExport.php'><i class="fa fa-angle-double-right"></i> CSV Export Records</a></li>
<li><a href='http://demo2.churchwebcrm.com/QueryList.php'><i class="fa fa-angle-double-right"></i> Query Menu</a></li>
<li><a href='http://demo2.churchwebcrm.com/ReportList.php'><i class="fa fa-angle-double-right"></i> Reports Menu</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-ticket"></i>
<span>Events</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/ListEvents.php'><i class="fa fa-angle-double-right"></i> List Church Events</a></li>
<li><a href='http://demo2.churchwebcrm.com/EventNames.php'><i class="fa fa-angle-double-right"></i> Add Church Event</a></li>
<li><a href='http://demo2.churchwebcrm.com/EventNames.php'><i class="fa fa-angle-double-right"></i> List Event Types</a></li>
<li><a href='http://demo2.churchwebcrm.com/Checkin.php'><i class="fa fa-angle-double-right"></i> Check-in and Check-out</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-bank"></i>
<span>Deposit</span>
<i class="fa fa-angle-left pull-right"></i>
<small class="badge pull-right bg-green">0</small>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/DepositSlipEditor.php?DepositType=Bank'><i class="fa fa-angle-double-right"></i> Create New Deposit</a></li>
<li><a href='http://demo2.churchwebcrm.com/FindDepositSlip.php'><i class="fa fa-angle-double-right"></i> View All Deposits</a></li>
<li><a href='http://demo2.churchwebcrm.com/FinancialReports.php'><i class="fa fa-angle-double-right"></i> Deposit Reports</a></li>
<li><a href='http://demo2.churchwebcrm.com/DepositSlipEditor.php?DepositSlipID=0'><i class="fa fa-angle-double-right"></i> Edit Deposit Slip</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-money"></i>
<span>Fundraiser</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/FundRaiserEditor.php?FundRaiserID=-1'><i class="fa fa-angle-double-right"></i> Create New Fundraiser</a></li>
<li><a href='http://demo2.churchwebcrm.com/FindFundRaiser.php'><i class="fa fa-angle-double-right"></i> View All Fundraisers</a></li>
<li><a href='http://demo2.churchwebcrm.com/FundRaiserEditor.php'><i class="fa fa-angle-double-right"></i> Edit Fundraiser</a></li>
<li><a href='http://demo2.churchwebcrm.com/PaddleNumList.php'><i class="fa fa-angle-double-right"></i> View Buyers</a></li>
<li><a href='http://demo2.churchwebcrm.com/AddDonors.php'><i class="fa fa-angle-double-right"></i> Add Donors to Buyer List</a></li>
</ul>
</li>
<li class="treeview">
    <a href="#">
<i class="fa fa-cogs"></i>
<span>Properties</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
                <ul class="treeview-menu">
            
<li><a href='http://demo2.churchwebcrm.com/PropertyList.php?Type=p'><i class="fa fa-angle-double-right"></i> People Properties</a></li>
<li><a href='http://demo2.churchwebcrm.com/PropertyList.php?Type=f'><i class="fa fa-angle-double-right"></i> Family Properties</a></li>
<li><a href='http://demo2.churchwebcrm.com/PropertyList.php?Type=g'><i class="fa fa-angle-double-right"></i> Group Properties</a></li>
<li><a href='http://demo2.churchwebcrm.com/PropertyTypeList.php'><i class="fa fa-angle-double-right"></i> Property Types</a></li>
</ul>
</li>
                    </ul>
                </section>
</aside>	
<!--Fin del side bar-->	
	