<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if(count($proj)>0)
@foreach($proj as $p)
{{$p->name}}
@endforeach
@endif
</body>
</html>