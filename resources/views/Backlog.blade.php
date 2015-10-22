<!doctype html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Backlog</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

@if(count($userstories))
	<TABLE BORDER="1">

		<TR>
			<TH> N° </TH>
			<TH> Description </TH>
			<TH> Priorité </TH>
			<TH> Difficulté </TH>
		</TR>

		@foreach($userstories as $us)
			<TR>
				<TH> {{$us->id}} </TH>
				<TD> {{$us->Description}} </TD>
				<TD> {{$us->Priority}} </TD>
				<TD> {{$us->Difficulty}} </TD>
			</TR>

		@endforeach
	</TABLE>
@endif
</body>
</html>