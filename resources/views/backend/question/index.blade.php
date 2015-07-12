@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-question-circle"></i>คำถามทั้งหมด</h3>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" width="60px">#</th>
							<th>คำถาม</th>
							<th class="text-center" width="140px">ผู้ตรวจ</th>
							<th class="text-center" width="80px">น้ำหนัก</th>
							<th class="text-center" width="100px">การกระทำ</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td>
								<strong>สี่แยก เธคอันเดอร์เห่ย เซ็นทรัลป๋าพาร์ตเนอร์อินเตอร์โครนา โรลออนจตุคามแชมพูบอมบ์</strong>
								<small class="text-muted" style="display: block;">คลาสสิกสโลว์โต๊ะจีน แชมปิยองเฟอร์นิเจอร์ไฮบริดแฟรี แฟนซีแจ็กพ็อตสต๊อค คอนแท็คโมเดิร์นดีมานด์ลิมิต ยูวีอัลตรา โปรเจ็คนินจา</small>
							</td>
							<td class="text-center">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-navy"></i>
								  <i class="fa fa-code fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-teal"></i>
								  <i class="fa fa-gamepad fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-success"></i>
								  <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-orange"></i>
								  <i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i>
								</span>
							</td>
							<td class="text-center">0</td>
							<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>แก้ไข</a></td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>
								<strong>วีนไฟลท์แชเชือนแบดทาวน์ เจลสไตล์ซีเรียส แทกติคอินดอร์ง่าว ตุ๊ดซ้อ แดนเซอร์</strong>
								<small class="text-muted" style="display: block;">มือถือเฟรม โคโยตี้ พงษ์จัมโบ้ลอร์ดมายาคติซูเปอร์ อริยสงฆ์ ไมค์ชาร์จปาสคาลซูโม่ วาไรตี้แฟร์ เทียมทานไนท์เวิร์กช็อปคอร์รัปชั่นฮากกา</small>
							</td>
							<td class="text-center">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-primary"></i>
								  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
								</span>
							</td>
							<td class="text-center">0</td>
							<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>แก้ไข</a></td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>
								<strong>วีนไฟลท์แชเชือนแบดทาวน์ เจลสไตล์ซีเรียส แทกติคอินดอร์ง่าว ตุ๊ดซ้อ แดนเซอร์</strong>
								<small class="text-muted" style="display: block;">มือถือเฟรม โคโยตี้ พงษ์จัมโบ้ลอร์ดมายาคติซูเปอร์ อริยสงฆ์ ไมค์ชาร์จปาสคาลซูโม่ วาไรตี้แฟร์ เทียมทานไนท์เวิร์กช็อปคอร์รัปชั่นฮากกา</small>
							</td>
							<td class="text-center">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x text-success"></i>
								  <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
								</span>
							</td>
							<td class="text-center">0</td>
							<td class="text-center"><a href="#" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>แก้ไข</a></td>
						</tr>
						<tr>
							<td colspan="5" class="text-center"><a href="#"><i class="fa fa-plus-circle"></i>เพิ่มคำถามใหม่</a></td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection