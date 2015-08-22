@extends('backend.layout')

@section('content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-user"></i>คำตอบ</h3>
				</div>
				<div class="box-body">
					<form method="post">
						@foreach($questions as $question)
							<div class="form-group">
								<lable class="control-label"><h3>Question : {{ $question->title }}</h3></label>
								<textarea class="form-control" rows="10" readonly>{{ $question->answers[0]->answer}}
								</textarea>
								<strong>Score :</strong> 
								@foreach($question->score_scale as $scale)
								<label class="radio-inline">
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="{{ $scale }}"> {{ $scale }}
								</label>
							@endforeach
							</div>
						@endforeach
						<button class="btn btn-info">Submit</button>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@endsection