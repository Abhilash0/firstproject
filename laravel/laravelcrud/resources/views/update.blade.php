@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="POST" action="{{ url('/edit', array($articles->id)) }}">
				  {{csrf_field()}}
				  <fieldset>
				    <legend>Laravel</legend>
				    @if(count($errors) >0 )
				    	@foreach($errors->all() as $error)
				    		<div class="alert alert-danger">
				    			{{$error}}
				    		</div>
				    	@endforeach
				    @endif
				    <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
				      <div class="col-lg-10">
				        <input type="text" class="form-control" name="title" id="inputEmail" value="<?php echo $articles->title; ?>" placeholder="Title">
				      </div>
				    </div>
				   <div class="form-group">
				      <label for="inputPassword" class="col-lg-2 control-label">Description</label>
				      <div class="col-lg-10">
				        <textarea class="form-control" name="description" placeholder="Description"><?php echo $articles->description; ?></textarea>
				      </div>
				    </div>
				    
				 	<div class="form-group">
				 		<div class="col-lg-10 col-lg-offset-2">
				 			<button type="submit" class="btn btn-primary">Update</button>
				 			<a href="{{ url('/') }}" class="btn btn-primary">Back</a>
				 		</div>
				 	</div>
				  </fieldset>
				</form>
			</div>
		</div>
	</div> 
@include('inc.footer')	