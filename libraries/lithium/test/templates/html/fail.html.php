<div class="test-assert test-assert-failed">
	Assertion '<?php echo $error['assertion'] ?>' failed in
	<?php echo $error['class'] ?>::<?php echo $error['method']?>() on line
	<?php echo $error['line'] ?>:
	<span class="content"><?php echo htmlspecialchars(
		$error['message'], ENT_QUOTES, 'UTF-8'
	) ?></span>
</div>