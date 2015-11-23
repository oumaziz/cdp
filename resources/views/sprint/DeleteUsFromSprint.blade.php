@extends('default')

@section('content')

<div class="container">
    <br/>
    <div class="row">
    	<h2> La liste des User Stories</h2>
    	<p> Supprimerles User Stories que vous ne voulez  pas mettre dans le sprint  </p>
  
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
						
					<a href= {{ URL::action("UsSprintController@delete", [$us->project_id, $us->id]) }} class= 'btn btn-danger btn-xs'>Supprimer</a>

				</td>

			</TR>

		@endforeach

	</TABLE>
	<a href="{{ URL::previous()}}" class="btn btn-default" >Back</a>

@else 
<p> le sprint est vide!!! </p>
@endif 

</div>
</div>
@stop