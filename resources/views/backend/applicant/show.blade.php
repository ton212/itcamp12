@extends('backend.layout')

@section('content')
	<div class="row">
		<div class="col-md-7 col-md-offset-1">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>ข้อมูลใบสมัคร</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">
							<div class="field">
								<span class="title">คำนำหน้า</span>
								<span class="value">{{ $applicant->prefix }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ชื่อ</span>
								<span class="value">{{ $applicant->firstname }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">นามสกุล</span>
								<span class="value">{{ $applicant->lastname }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ชื่อเล่น</span>
								<span class="value">{{ $applicant->nickname }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="field">
								<span class="title">เพศ</span>
								<span class="value">{{ $applicant->gender }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">อีเมล</span>
								<span class="value">{{ $applicant->email }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เลขประจำตัวประชาชน</span>
								<span class="value">{{ $applicant->getFormattedIdCard() }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">วันเกิด</span>
								<span class="value">{{ $applicant->birthday }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">เบอร์ติดต่อ</span>
								<span class="value">{{ $applicant->getFormattedTel() }}</span>
							</div>
						</div>
						<div class="col-md-5">
							<div class="field">
								<span class="title">Facebook</span>
								<span class="value"><a href="https://fb.com/{{ $applicant->facebook }}">www.facebook.com/{{ $applicant->facebook }}</a></span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">ศาสนา</span>
								<span class="value">{{ $applicant->religion }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="field">
								<span class="title">ระดับชั้น</span>
								<span class="value">{{ $applicant->class }}</span>
							</div>
						</div>
						<div class="col-md-10">
							<div class="field">
								<span class="title">โรงเรียน</span>
								<span class="value">{{ $applicant->school }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">ผู้ปกครอง</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เกี่ยวข้องเป็น</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เบอร์ติดต่อ</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">โรคประจำตัว</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">แพ้อาหาร</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">แพ้ยา</span>
								<span class="value">{{ $applicant->medical }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="field">
								<span class="title">ปพ.1</span>
								<span class="value">http://www.itcamp.in.th/12/storage/uploads/transcript/{{ $applicant->transcript }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-search"></i>ตรวจใบสมัคร</h3>
				</div>
				<div class="box-body text-center">
					<p><strong>สถานะใบสมัคร:</strong> รอการตรวจใบสมัคร (Pre-check)</p>
					<p>
						<a href="#" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i>ใบสมัครสมบูรณ์</a>
						<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i>ใบสมัครไม่สมบูรณ์</a>
					</p>
					<p>
						<a href="{{ route('backend.applicant.scoring', $applicant->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-question-circle"></i>ตรวจคำตอบ</a>
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection

@endsection