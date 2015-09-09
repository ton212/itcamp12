@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="bs-wizard">
					<div class="col-xs-3 bs-wizard-step">
						<div class="text-center bs-wizard-stepnum">เปิดรับสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">สิ้นสุดวันที่ 31 ตุลาคม 2558</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ตรวจใบสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">วันที่ 1 - 5 พฤศจิกายน 2558</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ประกาศผล & ยืนยันสิทธิ์</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">วันที่ 6 พฤศจิกายน 2558</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
						<div class="text-center bs-wizard-stepnum">ปิดระบบ</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">วันที่ 20 ธันวาคม 2558</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-aqua">
			<span class="info-box-icon"><i class="fa no-margin fa-users"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">จำนวนผู้สมัคร</span>
				<span class="info-box-number">สัปดาห์นี้ {{ $all_applicant }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: 100%"></div>
				</div>
				<span class="progress-description">
					จากจำนวนทั้งหมด {{ $all_applicant }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-yellow">
			<span class="info-box-icon"><i class="fa no-margin fa-child"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ตรวจสอบใบสมัครแล้ว</span>
				<span class="info-box-number">{{ $chk_applicant }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{($chk_applicant/$all_applicant)*100}}%"></div>
				</div>
				<span class="progress-description">
					จากจำนวนผู้สมัครทั้งหมด {{ $all_applicant }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-green">
			<span class="info-box-icon"><i class="fa no-margin fa-check-circle"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ตรวจคำตอบแล้ว</span>
				<span class="info-box-number">{{ $chk_answer }} คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: {{($chk_answer/$chk_applicant)*100}}%"></div>
				</div>
				<span class="progress-description">
					เหลือ {{ $chk_applicant }} คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-red">
			<span class="info-box-icon"><i class="fa no-margin fa-flag"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ยืนยันสิทธิ์</span>
				<span class="info-box-number">0 คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: 0%"></div>
				</div>
				<span class="progress-description">
					เหลือ 0 คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
</div>

<div class="row">
	
</div>

@endsection