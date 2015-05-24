<aside class="right-side">
                <section class="content-header">
                    <h1>
                        Person Editor
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="http://demo2.churchwebcrm.com/Menu.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Person Editor</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
 <form method="post" action="Addperson" name="PersonEditor" id="adduser">
	<div class="alert alert-info alert-dismissable">
		<i class="fa fa-info"></i>
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong><span style="color: red;">Red text</span></strong> indicates items inherited from the associated family record.	</div>
		<div class="box box-info clearfix">
		<div class="box-header">
			<h3 class="box-title">Personal Info</h3>
			<div class="pull-right"><br>
				<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-2">
						<label>Gender:</label>
						<select name="Gender" class="form-control">
							<option value="0">Select Gender</option>
							<option value="0" disabled="">-----------------------</option>
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>
					</div>
					<div class="col-xs-3">
						<label for="Title">Title:</label>
						<input type="text" name="Title" id="Title" value="" class="form-control" placeholder="Mr., Mrs., Dr., Rev.">
					</div>
				</div>
				<p>
				</p><div class="row">
					<div class="col-xs-4">
						<label for="FirstName">First Name:</label>
						<input type="text" name="FirstName" id="FirstName" value="" class="form-control">
											</div>

					<div class="col-xs-2">
						<label for="MiddleName">Middle Name:</label>
						<input type="text" name="MiddleName" id="MiddleName" value="" class="form-control">
											</div>

					<div class="col-xs-4">
						<label for="LastName">Last Name:</label>
						<input type="text" name="LastName" id="LastName" value="" class="form-control">
											</div>

					<div class="col-xs-1">
						<label for="Suffix">Suffix:</label>
						<input type="text" name="Suffix" id="Suffix" value="" placeholder="Jr., Sr., III" class="form-control">
					</div>
				</div>
				<p>
				</p><div class="row">
					<div class="col-xs-2">
						<label>Birth Month:</label>
						<select name="BirthMonth" class="form-control">
							<option value="0" selected="">Select Month</option>
							<option value="01">January</option>
							<option value="02">February</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>
					</div>
					<div class="col-xs-2">
						<label>Birth Day:</label>
						<select name="BirthDay" class="form-control">
							<option value="0">Select Day</option>
															<option value="01">1</option>
															<option value="02">2</option>
															<option value="03">3</option>
															<option value="04">4</option>
															<option value="05">5</option>
															<option value="06">6</option>
															<option value="07">7</option>
															<option value="08">8</option>
															<option value="09">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
															<option value="13">13</option>
															<option value="14">14</option>
															<option value="15">15</option>
															<option value="16">16</option>
															<option value="17">17</option>
															<option value="18">18</option>
															<option value="19">19</option>
															<option value="20">20</option>
															<option value="21">21</option>
															<option value="22">22</option>
															<option value="23">23</option>
															<option value="24">24</option>
															<option value="25">25</option>
															<option value="26">26</option>
															<option value="27">27</option>
															<option value="28">28</option>
															<option value="29">29</option>
															<option value="30">30</option>
															<option value="31">31</option>
													</select>
					</div>
					<div class="col-xs-2">
						<label>Birth Year:</label>
						<input type="text" name="BirthYear" value="" maxlength="4" size="5" placeholder="yyyy" class="form-control">
																	</div>
					<div class="col-xs-2">
						<label>Hide Age</label><br>
						<div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="HideAge" value="1" class="form-control" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box box-info clearfix">
		<div class="box-header">
			<h3 class="box-title">Family Info</h3>
			<div class="pull-right"><br>
				<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="form-group col-xs-3">
				<label>Family Role:</label>
								<select name="FamilyRole" class="form-control">
					<option value="0">Unassigned</option>
					<option value="0" disabled="">-----------------------</option>
					<option value="1">Head of Household&nbsp;</option><option value="2">Spouse&nbsp;</option><option value="3">Child&nbsp;</option><option value="4">Other Relative&nbsp;</option><option value="5">Non Relative&nbsp;				</option></select>
			</div>

			<div class="form-group col-xs-6">
				<label>Family:</label>
				
				<select name="Family" size="8" class="form-control">
					<option value="0" selected="">Unassigned</option>
					<option value="-1">Create a new family (using last name)</option>
					<option value="0" disabled="">-----------------------</option>
						<option value="3">Admin&nbsp;</option><option value="4">Brown&nbsp; - USA 3051 NW 107th Ave / FL</option><option value="1">Dawoud&nbsp; - 123 Main St / Sammamish, WA</option><option value="5">Escobars&nbsp;</option><option value="6">Ronald&nbsp;</option><option value="2">Smith&nbsp; - 12 5th Ave / WA				</option></select>
			</div>
		</div>
	</div>
	<div class="box box-info clearfix">
		<div class="box-header">
			<h3 class="box-title">Contact Info</h3>
			<div class="pull-right"><br>
				<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
							<input type="hidden" name="Address1" value="">
				<input type="hidden" name="Address2" value="">
				<input type="hidden" name="City" value="">
				<input type="hidden" name="State" value="">
				<input type="hidden" name="StateTextbox" value="">
				<input type="hidden" name="Zip" value="">
				<input type="hidden" name="Country" value="United States">
						<div class="row">
				<div class="form-group col-xs-3">
					<label for="HomePhone">
						Home Phone:					</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-phone"></i>
						</div>
						<input type="text" name="HomePhone" value="" size="30" maxlength="30" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
						<br><div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="NoFormat_HomePhone" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>Do not auto-format						</div>
				</div>
				<div class="form-group col-xs-3">
					<label for="WorkPhone">
					Work Phone:					</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-phone"></i>
						</div>
						<input type="text" name="WorkPhone" value="" size="30" maxlength="30" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask="">
						<br><div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="NoFormat_WorkPhone" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>Do not auto-format					</div>
				</div>

				<div class="form-group col-xs-3">
					<label for="CellPhone">
						Mobile Phone:					</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-phone"></i>
						</div>
						<input type="text" name="CellPhone" value="" size="30" maxlength="30" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
						<br><div class="icheckbox_minimal" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="NoFormat_CellPhone" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>Do not auto-format					</div>
				</div>
			</div>
			<p>
			</p><div class="row">
				<div class="form-group col-xs-4">
					<label for="Email">
						Email:					</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</div>
						<input type="text" name="Email" value="" size="30" maxlength="100" class="form-control">
											</div>
				</div>
				<div class="form-group col-xs-4">
					<label for="WorkEmail">Work / Other Email:</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</div>
						<input type="text" name="WorkEmail" value="" size="30" maxlength="100" class="form-control">
											</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box box-info clearfix">
		<div class="box-header">
			<h3 class="box-title">Membership Info</h3>
			<div class="pull-right"><br>
				<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
			<div class="row">
								<div class="form-group col-xs-4">
					<label>Friend Date:</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" name="FriendDate" class="form-control inputDatePicker hasDatepicker" value="2015-04-05" maxlength="10" id="sel2" size="11" placeholder="YYYY-MM-DD">
											</div>
				</div>
								<div class="form-group col-xs-4">
					<label>Membership Date:</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" name="MembershipDate" class="form-control inputDatePicker hasDatepicker" value="" maxlength="10" id="sel1" size="11" placeholder="YYYY-MM-DD">
											</div>
				</div>
			</div>
			<div class="form-group col-xs-4">
				<label>Classification:</label>
				<select name="Classification" class="form-control">
					<option value="0">Unassigned</option>
					<option value="0" disabled="">-----------------------</option>
					<option value="1">Member&nbsp;</option><option value="2">Regular Attender&nbsp;</option><option value="3">Guest&nbsp;</option><option value="5">Non-Attender&nbsp;</option><option value="4">Non-Attender (staff)&nbsp;				</option></select>
			</div>
		</div>
	</div>
	<div class="box box-info clearfix">
		<div class="box-header">
			<h3 class="box-title">Custom Fields</h3>
			<div class="pull-right"><br>
				<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
			</div>
		</div><!-- /.box-header -->
		<div class="box-body">
					</div>
	</div>
	<input type="submit" class="btn btn-primary" value="Save" name="PersonSubmit">
	<input type="submit" class="btn btn-primary" value="Save and Add" name="PersonSubmitAndAdd">	<input type="button" class="btn btn-primary" value="Cancel" name="PersonCancel" onclick="javascript:document.location='PersonView.php?PersonID=0';">
</form>
<script>
$(function() {
  // Handler for .ready() called.
  //alert("Funciona");
  //Jquery so submit form
  $( "#adduser" ).submit(function( event ) {
  //alert( "Handler for .submit() called." );
  event.preventDefault();
  //Inicio psot jquery
  $.post( "/Addperson", $( "#adduser" ).serialize(), function( data ) {
  alert( "Data Loaded: " + data );
}, "json");
  
  //
});
  
  //
});
</script>
<!-- InputMask -->
<script src="http://demo2.churchwebcrm.com/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="http://demo2.churchwebcrm.com/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="http://demo2.churchwebcrm.com/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<script src="http://demo2.churchwebcrm.com/js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>

<script type="text/javascript">
	$(function() {
		$("[data-mask]").inputmask();
		$('.inputDatePicker').datepicker();

	});
</script>


			</section><!-- /.content -->
		</aside>