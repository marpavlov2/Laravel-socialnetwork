@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default ">
			<div class="panel-heading">
				Create article
			</div>
			<div class="panel-body">
				<form action="/articles" method="POST">
						{{ csrf_field()}}
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>
					<div class="checkbox">
						<label> 
							<input type="checkbox" name="live">Live
						</label>
					</div>
					<div class="form-gorup">
						<label for="posts_on">Posts on</label>
						<input type="datetime-local" name="posts_on" class="form-control">
					</div>
				</div>
						<input type="submit" class="btn btn-success pull-right">					
				</form>

			</div>
		</div>
	</div>
</div>
@endsection