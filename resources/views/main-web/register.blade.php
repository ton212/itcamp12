<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="register_assets/css/bootstrap.min.css">
	<!-- StyleSheet -->
	<link rel="stylesheet" href="register_assets/css/style.css">
	<title>แบบฟอร์ม สมัครไอทีแคมป์ | ค่ายย่อย "{{ $camp_name }}"</title>
	<style>
		body {
			background: url(register_assets/img/{{ $bg }}.png);
			background-attachment: fixed;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
		<form id="contactForm" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="page-header text-center">
				<img src="register_assets/img/{{ $logo }}.png" alt="">
				<h1>แบบฟอร์ม สมัครไอทีแคมป์<br><small>ค่ายย่อย "{{ $camp_name }}"</small></h1>
				<h2 class="text-left">ส่วนที่ 1 ข้อมูลทั่วไปของผู้สมัคร </h2>
			</div>
			<h3>ข้อมูลส่วนตัว</h3>
			<div class="row control-group">
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>คำนำหน้า</label>
					<select name="prefix" type="text" class="form-control" placeholder="คำนำหน้า">
						<option>คำนำหน้า</option>
						<option>เด็กชาย</option>
						<option>เด็กหญิง</option>
						<option>นาย</option>
						<option>นางสาว</option>
					</select>
				</div>
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>ชื่อ</label>
					<input name="firstname" type="text" class="form-control" placeholder="ชื่อ" required>
				</div>
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>นามสกุล</label>
					<input name="lastname" type="text" class="form-control" placeholder="นามสกุล" required>
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>ชื่อเล่น</label>
					<input name="nickname" type="text" class="form-control" placeholder="ชื่อเล่น" required>
				</div>
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>วันเกิด</label>
					<select name="birth_d" type="text" class="form-control" placeholder="วันเกิด">
						<option>วันเกิด</option>
						<option value="01">1</option>
						<option value="02">2</option>
						<option value="03">3</option>
						<option value="04">4</option>
						<option value="05">5</option>
						<option value="06">6</option>
						<option value="07">7</option>
						<option value="08">8</option>
						<option value="09">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>เดือนเกิด</label>
					<select name="birth_m" type="text" class="form-control" placeholder="เดือนเกิด">
						<option>เดือนเกิด</option>
						<option value="01">มกราคม</option>
						<option value="02">กุมภาพันธ์</option>
						<option value="03">มีนาคม</option>
						<option value="04">เมษายน</option>
						<option value="05">พฤษภาคม</option>
						<option value="06">มิถุนายน</option>
						<option value="07">กรกฎาคม</option>
						<option value="08">สิงหาคม</option>
						<option value="09">กันยายน</option>
						<option value="10">ตุลาคม</option>
						<option value="11">พฤศจิกายน</option>
						<option value="12">ธันวาคม</option>
					</select>
				</div>
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>ปีเกิด</label>
					<select name="birth_y" type="text" class="form-control" placeholder="ปีเกิด">
						<option>ปีเกิด</option>
						<option value="2558">2558</option>
						<option value="2557">2557</option>
						<option value="2556">2556</option>
						<option value="2555">2555</option>
						<option value="2554">2554</option>
						<option value="2553">2553</option>
						<option value="2552">2552</option>
						<option value="2551">2551</option>
						<option value="2550">2550</option>
						<option value="2549">2549</option>
						<option value="2548">2548</option>
						<option value="2547">2547</option>
						<option value="2546">2546</option>
						<option value="2545">2545</option>
						<option value="2544">2544</option>
						<option value="2543">2543</option>
						<option value="2542">2542</option>
						<option value="2541">2541</option>
						<option value="2540">2540</option>
						<option value="2539">2539</option>
						<option value="2538">2538</option>
						<option value="2537">2537</option>
						<option value="2536">2536</option>
						<option value="2535">2535</option>
						<option value="2534">2534</option>
					</select>
				</div>
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>เพศ</label>
					<select name="gender" type="text" class="form-control" placeholder="คำนำหน้า">
						<option>เพศ</option>
						<option value="ชาย">ชาย</option>
						<option value="หญิง">หญิง</option>
					</select>
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>ศาสนา</label>
					<input name="religion" type="text" class="form-control" placeholder="ศาสนา" required>
				</div>
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>เลขประจำตัวประชาชน</label>
					<input name="id_card" type="text" class="form-control" placeholder="เลขประจำตัวประชาชน" required>
				</div>
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>Facebook</label>
					<input name="facebook" type="text" class="form-control" placeholder="Facebook (กรอกเฉพาะ username (ดูจาก URL หน้าโปรไฟล์ของน้อง))" required>
				</div>

			</div>
			<h3>ที่อยู่ปัจจุบันที่สามารถติดต่อได้</h3>
			<div class="row control-group">
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>บ้านเลขที่</label>
					<input name="address[house_no]" type="text" class="form-control" placeholder="บ้านเลขที่" required>
				</div>
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>หมู่</label>
					<input name="address[village_no]" type="text" class="form-control" placeholder="หมู่" >
				</div>
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>ถนน</label>
					<input name="address[street]" type="text" class="form-control" placeholder="ถนน" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>แขวง/ตำบล</label>
					<input name="address[sub_district]" type="text" class="form-control" placeholder="แขวง/ตำบล" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>เขต/อำเภอ</label>
					<input name="address[district]" type="text" class="form-control" placeholder="เขต/อำเภอ" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>จังหวัด</label>
					<input name="address[province]" type="text" class="form-control" placeholder="จังหวัด" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>รหัสไปรษณีย์</label>
					<input name="address[postcode]" type="text" class="form-control" placeholder="รหัสไปรษณีย์" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>เบอร์โทรศัพท์</label>
					<input type="text" name="address[tel]" class="form-control" placeholder="เบอร์โทรศัพท์" id="phone" required data-validation-required-message="Please enter your phone number.">
					<p class="help-block text-danger"></p>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>อีเมล</label>
					<input type="text" name="email" class="form-control" placeholder="อีเมล" id="phone" required data-validation-required-message="Please enter your phone number.">
					<p class="help-block text-danger"></p>
				</div>
			</div>
			<h3>การศึกษา</h3>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>ขณะนี้กำลังศึกษาอยู่ในระดับชั้น</label>
					<select name="academic[grade]" type="text" class="form-control" placeholder="ขณะนี้กำลังศึกษาอยู่ในระดับชั้น">
						<option>ขณะนี้กำลังศึกษาอยู่ในระดับชั้น</option>
						<option value="4">มัธยมศึกษาปีที่ 4</option>
						<option value="5">มัธยมศึกษาปีที่ 5</option>
						<option value="6">มัธยมศึกษาปีที่ 6</option>
						<option value="ปวช.">ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
					</select>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>แผนการเรียน (ถ้ามี)</label>
					<input name="academic[class]" type="text" class="form-control" placeholder="แผนการเรียน (ถ้ามี)" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>โรงเรียน / วิทยาลัย</label>
					<input name="academic[school]" type="text" class="form-control" placeholder="โรงเรียน / วิทยาลัย" required>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>จังหวัด</label>
					<input name="academic[location]" type="text" class="form-control" placeholder="จังหวัด" required>
				</div>
			</div>
			<h3>ข้อมูลผู้ปกครอง</h3>
			<div class="row control-group">
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>ชื่อ</label>
					<input name="parent[firstname]" type="text" class="form-control" placeholder="ชื่อ" required>
				</div>
				<div class="form-group col-xs-5 floating-label-form-group controls">
					<label>นามสกุล</label>
					<input name="parent[lastname]" type="text" class="form-control" placeholder="นามสกุล" required>
				</div>
				<div class="form-group col-xs-2 floating-label-form-group controls">
					<label>เกี่ยวข้องเป็น</label>
					<input name="parent[relate]" type="text" class="form-control" placeholder="เกี่ยวข้องเป็น" required>
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>บ้านเลขที่</label>
					<input name="parent[addr][house_no]" type="text" class="form-control" placeholder="ที่อยู่ที่สามารถติดต่อได้ (บ้านเลขที่)" >
				</div>
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>หมู่</label>
					<input name="parent[addr][village_no]" type="text" class="form-control" placeholder="หมู่" >
				</div>
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>ถนน</label>
					<input name="parent[addr][street]" type="text" class="form-control" placeholder="ถนน" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>แขวง/ตำบล</label>
					<input name="parent[addr][sub_district]" type="text" class="form-control" placeholder="แขวง/ตำบล" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>เขต/อำเภอ</label>
					<input name="parent[addr][district]" type="text" class="form-control" placeholder="เขต/อำเภอ" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>จังหวัด</label>
					<input name="parent[addr][province]" type="text" class="form-control" placeholder="จังหวัด" >
				</div>
				<div class="form-group col-xs-3 floating-label-form-group controls">
					<label>รหัสไปรษณีย์</label>
					<input name="parent[addr][postcode]" type="text" class="form-control" placeholder="รหัสไปรษณีย์" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-12 floating-label-form-group controls">
					<label>เบอร์โทรศัพท์ที่สามารถติดต่อได้ในกรณีฉุกเฉิน (ผู้ปกครอง)</label>
					<input type="text" name="parent[tel]" class="form-control" placeholder="เบอร์โทรศัพท์ที่สามารถติดต่อได้ในกรณีฉุกเฉิน (ผู้ปกครอง)" id="phone" required data-validation-required-message="Please enter your phone number.">
					<p class="help-block text-danger"></p>
				</div>
			 </div>
			<h3>ความสนใจ</h3>
			<p style="font-size: 18px;">คณะและมหาวิทยาลัยที่น้องสนใจเข้าศึกษาต่อ (ไม่มีผลต่อการเข้าร่วมโครงการ)</p>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>คณะ</label>
					<input name="university_interesting[0][faculty]" type="text" class="form-control" placeholder="คณะ" required>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>มหาวิทยาลัย / สถาบัน</label>
					<input name="university_interesting[0][university]" type="text" class="form-control" placeholder="มหาวิทยาลัย / สถาบัน" required>
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>คณะ</label>
					<input name="university_interesting[1][faculty]" type="text" class="form-control" placeholder="คณะ" required>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>มหาวิทยาลัย / สถาบัน</label>
					<input name="university_interesting[1][university]" type="text" class="form-control" placeholder="มหาวิทยาลัย / สถาบัน" required>
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>คณะ</label>
					<input name="university_interesting[2][faculty]" type="text" class="form-control" placeholder="คณะ" required>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>มหาวิทยาลัย / สถาบัน</label>
					<input name="university_interesting[2][university]" type="text" class="form-control" placeholder="มหาวิทยาลัย / สถาบัน" required>
				</div>
			</div>
			<p style="font-size: 18px;">น้องเคยเข้าร่วมค่ายของมหาวิทยาลัยหรือไม่ ถ้าเคยน้องช่วยกรอกให้พี่ทีนะครับ :D</p>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>ชื่อค่าย ลำดับที่ 1</label>
					<input name="camp_history[0][name]" type="text" class="form-control" placeholder="ชื่อค่าย ลำดับที่ 1" >
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>จัดโดย</label>
					<input name="camp_history[0][by]" type="text" class="form-control" placeholder="จัดโดย" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>ชื่อค่าย ลำดับที่ 2</label>
					<input name="camp_history[1][name]" type="text" class="form-control" placeholder="ชื่อค่าย ลำดับที่ 2" >
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>จัดโดย</label>
					<input name="camp_history[1][by]" type="text" class="form-control" placeholder="จัดโดย" >
				</div>
			</div>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>ชื่อค่าย ลำดับที่ 3</label>
					<input name="camp_history[2][name]" type="text" class="form-control" placeholder="ชื่อค่าย ลำดับที่ 3" >
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>จัดโดย</label>
					<input name="camp_history[2][by]" type="text" class="form-control" placeholder="จัดโดย" >
				</div>
			</div>
			<h3>ข้อมูลอื่นๆ</h3>
			<div class="row control-group">
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>อาหาร/สิ่งที่แพ้</label>
					<textarea name="medical[food]" rows="3" type="text" class="form-control" placeholder="อาหาร/สิ่งที่แพ้ (รวมถึงน้องๆ ที่ทานมังสวิรัติ หรือทานเจwด้วยนะครับ)" ></textarea>
				</div>
				<div class="form-group col-xs-6 floating-label-form-group controls">
					<label>โรคประจำตัว</label>
					<textarea name="medical[disease]" rows="3" type="text" class="form-control" placeholder="โรคประจำตัว" ></textarea>
				</div>
			</div>
			<h3>น้องรู้จักค่ายไอทีแคมป์ได้อย่างไรครับ ?</h3>
			<div class="row control-group">
				<div class="col-xs-1"></div>
				<div class="form-group col-xs-7" style="padding-left: 45px;">
					<label class="checkbox-inline" style="font-size: 20px; margin: 8px;"><input type="checkbox" name="pr_from[]">Facebook</label>
					<label class="checkbox-inline" style="font-size: 20px; margin: 8px;"><input type="checkbox" name="pr_from[]">Twitter</label>
					<label class="checkbox-inline" style="font-size: 20px; margin: 8px;"><input type="checkbox" name="pr_from[]">เว็บไซต์ CampHUB.in.th</label>
					<label class="checkbox-inline" style="font-size: 20px; margin: 8px;"><input type="checkbox" name="pr_from[]">เพื่อนๆแนะนำ</label>
					<label id="choose1"class="checkbox-inline" style="font-size: 20px; margin: 8px;"><input type="checkbox" value="" name="etc" id="choose">อื่นๆ ระบุ</label>
				</div>
				<div class="form-group col-xs-3 floating-label-form-group" id="input_choose" style="display: none; margin-top:6px margin-left: 0px;">
					<input name="" type="text" class="form-control" placeholder="โปรดระบุ" >
				</div>
			</div>
			<h3>เลือกขนาดเสื้อค่าย</h3>
			<div class="row control-group">
				<div class="form-group col-xs-4 floating-label-form-group controls">
					<label>ขนาดเสื้อ</label>
					<select name="shirt_size" type="text" class="form-control" placeholder="ขนาดเสื้อ">
						<option>ขนาดเสื้อ</option>
						<option>S</option>
						<option>M</option>
						<option>L</option>
						<option>XL</option>
						<option>XXL</option>
						<option>XXXL</option>
					</select>
				</div>
			</div>
			<div class="page-header">
				<h2>ส่วนที่ 2 คำถามประกอบการรับสมัคร </h2>
			</div>
			<?php $i = 1; ?>
			@foreach(array_sort($questions, function($question) { return $question->attributes->weight; }) as $question)
			@if(in_array($camp, $question->attributes->judge) || in_array(5, $question->attributes->judge) || in_array(4, $question->attributes->judge))
				<div class="row control-group">
				<div class="form-group col-xs-12 floating-label-form-group controls">
					<label>{{ $i.". ".$question->title }}</label>
					<p style="font-size: 20px;">{{ $question->description }}</p>
					<textarea rows="5" class="form-control" placeholder="{{ $i.". ".$question->title }}" required></textarea>
					<p class="help-block text-danger">{{ $question->help }}</p>
				</div>
			</div>
			<?php $i++; ?>
			@endif
			@endforeach
			<br>
			<div id="success"></div>
			<div class="row">
				<div class="form-group col-xs-12">
					<button type="submit" class="btn btn-warning btn-lg col-xs-12" style="font-size: 22px;">ส่งใบสมัคร</button>
				</div>
			</div>
		</form>
		</div>
	</div>
						<!-- jQuery -->
	<script src="register_assets/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="register_assets/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="register_assets/js/classie.js"></script>
	<script src="register_assets/js/cbpAnimatedHeader.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="register_assets/js/jqBootstrapValidation.js"></script>
	<!--<script src="register_assets/js/contact_me.js"></script> -->

	<!-- Custom Theme JavaScript -->
	<script src="register_assets/js/freelancer.js"></script>
</body>
</html>