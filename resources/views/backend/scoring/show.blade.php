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
						@forelse($questions as $question)
							@if($question->canScoring())
							<div class="form-group">
								<lable class="control-label"><h3>คำถาม : {{ $question->title }}</h3></label>
								<textarea class="form-control" rows="10" readonly>{{ $question->answers[0]->answer}}</textarea>	
								<strong>คะแนน :</strong>
								@foreach($question->score_scale as $scale)
								<label class="radio-inline">
									<input type="radio" name="ans{{ $question->id }}" id="inlineRadio1" value="{{ $scale }}"> {{ $scale }}
								</label>
								@endforeach
							</div>
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