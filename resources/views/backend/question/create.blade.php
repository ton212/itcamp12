@extends('backend.layout')

@section('css')
<link href="{{ asset('backend_assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ asset('backend_assets/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
<script>$('select').select2();</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-plus-circle"></i>เพิ่มคำถามใหม่</h3>
				</div>
				<form method="POST" action="{{ route('backend.question.index') }}">
					<div class="box-body">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="required">หัวข้อคำถาม</label>
							<input type="text" name="title" class="form-control" value="{{ Input::old('title') }}">
						</div>
						<div class="form-group">
							<label>คำอธิบายคำถาม</label>
							<textarea name="description" class="form-control" rows="3">{{ Input::old('description') }}</textarea>
						</div>
						<div class="form-group">
							<label>ข้อความช่วยเหลือ</label>
							<input type="text" name="help" class="form-control" value="{{ Input::old('help') }}">
						</div>
						<div class="form-group">
							<label class="required">เกณฑ์การให้คะแนน</label>
							<select name="score_scale" class="form-control" data-placeholder="เลือกเกณฑ์การให้คะแนน">
								<option></option>
								<option @if(Input::old('score_scale') == "-1, 0, 1") selected @endif>-1, 0, 1</option>
								<option @if(Input::old('score_scale') == "-2, -1, 0, 1, 2") selected @endif>-2, -1, 0, 1, 2</option>
								<option @if(Input::old('score_scale') == "0, 1") selected @endif>0, 1</option>
								<option @if(Input::old('score_scale') == "0, 1, 2, 3") selected @endif>0, 1, 2, 3</option>
								<option @if(Input::old('score_scale') == "0, 1, 2, 3, 4") selected @endif>0, 1, 2, 3, 4</option>
								<option @if(Input::old('score_scale') == "0, 1, 2, 3, 4, 5") selected @endif>0, 1, 2, 3, 4, 5</option>
							</select>
						</div>
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
									<label class="required">ผู้มีสิทธิ์ตรวจคำตอบ</label>
									<select class="form-control" name="judge[]" multiple="" data-placeholder="เลือกอย่างน้อย 1 รายการ" style="width: 100%;" tabindex="-1" aria-hidden="true">
										<option value="1" @if(in_array(1, Input::old('judge', []))) selected @endif>Application Development</option>
										<option value="2" @if(in_array(2, Input::old('judge', []))) selected @endif>Network</option>
										<option value="3" @if(in_array(3, Input::old('judge', []))) selected @endif>Game Development</option>
										<option value="3" @if(in_array(6, Input::old('judge', []))) selected @endif>IoT</option>
										<option value="4" @if(in_array(4, Input::old('judge', []))) selected @endif>สันทนาการ</option>
									</select>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="required">น้ำหนัก</label>
									<input type="number" name="weight" class="form-control" value="{{ Input::old('weight', 0) }}">
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-primary btn-flat"><i class="fa fa-plus-circle"></i>เพิ่มคำถาม</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@endsection