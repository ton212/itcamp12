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
					<th class="text-center">ความสมบูรณ์ใบสมัคร</th>
					<th class="text-center">ส่งใบสมัครเมื่อ</th>
					<th class="text-center">การกระทำ</th>
				</tr>
			</thead>
			<tbody>
				@forelse($applicants as $applicant)
				<tr>
					<td class="text-center">{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</td>
					<td><a href="{{ route('backend.applicant.show', $applicant->id) }}">{{ $applicant->prefix.$applicant->firstname.' '.$applicant->lastname }}</a></td>
					<td class="text-center"> {{ $applicant->nickname }}</td>
					<td class="text-center">{{ $applicant->email }}</td>
					<td class="text-center">
						@if($applicant->pre_check == 0)
							<span class="label label-warning"><i class="fa fa-clock-o"></i>รอการตรวจ</span>
						@elseif($applicant->pre_check == 1)
							<span class="label label-success"><i class="fa fa-check-circle"></i>ผ่าน</span>
						@else
							<span class="label label-danger"><i class="fa fa-times-circle"></i>ไม่ผ่าน</span>
						@endif
					</td>
					<td class="text-center">{{ $applicant->created_at }}</td>
					<td class="text-center"><a class="btn btn-xs btn-default" href="{{ route('backend.applicant.show', $applicant->id) }}"><i class="fa fa-eye"></i>เปิดดู</a></td>
				</tr>
				@empty
				<tr>
					<td colspan="7" class="text-center">ไม่มีใบสมัครในระบบ</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</div>
	<div class="box-footer text-right">
		{{ $applicants->render() }}
	</div>
</div>

@endsection