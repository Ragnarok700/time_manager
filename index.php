<?php
	// include html head
	include "includes/header.php";
?>

<!-- Welcome Block -->
<div class="block">
	<div class="title">Welcome to Time Manager</div>
	<div class="body">Please fill in the entries below to get started.</div>
</div>

<!-- Form Start -->
<form method="post" action="">

<!-- Time Entries -->
<div class="block">
	<div class="title">Entries</div>
	<div class="body">
	
		<!-- Display 10 rows -->
		<?php for ($i=0;$i<10;++$i) { ?>
			<div class="time-row">
				<!-- For each row, display timer button and manual entry field -->
				<input type="button" name="timer[]" class="time-timer" value="Start Timer" /> <input type="text" name="entry[]" class="time-entry" placeholder="Time (00h 00m 00s)" />
			</div>
		<?php } ?>
	</div>
</div>

<!-- Submit Timesheet -->
<div class="block">
	<div class="title">Submit</div>
	<div class="body">
		<input type="submit" name="time-submit" class="submit-button" value="Submit Timesheet" />
	</div>
</div>

<!-- Form End-->
</form>

<?php
	// include html footer
	include "includes/footer.php";
?>