<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	div.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	#add_course{
		width: 50%;
	}
		p{
			display: block;
		}
		input{
			margin-left: 30px;
			width: 300px;
		}
		#btn{
			width: 50px;
			margin-left: 330px;
		}
		textarea{
			width: 300px;
			height: 100px;
			vertical-align: top;
		}
	#courses{
		padding-top: 20px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Courses!</h1>

	<div id="body">
		<div id="add_course">
			<form method="post" action="/course/create">
				<h2>Add New Course</h2>
				<p>Name: <input type="text" name="name"></p> 
				<p>Description: <textarea name="description"></textarea></p>
				<input id="btn" type="submit">
			</form>
		</div>
		<div id="courses">
			<table>
				<thead>
					<tr>
						<th>Courses Name</th>
						<th>Description</th>
						<th>Added Date</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
<!-- START LOOP -->
<?php 
					foreach($courses as $course)
					{
?>					<tr>
						<td><?= $course['name']; ?></td>
						<td><?= $course['description']; ?></td>
						<td><?= $course['created_at']; ?></td>
						<td>
							<a href="/course/deleteReview/get/<?= $course['id']; ?>">Remove</a>
						</td>
					</tr>
<?php				}
?>
<!-- END LOOP -->
				</tbody>
			</table>
		</div>
	</div>

	<div class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
</div>

</body>
</html>