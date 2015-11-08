
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Supprimer une user story de sprint</title>
		    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<style> textarea { resize: none; } </style>
	</head>
	<body>

<div class="container">
    <br/>
    <div class="row">
    	<h2> La liste des User Stories</h2>
    	<p> Supprimerles User Stories que vous ne voulez  pas mettre dans le sprint N° {{$idSprint}} </p>
  
@if(count($userstories))

	<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="us">


		<TR>
			<TH> N° </TH>
			<TH> Description </TH>
			<TH> Priorité </TH>
			<TH> Difficulté </TH>
			<th> Ajouter</th>
		</TR>

		@foreach($userstories as $us)
			<TR>
				<TH> {{$us->id}} </TH>
				<TD> {{$us->description}} </TD>
				<TD> {{$us->priority}} </TD>
				<TD> {{$us->difficulty}} </TD>
				<td>   		
						
					<a href= {{ URL::action("UsSprintController@delete", [$us->id]) }} class= 'btn btn-danger btn-xs'>Supprimer</a>

				</td>

			</TR>

		@endforeach

	</TABLE>
@else 
<p> le sprint est vide!!! </p>
@endif 

</div>
</body>
</html>
