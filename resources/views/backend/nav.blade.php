<header class="main-header">
	<nav class="navbar navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand"><span class="logo-lg"><b>ITCAMP</b>#12</span></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>

			</div>

			@if(Auth::check())
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li @if(Request::is('backend')) class="active bg-green-active" @endif><a href="{{ route('backend.index') }}"><i class="fa fa-dashboard"></i>ภาพรวม</a></li>
					@if(Auth::user()->judge_group == 5)
					<li @if(Request::is('backend/applicant*')) class="active bg-green-active" @endif><a href="{{ route('backend.applicant.index') }}"></i><i class="fa fa-file-text"></i>จัดการใบสมัคร</a></li>
					<li @if(Request::is('backend/question*')) class="active bg-green-active" @endif><a href="{{ route('backend.question.index') }}"></i><i class="fa fa-question-circle"></i>จัดการคำถาม</a></li>
					@endif
					@if(Auth::user()->judge_group == 5)
					<li @if(Request::is('backend/scoring*')) class="active bg-green-active" @endif><a href="{{ route('backend.scoring.index') }}"><i class="fa fa-check-circle"></i>การคัดเลือก (ตรวจคำตอบ)</a></li>
					@endif
					@if(Auth::user()->judge_group == 5 || Auth::user()->judge_group == 10)
					<li @if(Request::is('backend/confirmation*')) class="active bg-green-active" @endif><a href="{{ route('backend.confirmation.index') }}"><i class="fa fa-check-circle"></i>การยืนยันสิทธิ์</a></li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!--<li><a href="{{ URL::to('/profile/edit') }}"><span class="fa fa-pencil"></span>แก้ไขข้อมูลส่วนตัว</a></li>-->
							<!--<li><a href="{{ URL::to('/profile/password') }}"><span class="fa fa-wrench"></span>เปลี่ยนรหัสผ่าน</a></li>-->
							<!--<li class="divider"></li>-->
							<li><a href="{{ URL::to('/backend/auth/logout') }}"><span class="glyphicon glyphicon-log-out text-danger"></span><span class="text-danger">ออกจากระบบ</span></a></li>
						</ul>
					</li>
				</ul>
			</div>
			@endif
		</div>
	</nav>
</header>