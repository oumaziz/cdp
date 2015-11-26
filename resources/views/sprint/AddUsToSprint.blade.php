@extends('default')

@section('content')
<div class="container">

    	<h2> User Stories list </h2>


@if(count($userstories))
        <?php $first = true; ?>
		@foreach($userstories as $us)
			@if($us->sprint_id == $idSprint)
                @if($first)
                <TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">
                    <TR>
                        <TH> N° </TH>
                        <TH> Description </TH>
                        <TH> Priority </TH>
                        <TH> Difficulty </TH>
                        <th> Delete </th>
                    </TR>
                    <?php $first = false; ?>
                @endif
			<TR>
				<TH> {{$us->id}} </TH>
				<TD> {{$us->description}} </TD>
				<TD> {{$us->priority}} </TD>
				<TD> {{$us->difficulty}} </TD>
				<td>
					<a href= {{ URL::action("UsSprintController@delete", [$us->project_id, $idSprint, $us->id]) }} class= 'btn btn-danger btn-circle'>
						<span class="glyphicon glyphicon-remove"></span>
					</a>
				</td>

			</TR>
			@endif
		@endforeach

	</TABLE>

<p> Select userstories you want to add to the project </p>

<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">
		<TR>
			<TH> N° </TH>
			<TH> Description </TH>
            <TH> Priority </TH>
            <TH> Difficulty </TH>
			<th> Add</th>
		</TR>

		@foreach($userstories as $us)
		  @if($us->sprint_id == 0)
			<TR>
				<TH> {{$us->id}} </TH>
				<TD> {{$us->description}} </TD>
				<TD> {{$us->priority}} </TD>
				<TD> {{$us->difficulty}} </TD>
				<td>
					<a href="{{ URL::action("UsSprintController@add", [$us->project_id, $us->id, $idSprint] ) }}" class="btn btn-primary btn-xs" > Add </a>
				</td>

			</TR>
		  @endif
		@endforeach

	</TABLE>
@else
<p> All the userstories are assigned. </p>
@endif
<a href= {{ URL::action("SprintController@listSprint", [$idProject]) }} class= 'btn btn-info '> show Sprint List</a>
</div>
</div>
@stop