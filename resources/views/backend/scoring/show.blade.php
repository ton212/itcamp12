@extends('backend.layout')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>คำตอบ</h3>
				</div>
				<div class="box-body">
					<form method="post">
						<?php $i = 1; ?>
						@forelse($answers as $answer)
							@if(in_array(Auth::user()->judge_group, $answer->question->attributes->judge) or Auth::user()->judge_group == 5)
							<div class="form-group">
								<h4 style="line-height: 1.5em">{{ $i.". ".$answer->question->title }}</h4>
								<textarea class="form-control" rows="10" readonly>{{ $answer->answer }}</textarea>	
								<strong>คะแนน :</strong>
								@foreach($answer->question->score_scale as $scale)
								<label class="radio-inline">
									<input type="radio" name="answers[{{ $answer->question->id }}]" id="inlineRadio1" value="{{ $scale }}"> {{ $scale }}
								</label>
								@endforeach
							</div>
							<?php $i++; ?>
							@endif
						@empty
							<h2 class="text-center">ไม่มีคำถามในระบบ</h2>
						@endforelse
						<button class="btn btn-info">ยืนยันการตรวจ</button>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@endsection