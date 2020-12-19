<!DOCTYPE html>
<html>
<head>
	<title>Today's Lecture</title>
</head>
<body>
	<h2>{{$data->subject}}</h2>
	<h3>{{$data->date}}</h3>
	<p>
		<iframe src="{{url('upload/'.$data->file)}}" style="width: 1500px; height: 700px;"></iframe>
	</p>

</body>
</html>