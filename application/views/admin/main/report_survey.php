<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title;?></title>
</head>
<body>
	<h4>Check report per period please!</h4>
	<form action="" method="post">
		<input type="date" name="start_of_date" id="start_of_date" />
		<input type="date" name="end_of_date" id="end_of_date" />
	
		<button type="button" id="btn_cek">Cek</button>
	</form>

	<p id="show_of_date"></p>
	<table>
		<thead>
			<tr>
				<th>Client Company</th>
				<th>Client Contact</th>
				<th>Nature of Work</th>
				<th>Taxand Countries Involved</th>
			</tr>
		</thead>
		<tbody id="show_data">

		</tbody>
	</table>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#btn_cek').on('click', function(){
				//Deklarasi dan inisiasi nilai
				var start_of_date	= $('#start_of_date').val();
				var end_of_date		= $('#end_of_date').val();
				
				//Condition
				if(start_of_date == "" && end_of_date == ""){
					document.getElementById('show_of_date').innerHTML = "Still empty";
				}else{
					document.getElementById('show_of_date').innerHTML = start_of_date + ' s/d ' + end_of_date;
				}

				// console.log(start_of_date);
				// console.log(end_of_date);
			});			
		});
	</script>
</body>
</html>
