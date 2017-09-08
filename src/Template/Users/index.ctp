<div class="brclr"></div>
<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<h4>Users</h4>
			</li>
		</ol>
		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Date Joined</th>
				<th>Status</th>
			</tr>
			<tr>
				<?php foreach($users as $user): ?>
				<td><?=$user->id ?></td>
				<td><a href=""><?=$user->username ?></a></td>
				<td><?=$user->created ?></td>
				<?php endforeach; ?>
			</tr>
		</table>
	</div>
</div>