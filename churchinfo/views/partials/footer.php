</div><!-- ./wrapper -->

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- AdminLTE App -->
	<script type="text/javascript" src="http://demo2.churchwebcrm.com/js/AdminLTE/app.js"></script>

	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script language="javascript" type="text/javascript">
		$("document").ready(function(){
			$(".searchPerson").autocomplete({
				source: "AjaxFunctions.php?searchtype=person",
				minLength: 2,
				select: function(event, ui) {
					var location = 'PersonView.php?PersonID='+ui.item.id;
					window.location.replace(location);
					$('#add_per_ID').val(ui.item.id);
				}
			});
		});
	</script>
</body>
</html>
