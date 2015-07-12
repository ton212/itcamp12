@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-md-3">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-filter"></i>ตัวกรอง</h3>
			</div>
			<div class="box-body">
				<form>
					<div class="form-group">
						<label class="control-label">การแสดงผล</label><br>
						<div>
							<div class="btn-group">
								<a href="#" class="btn btn-default active">
									ทั้งหมด
								</a>
								<a href="#" class="btn btn-default">
									สมบูรณ์
								</a>
								<a href="#" class="btn btn-default">
									ไม่สมบูรณ์
								</a>
								<a href="#" class="btn btn-default">
									รอตรวจ
								</a>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">จำนวนใบสมัครต่อหน้า</label>
						<div>
							<div class="btn-group">
								<a href="#" class="btn btn-default active">10</a>
								<a href="#" class="btn btn-default">20</a>
								<a href="#" class="btn btn-default">30</a>
								<a href="#" class="btn btn-default">50</a>
								<a href="#" class="btn btn-default">100</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		@if(!isset($filters['disable_search']))
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-search"></i>ค้นหาใบสมัคร</h3>
			</div>
			<div class="box-body">
				<form>
					<input type="hidden" name="action" value="search">
					<label class="control-label">ค้นหาจาก</label><br>
					<div class="row">
						<div class="col-xs-6 form-group">
							<label class="radio-inline">
								<input type="radio" name="search" value="name" @if(Input::get('type') == "name" || Input::get('type') != "serial") checked @endif> ชื่อ-สกุล
							</label>
						</div>
						<div class="col-xs-6 form-group">
							<label class="radio-inline">
								<input type="radio" name="search" value="id" @if(Input::get('type') == "id") checked @endif> ชื่อเล่น
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 form-group">
							<label class="radio-inline">
								<input type="radio" name="search" value="serial" @if(Input::get('type') == "serial") checked @endif> เบอร์โทรศัพท์
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label class="control-label">คำค้น</label>
								<input type="text" name="keyword" class="form-control" value="{{ Input::get('keyword') }}">
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>ค้นหา</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		@endif
	</div>

	<div class="col-md-9">
		@yield('data')
	</div>
</div>

@endsection