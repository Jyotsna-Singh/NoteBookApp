@extends('layouts.base')

@section('content')
 <div class="pull-xs-left">
                    <a class="btn btn-info" href="{{route('notebooks.show',$note->notebook_id)}}" role="button">
                         Back
                    </a>
                     </div>
             <br><br>
	<div class="container">
		<div class="row">
			<h3 class="display-3">
				{{$note->title}}
			</h3>
			<p>
				{{$note->body}}
			</p>
		</div>
	</div>

@endsection