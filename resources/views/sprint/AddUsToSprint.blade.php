@extends('default')

@section('content')
<div class="container">
    <br/>
    <div class="row">
    	<h2> La liste des User Stories </h2>
    	
 
@if(count($userstories))
<p> Selectionnez les User Stories que vous voulez ajouter au sprint </p>
	<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">


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
						
					<a href= {{ URL::action("UsSprintController@add", [$us->id  , $idSprint]) }} class= 'btn btn-primary btn-xs'>Ajouter</a>
				</td>

			</TR>

		@endforeach

	</TABLE>
@else 
<p> toutes les user stories sont attribuées </p>
@endif 

</div>
@stop