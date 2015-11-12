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
					<th class="text-center" width="5px">ลำดับ</th>
					<th class="text-center" width="100px">เลขที่</th>
					<th>ชื่อ - สกุล</th>
					<th class="text-center">ชื่อเล่น</th>
					<th class="text-center">ค่าย</th>
					<th class="text-center">สถานะ</th>
					<th class="text-center">การกระทำ</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				@foreach($applicants as $applicant)
				<?php $profile = \App\Applicant::findOrFail($applicant->applicant_id); ?>
				<tr>
					<td class="text-center">{{ $i++ }}</td>
					<td class="text-center">{{ str_pad($profile->id, 4, 0, STR_PAD_LEFT) }}</td>
					<td>
						@if($profile->proof_check[1] == 1)
              <i class="fa fa-check-circle text-success no-margin"></i>
            @elseif($profile->proof_check[1] == 2)
              <i class="fa fa-check-circle text-danger no-margin"></i>
            @elseif($profile->transfer_slip == "")
              <i class="fa fa-check-circle text-muted no-margin"></i>
            @else
              <i class="fa fa-check-circle text-orange no-margin"></i>
            @endif
            @if($profile->proof_check[0] == 1)
              <i class="fa fa-check-circle text-success no-margin"></i>
            @elseif($profile->proof_check[0] == 2)
              <i class="fa fa-check-circle text-danger no-margin"></i>
            @elseif($profile->transcript == "")
              <i class="fa fa-check-circle text-muted no-margin"></i>
            @else
              <i class="fa fa-check-circle text-orange no-margin"></i>
            @endif
          	{{ $profile->prefix }}{{ $profile->firstname }} {{ $profile->lastname }}
          </td>
					<td class="text-center" >{{ $profile->nickname }}</td>
					<td class="text-center">{{ $profile->getCampName() }}</td>
					<td class="text-center">
						@if($applicant->active)
							<span class="label label-success">ตัวจริง</span>
						@else
							<span class="label label-default">สำรอง (หรือสละสิทธิ์)</span>
						@endif
					</td>
					<td class="text-center">
						<a class="btn btn-xs btn-default" href="{{ route('backend.confirmation.show', $profile->id) }}"><i class="fa fa-eye"></i>เปิดดู</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="box-footer text-right">
		
	</div>
</div>
</div>

@endsection
