@extends('backend.applicant.list.layout')

@section('data')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><i class="fa fa-folder-open"></i>ใบสมัครทั้งหมด <small>@if(Request::get('action') == 'search')(พบ {{ $result_count }} รายการ)@endif</small></h3>
	</div>
	<div class="box-body table-responsive no-padding">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th class="text-center" width="100px">เลขที่</th>
					<th>ชื่อ - สกุล</th>
					<th class="text-center">ชื่อเล่น</th>
					<th class="text-center">อีเมล</th>
					<th class="text-center">ความสมบูรณ์</th>
					<th class="text-center">ส่งใบสมัครเมื่อ</th>
					<th class="text-center">การกระทำ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="text-center">001</td>
					<td><a href="{{ route('backend.applicant.show', 1) }}">นายต้นสาย สิงห์กังวาน</a></td>
					<td class="text-center">ต้น</td>
					<td class="text-center">t@iton.in.th</td>
					<td class="text-center text-green"><i class="fa fa-check-circle"></i></td>
					<td class="text-center">12/07/2015 11:30 AM</td>
					<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i>เปิดดู</a></td>
				</tr>
				<tr>
					<td class="text-center">002</td>
					<td><a href="{{ route('backend.applicant.show', 2) }}">นายต้นสาย สิงห์กังวาน</a></td>
					<td class="text-center">ต้น</td>
					<td class="text-center">t@iton.in.th</td>
					<td class="text-center text-danger"><i class="fa fa-times-circle"></i></td>
					<td class="text-center">12/07/2015 11:30 AM</td>
					<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i>เปิดดู</a></td>
				</tr>
				<tr>
					<td class="text-center">003</td>
					<td><a href="{{ route('backend.applicant.show', 3) }}">นายต้นสาย สิงห์กังวาน</a></td>
					<td class="text-center">ต้น</td>
					<td class="text-center">t@iton.in.th</td>
					<td class="text-center text-muted"><i class="fa fa-clock-o"></i></td>
					<td class="text-center">12/07/2015 11:30 AM</td>
					<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i>เปิดดู</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="box-footer text-right">
		Pagination
	</div>
</div>

@endsection