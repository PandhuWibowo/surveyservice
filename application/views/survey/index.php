<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Survey Client</title>
</head>
<body>
	<form action="<?=base_url('survey/clients');?>" method="post" autocomplete="off">
		<!-- Get from parameter which sent from url -->
		<label for="" class="">Client company</label><br>
		<input type="text" name="client_company" value="<?php echo $this->uri->segment(2);?>" readonly><br>

		<label for="" class="">Client contact</label><br>
		<input type="text" name="client_contact" placeholder="fill your contact please" required><br>
		
		<!-- Get from parameter which sent from url -->
		<label for="">Nature of Work</label><br>
		<input type="text" name="nature_of_work" value="<?php echo $this->uri->segment(3);?>" readonly><br>

		<label for="" class="">Taxand countries involved</label><br>
		<input type="text" name="taxand_countries_involved" placeholder="taxand countries involved please" required><br>

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
						<input type="radio" name="ttp1" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp1" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>The team is proactive in its
						approach to delivering
						practical and commercial
						tax solutions for you.
					</td>
					<td align="center">
						<input type="radio" name="ttp2" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>The technical expertise of
						the team is robust and in-
						depth.
					</td>
					<td align="center">
						<input type="radio" name="ttp3" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="ttp3" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="ttp3" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_ttp" required>
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
						<input type="radio" name="pm1" required value="Strongly disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="pm1" value="Strongly agree">
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
						<input type="radio" name="pm2" required value="Strongly disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="pm2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_pm" required>
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
						<input type="radio" name="fb1" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="fb1" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="fb1" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						Pricing was transparent
						and invoices were clear
						and met expectations.
					</td>
					<td align="center">
						<input type="radio" name="fb2" value="Strongly disagree" required>
					</td>
					<td align="center">
						<input type="radio" name="fb2" value="Disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" value="Neither agree or disagree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" value="Agree">
					</td>
					<td align="center">
						<input type="radio" name="fb2" value="Strongly agree">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_fb" required>
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
						<input type="text" name="comments_fbops">
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
						<input type="radio" name="oi1" value="Weak" required>
					</td>
					<td align="center">
						<input type="radio" name="oi1" value="Average">
					</td>
					<td align="center">
						<input type="radio" name="oi1" value="Good">
					</td>
					<td align="center">
						<input type="radio" name="oi1" value="Very Good">
					</td>
					<td align="center">
						<input type="radio" name="oi1" value="Excellent">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_oi" required>
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
						<input type="radio" name="oi2" required value="No">
					</td>
					<td align="center">
						<input type="radio" name="oi2" value="Unlikely">
					</td>
					<td align="center">
						<input type="radio" name="oi2" value="Maybe">
					</td>
					<td align="center">
						<input type="radio" name="oi2" value="Probably">
					</td>
					<td align="center">
						<input type="radio" name="oi2" value="Definitely">
					</td>
				</tr>
				<tr>
					<td>
						<label for="">Any comments?</label>
					</td>
					<td colspan="5">
						<input type="text" name="comments_oi2" required>
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
						<input type="text" name="comments_ft" required>
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
						<input type="text" name="comments_ft2" required>
					</td>
				</tr>
				
			</tbody>
		</table>

		<button type="submit" name="save">Save</button>
	</form>
</body>
</html>
