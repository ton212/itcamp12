@extends('backend.layout')

@section('content')
	<div class="row">
		<div class="col-xs-9">
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
						<div class="col-md-4">
							<div class="field">
								<span class="title">ระดับชั้น</span>
								<span class="value">{{ $applicant->academic['grade'] }} ({{ $applicant->academic['class'] }})</span>
							</div>
						</div>
						<div class="col-md-8">
							<div class="field">
								<span class="title">โรงเรียน</span>
								<span class="value">{{ $applicant->academic['school'] }} ({{ $applicant->academic['location'] }})</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">โรคประจำตัว</span>
								<span class="value">{{ $applicant->medical['disease'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">แพ้อาหาร</span>
								<span class="value">{{ $applicant->medical['food'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">แพ้ยา</span>
								<span class="value">{{ $applicant->medical['med'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-9">
							<div class="field">
								<span class="title">ปพ.1</span>
								<span class="value">http://www.itcamp.in.th/12/storage/uploads/transcript/{{ $applicant->transcript }}</span>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="field">
								<span class="title">ขนาดเสื้อ</span>
								<span class="value">{{ $applicant->shirt_size }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-phone"></i>ข้อมูลการติดต่อ</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">บ้านเลขที่</span>
								<span class="value">{{ $applicant->address['house_no'] }}</span>
							</div>
						</div>
						<div class="col-md-2">
							<div class="field">
								<span class="title">หมู่</span>
								<span class="value">{ ['village_no'] }</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ถนน</span>
								<span class="value">{{ $applicant->address['street'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">แขวง</span>
								<span class="value">{{ $applicant->address['sub_district'] }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เขต</span>
								<span class="value">{{ $applicant->address['district'] }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">จังหวัด</span>
								<span class="value">{{ $applicant->address['province'] }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user-secret"></i>ข้อมูลผู้ปกครอง</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-4">
							<div class="field">
								<span class="title">ชื่อ</span>
								<span class="value">{{ $applicant->parent['firstname'] }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">นามสกุล</span>
								<span class="value">{{ $applicant->parent['lastname'] }}</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="field">
								<span class="title">เกี่ยวข้องเป็น</span>
								<span class="value">{{ $applicant->parent['relate'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">บ้านเลขที่</span>
								<span class="value">{{ $applicant->parent_addr['house_no'] }}</span>
							</div>
						</div>
						<div class="col-md-2">
							<div class="field">
								<span class="title">หมู่</span>
								<span class="value">{ ['village_no'] }</span>
							</div>
						</div>
						<div class="col-md-7">
							<div class="field">
								<span class="title">ถนน</span>
								<span class="value">{{ $applicant->parent_addr['street'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="field">
								<span class="title">แขวง</span>
								<span class="value">{{ $applicant->parent_addr['sub_district'] }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">เขต</span>
								<span class="value">{{ $applicant->parent_addr['district'] }}</span>
							</div>
						</div>
						<div class="col-md-3">
							<div class="field">
								<span class="title">จังหวัด</span>
								<span class="value">{{ $applicant->parent_addr['province'] }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-book"></i>ข้อมูลความสนใจ</h3>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">คณะ</span>
								<span class="value">{{ $applicant->university_interesting[0]['firstname'] }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">สถาบัน</span>
								<span class="value">{{ $applicant->university_interesting[0]['lastname'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">คณะ</span>
								<span class="value">{{ $applicant->university_interesting[1]['firstname'] }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">สถาบัน</span>
								<span class="value">{{ $applicant->university_interesting[1]['lastname'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="field">
								<span class="title">คณะ</span>
								<span class="value">{{ $applicant->university_interesting[2]['firstname'] }}</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="field">
								<span class="title">สถาบัน</span>
								<span class="value">{{ $applicant->university_interesting[2]['lastname'] }}</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="field">
								<span class="title">ประวัติค่าย</span>
								<span class="value">{{ $applicant->camp_history }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-search"></i>ตรวจใบสมัคร</h3>
				</div>
				<div class="box-body text-center">
					<strong>สถานะใบสมัคร:</strong> {{ $applicant->getStatus() }}
					@if(!$applicant->pre_check)
					<p style="margin-top: 10px;">
						<a href="{{ route('backend.applicant.show', $applicant->id).'/pre-check/1' }}" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i>ใบสมัครสมบูรณ์</a>
						<a href="{{ route('backend.applicant.show', $applicant->id).'/pre-check/2' }}" class="btn btn-sm btn-danger"><i class="fa fa-times-circle"></i>ใบสมัครไม่สมบูรณ์</a>
					</p>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection

@endsection