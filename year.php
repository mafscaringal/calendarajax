<html>
<head>
	<title>CALENDAR</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<center><br><b>YEARS </b></br>
<select id = "year">
	<?php for ($year = 1990; $year <= 2014; $year++){
		echo "<option>" .$year. "</option>";
		}?>
</select><br></center>

<center><br><b>MONTHS </b></br>
<select id = "month" name = "month">
	<option value = "jan">January</option>
	<option value = "feb">February</option>
	<option value = "mar">March</option>
	<option value = "apr">April</option>
	<option value = "may">May</option>
	<option value = "june">June</option>
	<option value = "july">July</option>
	<option value = "aug">August</option>
	<option value = "sep">September</option>
	<option value = "oct">October</option>
	<option value = "nov">November</option>
	<option value = "dec">December</option>
</select><br></center>

<center><br><b>DAYS </b></br>
<select id = "day">
	<?php for ($i = 1; $i<= 31; $i++){
		echo "<option value = ".$i.">" .$i. "</option>";
		}?>
</select></enter>


<script type="text/javascript" src="jquery.1.10.2.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('#year').on('change', function(){
			var year = $('#year').val();
			var month = $('#month').val();
			$.ajax({
				url: 'day.php',
				data: {year: year, month:month},
				dataType: 'JSON',
				method: 'GET',
				success: function(response){
					var day = response.day;
					var str = '';
					for (i = 1; i <= day; i++){
					str += '<option value="' + i +'">';
					str += i;
					str += '</option>';
					}
					$('#day').html(str);
				}
			});
		});
		$('#month').on('change', function(){
			var year = $('#year').val();
			var month = $('#month').val();
			$.ajax({
				url: 'day.php',
				data: {year: year, month:month},
				dataType: 'JSON',
				method: 'GET',
				success: function(response){
					var day = response.day;
					var str = '';
					for (i = 1; i <= day; i++){
					str += '<option value="' + i +'">';
					str += i;
					str += '</option>';
					}
					$('#day').html(str);
				}
			});
		});
	});
</script>
</body>
</html>
