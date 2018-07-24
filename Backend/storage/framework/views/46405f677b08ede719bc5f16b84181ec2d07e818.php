<?php if(Auth::guard('web')->check()): ?>
	<p class="text-success">
		You are logged in as user
	</p>
<?php else: ?>
	<p class="text-danger">
		You are logged out as user
	</p>
<?php endif; ?>

<?php if(Auth::guard('admin')->check()): ?>
	<p class="text-success">
		You are logged in as admin
	</p>
<?php else: ?>
	<p class="text-danger">
		You are logged out as admin
	</p>
<?php endif; ?>