@extends('link-exchange.layout')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-horizontal" method="post" action="{{ route('link-exchange.store') }}">
				<legend>แลกลิงก์</legend>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Website</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" placeholder="ชื่อเว็บไซต์" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">URL</label>
			    <div class="col-sm-10">
			      <input type="text" name="url" class="form-control" placeholder="URL ของเว็บไซต์" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button class="btn btn-success">Submit</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
@endsection