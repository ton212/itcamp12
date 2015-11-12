@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="bs-wizard">
					<div class="col-xs-3 bs-wizard-step">
						<div class="text-center bs-wizard-stepnum">เปิดรับสมัคร</div>
						<div class="progress"><div class="progress-bar" style="width: 100%;"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">สิ้นสุดวันที่ 31 ตุลาคม 2558</div>
					</div>
					<div class="col-xs-3 bs-wizard-step"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ตรวจใบสมัคร</div>
						<div class="progress"><div class="progress-bar" style="width: 100%;"></div></div>
						<span href="#" class="bs-wizard-dot"></span>
						<div class="bs-wizard-info text-center">วันที่ 1 - 5 พฤศจิกายน 2558</div>
					</div>
					<div class="col-xs-3 bs-wizard-step"><!-- complete -->
						<div class="text-center bs-wizard-stepnum">ประกาศผล & ยืนยันสิทธิ์</div>
						<div class="progress"><div class="progress-bar" style="width: 50%;"></div></div>
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
				<span class="info-box-number">ทั้งหมด {{ $all_applicant }} คน</span>
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
				<span class="info-box-text">ใบสมัครผ่านแล้ว</span>
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
					เหลือ 120 คน
				</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
</div>

<div class="row">
	<div class="col-md-3">
		<div class="box box-success">
                <div class="box-header">
                <i class="glyphicon glyphicon-th-list"></i>
                  <h3 class="box-title">สรุปยอดแต่ละค่าย (แบ่งชายและหญิง)</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tbody><tr>
                      <th>ค่าย</th>
                      <th>ชาย</th>
                      <th>หญิง</th>
                      <th style="width: 40px">รวม</th>
                    </tr>
                    <tr>
                      <td>Applicationosaurus</td>
                      <td>{{ $app_male_count }}</td>
    				  <td>{{ $app_female_count }}</td>
    				  <td>{{ $app_male_count+$app_female_count}}</td>
                    </tr>
                    <tr>
                    	<td>GameMakernodon</td>
                        <td>{{ $game_male_count }}</td>
						<td>{{ $game_female_count }}</td>
    					<td>{{ $game_male_count+$game_female_count}}</td>
                    </tr>
                    <tr>
                    <td>T-Rex Network</td>
   					<td>{{ $net_male_count }}</td>
    				<td>{{ $net_female_count }}</td>
    				<td>{{ $net_male_count+$net_female_count}}</td>
                    </tr>
                    <tr>
                      <td>Iot-Ceramus</td>
    					<td>{{ $iot_male_count }}</td>
    					<td>{{ $iot_female_count }}</td>
    					<td>{{ $iot_male_count+$iot_female_count }}</td>
                    </tr>
                    <tr>
                    	<td></td>
                    	<td>{{ $app_male_count+$game_male_count+$net_male_count+$iot_male_count }}</td>
    					<td>{{ $app_female_count+$game_female_count+$net_female_count+$iot_female_count }}</td>
    					<td>{{ $app_male_count+$game_male_count+$net_male_count+$iot_male_count+$app_female_count+$game_female_count+$net_female_count+$iot_female_count }}</td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div>
	</div>
	<div class="col-md-3">
		<div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">สรุปยอดจำแนกตามเพศสำหรับผู้ที่ผ่านการคัดเลือก</h3>
                   <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tbody><tr>
                      <th>ค่าย</th>
                      <th>ชาย</th>
                      <th>หญิง</th>
                      <th>รวม</th>
                    </tr>
                    <tr>
                    	<td>Applicationsaurus</td>
                    	<td>{{ $app_male->count() }} คน</td>
                    	<td>{{ $app_female->count() }} คน</td>
                    	<td>{{ $app_male->count()+$app_female->count() }} คน</td>
                    </tr>
                    <tr>
                    	<td>GameMakernodon</td>
                    	<td>{{ $game_male->count() }} คน</td>
                    	<td>{{ $game_female->count() }} คน</td>
                    	<td>{{ $game_male->count()+$game_female->count() }} คน</td>
                    </tr>
                    <tr>
                    	<td>T-Rex Network</td>
                    	<td>{{ $net_male->count() }} คน</td>
                    	<td>{{ $net_female->count() }} คน</td>
                    	<td>{{ $net_male->count()+$net_female->count() }} คน</td>
                    </tr>
                    <tr>
                    	<td>Iot-Ceramus</td>
                    	<td>{{ $iot_male->count() }} คน</td>
                    	<td>{{ $iot_female->count() }} คน</td>
                    	<td>{{ $iot_male->count()+$iot_female->count() }} คน</td>
                    </tr>
                    <tr>
                    	<td></td>
                    	<td>{{ $camp_male->count() }} คน</td>
                    	<td>{{ $camp_female->count() }} คน</td>
                    	<td>{{ $camp_all->count() }} คน</td>
                    </tr>
                  </tbody></table>
                </div><!-- /.box-body -->
                </div>
              </div>
	</div>
</div>
		
@endsection