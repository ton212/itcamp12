@extends('backend.layout')

@section('content')
<div class="container">
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-folder-open"></i>ใบสมัครทั้งหมด <small></small></h3>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th class="text-center" width="100px">เลขที่</th>
					<th>ชื่อ - สกุล</th>
					<th class="text-center">ชื่อเล่น</th>
					<th class="text-center">ค่าย</th>
					<th class="text-center">สถานะ</th>
					<th class="text-center">การกระทำ</th>
				</tr>
			</thead>
			<tbody>
							
			</tbody>
		</table>
	</div>
	<div class="box-footer text-right">
		
	</div>
</div>
</div>

@endsection
