@extends('default')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2> Liste des commits </h2>


            @if(count($commits))

                <TABLE cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed table-bordered" id="userstories">


                    <TR>
                        <TH> Message du commit </TH>
                        <TH> Développeur </TH>
                        <TH> Date </TH>
                    </TR>

                    @for($i = 0; $i < count($commits); $i++)
                        <TR>
                            <TH> <a href="{{$commits[$i]["url"]}}">{{$commits[$i]["message"]}}</a> </TH>
                            <TD> {{$commits[$i]["user"]}} </TD>
                            <TD> {{date("d-m-Y H:i:s", strtotime($commits[$i]["date"]))}} </TD>
                        </TR>

                    @endfor

                </TABLE>
            @else
                <p> Aucun commit n'a été fait sur le dépot pour cette tâche pour le moment.</p>
            @endif
        </div>
    </div>
@stop