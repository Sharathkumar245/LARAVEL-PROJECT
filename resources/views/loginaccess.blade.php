<html>
<head>
<head>
<body>
<div class="container">
<div class="col">
@foreach($logi as $l)
@if( $user == $l->user)
 {{ hello}}
 @endif
 @endforeach
</div>
</div>
</body>
</html>