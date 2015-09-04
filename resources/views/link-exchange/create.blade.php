@extends('link-exchange.layout')

@section('content')
	<div class="card">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal" method="post" action="{{ route('link-exchange.store') }}">
					<div class="page-header text-center">
					<h1>ร่วมประชาสัมพันธ์ กับ "ไอทีแคมป์"ได้ที่นี่ครับ</h1>
					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				  <div class="form-group-input">
				    <label class="control-label">Website</label>
				      <input type="text" name="name" class="form-control" placeholder="ชื่อเว็บไซต์" required>
				  </div>
				  <div class="form-group-input">
				    <label class="control-label">URL</label>
				      <input type="text" name="url" class="form-control" placeholder="URL ของเว็บไซต์" required>
				  </div>
				  <br>
				  <div class="form-group">
				    <div class="text-center">
				      <button class="btn btn-success" style="font-size:18px;">Send</button>
				    </div>
				  </div>
				</form>
		<hr>
		 </div>
		 </div>
		 <div class="row">
				<div class="text-center">
					<h2>ภาพประชาสัมพันธ์</h2><br>
				</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_500x500.jpg')}}" width="125" height="125">
			</div>
			<div class="col-md-8 col-md-offset-2">	
				<p>ขนาด 125x125</p>
				<textarea class="form-control " style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_500x500.jpg')}}" width="125" height="125" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_500x500.jpg')}}" width="250" height="250">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 250x250</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_500x500.jpg')}}" width="250" height="250" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_500x500.jpg')}}" width="500" height="500">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 500x500</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_500x500.jpg')}}" width="500" height="500" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_600x1200.jpg')}}" width="300" height="600">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 300x600</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_600x1200.jpg')}}" width="300" height="600" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_1100x724.jpg')}}" width="550" height="362">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 550x362</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_1100x724.jpg')}}" width="550" height="362" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_1120x580.jpg')}}" width="560" height="290">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 560x290</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_1120x580.jpg')}}" width="560" height="290" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_1600x300.jpg')}}" width="800" height="150">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 800x300</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_1600x300.jpg')}}" width="800" height="150" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
				<br>
			</div>
			<div class="text-center">
				<img src="{{URL::to('banner/bn_1920x640.jpg')}}" width="960" height="320">
			</div>
			<div class="col-md-8 col-md-offset-2">
				<p>ขนาด 960x320</p>
				<textarea class="form-control" style="font-size:18px;" onclick="this.select();">&lt;a href="http://www.itcamp.in.th"&gt;&lt;img src="{{URL::to('/banner/bn_1920x640.jpg')}}" width="960" height="320" border="0" alt="itcamp#12"&gt;&lt;/a&gt;</textarea>
			</div>
	</div>
	</div>

@endsection