
@extends('default')
@section('content')
<div class="row">
			<div class="col-md-10 col-md-offset-1">
<h2> La liste des Projets </h2>
    	
 
@if(count($project))

	<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">


		<TR>
			<TH> Title </TH>
			<TH> Description </TH>
			<TH> Start Date </TH>
			<th> Project Owner</th>			
			<th> Disply</th>

		</TR>

		@foreach($project as $proj)
			<TR>
				<TH> {{$proj->title}} </TH>
				<TD> {{$proj->description}} </TD>
				<TD> {{$proj->startDate}} </TD>
				@if(count($developer))
					@foreach($developer as $dev)
						@if($dev->id == $proj->developer_id)
							<TD> {{ $dev->FamilyName }} {{ $dev->FirstName }} </TD>
						@endif 
					@endforeach
				@endif

				
				<td> 
					<a href= {{ URL::action("BacklogController@show", [$proj->id]) }} class= 'btn btn-info btn-xs'> Disply </a>
					<a href= {{ URL::action("MemberController@show", [$proj->id]) }} class= 'btn btn-info btn-xs'> Members </a>


				</td>
		

			</TR>

		@endforeach

	</TABLE>
	
@else 
<p> aucun projet est été crée </p>
@endif 
</div>
</div>
@stop