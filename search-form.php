<!-- The form to accept input.  Pretty basic -->
<form action='' method='post'>
	<p><input type='text' name='seed' value='' class='auto' placeholder='Search Employees (eg. Don)'></p>
	<p><input id="submitbutton" type="submit" value="SEARCH" /></p>
</form>

<!-- Link to jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<!-- Link to jQuery UI library -->
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>

<!-- jQuery to recognize when something is being typed into the search box -->
<script type="text/javascript">
$(function() {

//autocomplete
$(".auto").autocomplete({
source: "autocomplete-search.php",
minLength: 2
});				

});
</script>
<p>More names to try: Jennifer, Michael, Pat, Susan, Shelley, William, Daniel, Nancy, John</p>