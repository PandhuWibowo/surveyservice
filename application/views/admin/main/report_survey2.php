<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title;?></title>
</head>
<body>
	<?php
		//Querynya udah dapet
		// select (select count(ttp1) from survey_client where ttp1 = 'Agree') as ttp1, (select count(ttp1) from survey_client where ttp2 = 'Agree') as ttp2, (select count(ttp1) from survey_client where ttp3 = 'Agree') as ttp3 from survey_client
	?>

	<select name="value" id="value">
		<option value="" disabled selected>Please select the result</option>
		<option value="Strongly disagree">Strongly disagree</option>
		<option value="Disagree">Disagree</option>
		<option value="Neither agree or disagree">Neither agree or disagree</option>
		<option value="Agree">Agree</option>
		<option value="Strongly Agree">Strongly Agree</option>
	</select>

	<table border=1>
		<thead>
			<tr>
				<th>Statement 1</th>
				<th>Statement 2</th>
				<th>Statement 3</th>
			</tr>
		</thead>
		<tbody id="show_data">
			
		</tbody>
	</table>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#value').on('click', function(){
				var check = $('#value option:selected').text();

				$.ajax({
					type		: "post", //Perhatikan typenya
					url			: '<?php echo base_url("dashboard/report/value");?>',
					async		: true,
					data		: {
						check	: check
					},
					dataType 	: 'json',
					success		: function(data){
						var html = '';
						var i;
						if(data.length != ""){
							for(i=0;i<data.length;i++){
								html += '<tr>'+
								'<td>'+data[i].ttp1+'</td>'+
								'<td>'+data[i].ttp2+'</td>'+
								'<td>'+data[i].ttp3+'</td>'+
								'</tr>';
							}
							$('#show_data').html(html);
							// $('#count').html("Total : "+data.length);
						}
					}
				});
			});
		});
	</script>
</body>
</html>
