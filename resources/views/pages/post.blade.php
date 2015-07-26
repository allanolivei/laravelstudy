@extends( 'layouts.master' )

@section('content')

	<br>
	<div class="panel panel-default">
		<div class="panel-heading">
			Lista de posts
		</div>
		<div class="panel-body">
			
			<div class="row">
			@foreach( $posts as $post )
				<div class="col-md-3">
					<div class="thumbnail" style="height: 490px; position: relative;">
						<img src="{{ $post->thumbnail }}" style="width: 242px; height: 200px ">
						<div class="caption">
							<h3>{{ $post->title }}</h3>
							<p>{{ $post->text }}</p>
							<p class="pull-right" style="position: absolute; bottom: 0; right: 10px"><a href="#" class="btn btn-primary" role="button">Veja mais</a>
						</div>
					</div>
				</div>
			@endforeach
			</div>


			

		</div>
	</div>

@endsection