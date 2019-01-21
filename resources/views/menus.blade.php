@extends('layouts.layout')
@section('content')
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<!-- <form action="/rego" method="post">  -->
					{{ csrf_field() }}
					<div class="form-group">
						<label class="label label-default " for="">Name</label>
						<input type="text" name="name" class="form-control name" >
					</div>
					<div class="form-group">
						<label class="label label-default" for="">Surname</label>
						<input type="text" name="surname" class="form-control">
					</div>
					<div class="form-group">
						<label class="label label-default" for="">Age</label>
						<input type="text" name="age" class="form-control">
					</div>
					<input onclick="send()" type="submit" class="btn btn-primary send">
				<!-- </form> -->
			</div>
		</div>
		<div class="aj_here"></div>
	</div>
	<script>
		function send(){
			var name = $(".name").val();
			console.log(name);
			$.post( "/ajax",{ name : name, _token : CSRF_TOKEN }, function( data ) {
  				$('.aj_here').html(data)
			});
		}
	</script>
@endsection