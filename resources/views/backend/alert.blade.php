@if(Session::has('alert_success'))
	<div class="alert alert-success" role="alert">
		<i class="glyphicon glyphicon-ok-sign"></i> {{{ Session::get('alert_success') }}}
	</div>
@endif

@if(Session::has('alert_info'))
	<div class="alert alert-info" role="alert">
		<i class="glyphicon glyphicon-info-sign"></i> {{{ Session::get('alert_info') }}}
	</div>
@endif

@if(Session::has('alert_warning'))
	<div class="alert alert-warning" role="alert">
		<i class="glyphicon glyphicon-question-sign"></i> {{{ Session::get('alert_warning') }}}
	</div>
@endif

@if(Session::has('alert_danger'))
	<div class="alert alert-danger" role="alert">
		<i class="glyphicon glyphicon-warning-sign"></i> {{{ Session::get('alert_danger') }}}
	</div>
@endif

@if(count($errors))
<div class="alert alert-danger alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h4><i class="icon fa fa-ban"></i>ข้อผิดพลาด</h4>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif