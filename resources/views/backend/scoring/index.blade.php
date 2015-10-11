@extends('backend.layout')

@section('content')

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-pie-chart"></i>ความคืบหน้า</h3>
			</div>
			<div class="box-body text-center">
				@if(Auth::user()->judge_group == 1)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $app_male_count+$app_female_count }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $app_male_count+$app_female_count - $checked_app }} ใบสมัคร)</p>
				@endif
				@if(Auth::user()->judge_group == 2)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $net_male_count+$net_female_count }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $net_male_count+$net_female_count - $checked_app }} ใบสมัคร)</p>
				@endif
				@if(Auth::user()->judge_group == 3)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $game_male_count+$game_female_count }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $game_male_count+$game_female_count - $checked_app }} ใบสมัคร)</p>
				@endif
				@if(Auth::user()->judge_group == 4)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $approved_app }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $approved_app - $checked_app }} ใบสมัคร)</p>
				@endif
				@if(Auth::user()->judge_group == 5)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $approved_app }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $approved_app - $checked_app }} ใบสมัคร)</p>
				@endif
				@if(Auth::user()->judge_group == 6)
				<span class="quiz-progress">ตรวจแล้ว {{ $checked_app }} / {{ $iot_male_count+$iot_female_count }} ใบสมัคร</span>
				<p class="text-muted">(ยังไม่ได้ตรวจอีก {{ $iot_male_count+$iot_female_count - $checked_app }} ใบสมัคร)</p>
				@endif

				
				<hr>
				<a href="{{ route('backend.scoring.start', 0) }}" class="btn btn-block btn-primary @if($checked_app == $approved_app) disabled @endif"><strong><i class="fa fa-sign-in"></i>เข้าสู่ระบบตรวจคำตอบ</strong></a>
			</div>
		</div>
	</div>
</div>

@if(Auth::user()->judge_group == 5)

<div class="row">
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-folder-open"></i>ใบสมัครทั้งหมด</h3>
			</div>
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th class="text-center" width="100px">เลขที่</th>
							<th class="text-center">สถานะ</th>
							<th>ชื่อ - สกุล</th>
							<th class="text-center">ชื่อเล่น</th>
							<th class="text-center">Head</th>
							<th class="text-center">App Dev.</th>
							<th class="text-center">Network</th>
							<th class="text-center">Game</th>
							<th class="text-center">สันทนาการ</th>
							<th class="text-center">IoT</th>
						</tr>
					</thead>
					<tbody>
						@forelse($applicants as $applicant)
						<tr>
							<td class="text-center">{{ str_pad($applicant->id, 4, 0, STR_PAD_LEFT) }}</td>
							<td class="text-center">
								@if($applicant->score_cards()->count() == 14)
									<span class="label label-success"><i class="fa fa-check-circle"></i>ตรวจแล้ว</span>
								@else
									<span class="label label-warning"><i class="fa fa-clock-o"></i>รอตรวจ</span>
								@endif
							</td>
							<td><a href="{{ route('backend.applicant.show', $applicant->id) }}">{{ $applicant->prefix.$applicant->firstname.' '.$applicant->lastname }}</a></td>
							<td class="text-center"> {{ $applicant->nickname }}</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(5)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i < 2 - $applicant->score_cards()->inGroup(5)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(1)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i < 3 - $applicant->score_cards()->inGroup(1)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(2)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i < 3 - $applicant->score_cards()->inGroup(2)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(3)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i <  3 - $applicant->score_cards()->inGroup(3)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(4)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i < 3 - $applicant->score_cards()->inGroup(4)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
							<td class="text-center">
								@for($i = 0; $i < $applicant->score_cards()->inGroup(6)->count(); $i++)
									<i class="fa fa-circle no-margin"></i>
								@endfor
								@for($i = 0; $i < 3 - $applicant->score_cards()->inGroup(6)->count(); $i++)
									<i class="fa fa-circle-o no-margin"></i>
								@endfor
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="10" class="text-center">ไม่มีใบสมัครในระบบ</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			<div class="box-footer text-right">
				{!! $applicants->render() !!}
			</div>
		</div>
	</div>
</div>

@endif

@endsection