<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Survey Client</title>
</head>
<body>
	<form method="post" autocomplete="off">
		<!-- Get from parameter which sent from url -->
		<label for="" class="">Client company</label><br>
		<input type="text" name="client_company" id="client_company" value="<?php echo $this->uri->segment(2);?>" readonly><br>

		<label for="" class="">Client contact</label><br>
		<input type="text" name="client_contact" maxlength="15" id="client_contact" placeholder="fill your contact please" required><br>
		
		<!-- Get from parameter which sent from url -->
		<label for="">Nature of Work</label><br>
		<input type="text" name="nature_of_work" id="nature_of_work" value="<?php echo $this->uri->segment(3);?>" readonly><br>

		<label for="" class="">Taxand countries involved</label><br>
		<input type="text" name="taxand_countries_involved" id="taxand_countries_involved" placeholder="taxand countries involved please" required><br>

		<br>
		<table class="" border=1>
			<caption>Taxand team performance</caption>
			<thead>
				<tr>
					<th></th>
					<th>Strongly disagree</th>
					<th>Disagree</th>
					<th>Neither agree or disagree</th>
					<th>Agree</th>
					<th>Strongly agree</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>The team demonstrates a
						good understanding of
						your business, the
						challenges you face and
						your priorities.
					</td>
					<td align="center">
						<input type="radio" name="ttp1" id="ttp1" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp1" id="ttp1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" id="ttp1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" id="ttp1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" id="ttp1" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>The team is proactive in its
						approach to delivering
						practical and commercial
						tax solutions for you.
					</td>
					<td align="center">
						<input type="radio" name="ttp2" id="ttp2" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp2" id="ttp2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" id="ttp2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" id="ttp2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" id="ttp2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>The technical expertise of
						the team is robust and in-
						depth.
					</td>
					<td align="center">
						<input type="radio" name="ttp3" id="ttp3" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp3" id="ttp3" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" id="ttp3" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" id="ttp3" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" id="ttp3" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_ttp" required id="comments_ttp">
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<table class="" border=1>
			<caption>Project management</caption>
			<thead>
				<tr>
					<th></th>
					<th>Strongly disagree</th>
					<th>Disagree</th>
					<th>Neither agree or disagree</th>
					<th>Agree</th>
					<th>Strongly agree</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>The status of the work is
						regularly communicated.
					</td>
					<td align="center">
						<input type="radio" name="pm1" id="pm1" required value="Strongly disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" id="pm1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" id="pm1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" id="pm1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" id="pm1" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>The number of
						professionals engaged in
						delivering the work is
						appropriate for its level of
						complexity.
					</td>
					<td align="center">
						<input type="radio" name="pm2" id="pm2" required value="Strongly disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" id="pm2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" id="pm2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" id="pm2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" id="pm2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_pm" id="comments_pm" required>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		<table class="" border=1>
			<caption>Feels and billing</caption>
			<thead>
				<tr>
					<th></th>
					<th>Strongly disagree</th>
					<th>Disagree</th>
					<th>Neither agree or disagree</th>
					<th>Agree</th>
					<th>Strongly agree</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>The service provided was
						good value for money as
						the fee was appropriate for
						the quality of service
						delivered.
					</td>
					<td align="center">
						<input type="radio" name="fb1" id="fb1" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="fb1" id="fb1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" id="fb1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" id="fb1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" id="fb1" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						Pricing was transparent
						and invoices were clear
						and met expectations.
					</td>
					<td align="center">
						<input type="radio" name="fb2" id="fb2" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="fb2" id="fb2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" id="fb2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" id="fb2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" id="fb2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_fb" id="comments_fb" required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="">
							OPTIONAL QUESTION:
							How did our fees compare
							to other advisors- higher,
							lower or on par?
						</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_fbops" required id="comments_fbops">
					</td>
				</tr>
			</tbody>
		</table>

		<br>
		<table class="" border=1>
			<caption>Overall impressions</caption>
			<thead>
				<tr>
					<th></th>
					<th>Weak</th>
					<th>Average</th>
					<th>Good</th>
					<th>Very Good</th>
					<th>Excellent</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Overall how would you rate
						the performance of Taxand
						and its people in delivering
						the service?
					</td>
					<td align="center">
						<input type="radio" name="oi1" value="Weak" id="oi1" required>
					</td>
					<td align="center">
						<input type="radio" name="oi1" id="oi1" value="Average">
					</td>
					<td align="center">
						<input type="radio" name="oi1" id="oi1" value="Good">
					</td>
					<td align="center">
						<input type="radio" name="oi1" id="oi1" value="Very Good">
					</td>
					<td align="center">
						<input type="radio" name="oi1" id="oi1" value="Excellent">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_oi" id="comments_oi" required>
					</td>
				</tr>
			</body>
			<thead>
				<tr>
					<th></th>
					<th>No</th>
					<th>Unlikely</th>
					<th>Maybe</th>
					<th>Probably</th>
					<th>Definitely</th>
				</tr>
			</thead>
			<body>
				<tr>
					<td>
						Based on the level of
						service you have received,
						would you work with the
						Taxand network again?
					</td>
					<td align="center">
						<input type="radio" name="oi2" id="oi2" required value="No">
					</td>
					<td align="center">
						<input type="radio" name="oi2" id="oi2" value="Unlikely">
					</td>
					<td align="center">
						<input type="radio" name="oi2" id="oi2" value="Maybe">
					</td>
					<td align="center">
						<input type="radio" name="oi2" id="oi2" value="Probably">
					</td>
					<td align="center">
						<input type="radio" name="oi2" id="oi2" value="Definitely">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_oi2" id="comments_oi2" required>
					</td>
				</tr>
				
			</tbody>
		</table>

		<br>
		<table class="" border=1>
			<caption>Final thoughts</caption>
			
			<tbody>
				<tr>
					<td>
						<label for="">
							Do you have any specific
							business issues at present
							with which you would like
							our support?
						</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_ft" id="comments_ft" required>
					</td>
				</tr>
				<tr>
					<td>
						<label for="">
							If you would be happy to
							provide a client testimonial,
							we’d be very grateful if you
							could do so here:
						</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_ft2" id="comments_ft2" required>
					</td>
				</tr>
				
			</tbody>
		</table>

		<button type="button" type="submit" id="btn_save" name="save">Save</button>
	</form>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			
			//Store Survey
			$('#btn_save').on('click', function(){

				//Deklarasi dan inisiasi form ke javascript
				var client_company				= $('#client_company').val();
				var client_contact				= $('#client_contact').val();
				var nature_of_work				= $('#nature_of_work').val();
				var taxand_countries_involved	= $('#taxand_countries_involved').val();
				var ttp1 						= $('input[name=ttp1]:checked').val();				
				var ttp2						= $('input[name=ttp2]:checked').val();
				var ttp3						= $('input[name=ttp3]:checked').val();				
				var comments_ttp				= $('#comments_ttp').val();
				var pm1							= $('input[name=pm1]:checked').val();
				var pm2							= $('input[name=pm2]:checked').val();
				var comments_pm					= $('#comments_pm').val();
				var fb1							= $('input[name=fb1]:checked').val();
				var fb2							= $('input[name=fb2]:checked').val();
				var comments_fb					= $('#comments_fb').val();
				var comments_fbops				= $('#comments_fbops').val();
				var oi1							= $('input[name=oi1]:checked').val();
				var comments_oi					= $('#comments_oi').val();
				var oi2							= $('input[name=oi2]:checked').val();
				var comments_oi2				= $('#comments_oi2').val();
				var comments_ft					= $('#comments_ft').val();
				var comments_ft2				= $('#comments_ft2').val();

				//Proses ajax
				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('store')?>",
					dataType : "JSON",
					data : {
						client_company:client_company, 
						client_contact:client_contact, 
						nature_of_work:nature_of_work,
						taxand_countries_involved:taxand_countries_involved,
						ttp1:ttp1,
						ttp2:ttp2,
						ttp3:ttp3,
						comments_ttp:comments_ttp,
						pm1:pm1,
						pm2:pm2,
						comments_pm:comments_pm,
						fb1:fb1,
						fb2:fb2,
						comments_fb:comments_fb,
						comments_fbops:comments_fbops,
						oi1:oi1,
						comments_oi:comments_oi,
						oi2:oi2,
						comments_oi2:comments_oi2,
						comments_ft:comments_ft,
						comments_ft2:comments_ft2
					},
					success: function(data){//Kalau data survey berhasil di simpan
						$('[name="client_company"]').val("");
						$('[name="client_contact"]').val("");
						$('[name="nature_of_work"]').val("");
						$('[name="taxand_countries_involved"]').val("");
						$('[name="ttp1"]').prop('checked',false);
						$('[name="ttp2"]').prop('checked',false);
						$('[name="ttp3"]').prop('checked',false);
						$('[name="comments_ttp"]').val("");
						$('[name="pm1"]').prop('checked',false);
						$('[name="pm2"]').prop('checked',false);
						$('[name="comments_pm"]').val("");
						$('[name="fb1"]').prop('checked',false);
						$('[name="fb2"]').prop('checked',false);
						$('[name="comments_fb"]').val("");
						$('[name="comments_fbops"]').val("");
						$('[name="oi1"]').prop('checked',false);
						$('[name="comments_oi"]').val("");
						$('[name="oi2"]').prop('checked',false);
						$('[name="comments_oi2"]').val("");
						$('[name="comments_ft"]').val("");
						$('[name="comments_ft2"]').val("");
						
						// console.log("Berhasil disimpan");
					}
				});

				return false;
			});
		});
	</script>
</body>
</html>
