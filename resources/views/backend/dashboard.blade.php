@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="bs-wizard">
					<div class="col-xs-3 bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">เปิดรับสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ตรวจใบสมัคร</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ประกาศผล & ยืนยันสิทธิ์</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
					</div>
					<div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
						<div class="text-center bs-wizard-stepnum">ปิดระบบ</div>
						<div class="progress"><div class="progress-bar"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
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
				<span class="info-box-number">0 คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: 100%"></div>
				</div>
				<span class="progress-description">
					สัปดาห์นี้ 0 คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-green">
			<span class="info-box-icon"><i class="fa no-margin fa-check-circle"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ตรวจคำตอบแล้ว</span>
				<span class="info-box-number">0 คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				</div>
				<span class="progress-description">
					เหลือ 0 คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box bg-yellow">
			<span class="info-box-icon"><i class="fa no-margin fa-child"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">ผ่านการคัดเลือก</span>
				<span class="info-box-number">0 คน</span>
				<div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				</div>
				<span class="progress-description">
					จาก 50 คน
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
					<div class="progress-bar" style="width: 70%"></div>
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