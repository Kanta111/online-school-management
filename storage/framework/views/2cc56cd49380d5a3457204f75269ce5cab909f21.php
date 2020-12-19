<!DOCTYPE html>
<html>
<head>
	<title>Today's Lecture</title>
</head>
<body>
	<h2><?php echo e($data->subject); ?></h2>
	<h3><?php echo e($data->date); ?></h3>
	<p>
		<iframe src="<?php echo e(url('upload/'.$data->file)); ?>" style="width: 1500px; height: 700px;"></iframe>
	</p>

</body>
</html><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/setup/document/details.blade.php ENDPATH**/ ?>