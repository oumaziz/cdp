@extends('default')

@section('content')
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<!-- <div class="panel-heading">Backlog</div>  -->
					<h2>Backlog</h2>

					<div class="panel-body">
						@if(count($userstories))
							<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">

								<TR>
									<TH> N° </TH>
									<TH> Description </TH>
									<TH> Priorité </TH>
									<TH> Difficulté </TH>
									@if(!auth()->guest())
									<th> Update</th>
									<th> Delete</th>
									<th> Is Finish </th>
									@endif
								</TR>
								<?php $i=1; ?>
								@foreach($userstories as $us)
									<TR>
										<TH> <?php echo $i++; ?> </TH>
										<TD> {{$us->description}} </TD>
										<TD> {{$us->priority}} </TD>
										<TD> {{$us->difficulty}} </TD>
										@if(!auth()->guest())
										<td> <a href= {{ URL::action("UsController@modify", [$us->id]) }} class= 'btn btn-warning btn-xs'> Update</a> </td>
										<td> <a href= {{ URL::action("UsController@remove", [$us->id]) }} class= 'btn btn-danger btn-xs'> Delete</a> </td>
										<td> 
										@if($us->status == 1)
											<a href= {{ URL::action("UsController@finish", [$us->project_id, $us->id]) }} class="btn btn-success btn-circle"><span class="glyphicon glyphicon-ok"></span></a>
										@endif
										</td>
										@endif
									</TR>
                          
								@endforeach
							</TABLE>
						@else
						<p> Aucune user story ajoutée!! </p>
						@endif

						@if(!auth()->guest())
							<!-- <a href="{{ url('backlog/userstory/create') }}" class= 'btn btn-primary '> Add User Story</a>  -->
							<a href= {{ URL::action("UsController@create", [$idProject]) }} class= 'btn btn-primary btn-xs'> Add User Story</a>
						@endif
						</br>
					</br>
							<a href= {{ URL::action("SprintController@listSprint", [$idProject]) }} class= 'btn btn-info '> show Sprint List</a>
							<a href="{{ URL::previous()}}" class="btn btn-default" >Back</a>
						

				</div>				
			</div>
		</div>
	</div>
@endsection


