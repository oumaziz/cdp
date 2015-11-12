@extends('default')

@section('content')
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
					<h2> Sprint List</h2>

					<div class="panel-body">
						@if(count($sprint))
							<TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">

								<TR>
									<TH> N° </TH>
									<TH> Start Date  </TH>
									<TH> End Date </TH>
									<th> Update</th>
									<th> Delete</th>
									<th> Display</th>
								</TR>
								<?php $i=1; ?>
								@foreach($sprint as $us)
									<TR>
										<TH> <?php echo "Sprint   "; echo $i++; ?> </TH>
										<TD> {{$us->StartDate}} </TD>
										<TD> {{$us->EndDate}} </TD>
										<td> <a href= {{ URL::action("SprintController@edit", [$us->project_id , $us->id]) }} class= 'btn btn-primary btn-xs'> Update</a> </td>
										<td> <a href= {{ URL::action("SprintController@edit", [$us->id]) }} class= 'btn btn-primary btn-xs'> Delete</a> </td>
										<td> <a href= {{ URL::action("Taches\TachesController@index",[$us->id]) }} class= 'btn btn-primary btn-xs'> Display</a> </td>
	
									</TR>
                          
								@endforeach
							</TABLE>
						@else
						<p> Aucun sprint ajouté!! </p>
						@endif

						@if(!auth()->guest())
							<!-- <a href="{{ url('backlog/userstory/create') }}" class= 'btn btn-primary '> Add User Story</a>  -->
							<a href= {{ URL::action("SprintController@show", [$idProject]) }} class= 'btn btn-primary btn-xs'> Add Sprint</a>
						@endif


							


					</div>
				
			</div>
		</div>
	</div>
@endsection


