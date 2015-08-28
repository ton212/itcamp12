@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-question-circle"></i>คำถามทั้งหมด</h3>
				<div class="box-tools"><a class="btn btn-sm btn-primary" href="{{ route('backend.question.create') }}"><i class="fa fa-plus-circle"></i>เพิ่มคำถามใหม่</a></div>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" width="60px">รหัส</th>
							<th>คำถาม</th>
							<th class="text-center" width="160px">ผู้มีสิทธิ์ตรวจคำตอบ</th>
							<th class="text-center" width="80px">น้ำหนัก</th>
							<th class="text-center" width="150px">การกระทำ</th>
						</tr>
					</thead>
					<tbody>
						@forelse($questions as $question)
						<tr>
							<td class="text-center">{{ $question->id }}</td>
							<td>
								<strong>{{ $question->title }}</strong>
								<small class="text-muted" style="display: block;">{{ $question->description }}</small>
							</td>
							<td class="text-center">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x @if(in_array(1, $question->attributes->judge)) text-navy @else text-gray @endif"></i>
								  <i class="fa fa-code fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x @if(in_array(2, $question->attributes->judge)) text-teal @else text-gray @endif"></i>
								  <i class="fa fa-gamepad fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x @if(in_array(3, $question->attributes->judge)) text-success @else text-gray @endif"></i>
								  <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x @if(in_array(4, $question->attributes->judge)) text-orange @else text-gray @endif"></i>
								  <i class="fa fa-bullhorn fa-stack-1x fa-inverse"></i>
								</span>
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x @if(in_array(6, $question->attributes->judge)) text-primary @else text-gray @endif"></i>
								  <i class="fa fa-plug fa-stack-1x fa-inverse"></i>
								</span>
							</td>
							<td class="text-center">{{ $question->attributes->weight }}</td>
							<td class="text-center">
								<form action="{{ route('backend.question.destroy', $question->id) }}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" name="_method" value="delete">
									<div class="btn-group">
										<a href="{{ route('backend.question.edit', $question->id) }}" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i>แก้ไข</a>
										<button class="btn btn-xs btn-default" onclick="return confirm('ยืนยันการลบคำถามข้อนี้หรือไม่?')"><i class="fa fa-trash"></i>ลบ</button>
									</div>
								</form>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="5" class="text-center text-muted">ยังไม่มีคำถามในระบบ</td>
						</tr>
						@endforelse
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box collapsed-box">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-sort-amount-asc"></i>ตัวอย่างลำดับการแสดงคำถามในใบสมัคร</h3>
				<div class="box-tools">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="box-body no-padding">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th class="text-center" width="60px">ข้อ</th>
							<th>คำถาม</th>
							<th class="text-center" width="80px">น้ำหนัก</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@forelse(array_sort($questions, function($question) { return $question->attributes->weight; }) as $question)
						<tr>
							<td class="text-center">{{ $i }}</td>
							<td><strong><span class="text-muted">(#{{ $question->id }})</span> {{ $question->title }}</strong></td>
							<td class="text-center">{{ $question->attributes->weight }}</td>
						</tr>
						<?php $i++; ?>
						@empty
						<tr>
							<td colspan="3" class="text-center text-muted">ยังไม่มีคำถามในระบบ</td>
						</tr>
						@endforelse
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection