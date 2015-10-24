<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('register_assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('backend_assets/adminlte/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('login_assets/css/loginstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('login_assets/css/animate.css') }}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="{{ asset('main_assets/img/favicon.ico') }}">
	<title>เข้าสู่ระบบ ไอทีแคมป์ครั้งที่ 12 | ITCAMP12</title>
  <style>
      body {
      background: url(login_assets/img/soon_BG.png) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>
<body>
	<div class="login-box animated fadeInDown">
		<div class="body-login">
		<h2> เข้าสู่ระบบ | ไอทีแคมป์ 12</h2>
    <p style="font-size:18px;">มาเตรียมตัวไปผจญภัยในดินแดนไดโนเสาร์ด้วยกันเถอะ...</p>
      <div class="callout callout-success">
                <p style="font-size: 18px;">ชื่อผู้ใช้งาน สามารถดูได้จากประกาศหน้าแรก<br>ส่วนรหัสผ่านจะเป็นเลขประจำตัวประชาชน 13 หลัก<br>ถ้าพบปัญหาในการเข้าสู่ระบบสามารถติดต่อที่ <br> 
                <a href="https://www.facebook.com/itcampKMITL?fref=photo" target="_blank" style="text-decoration:none"><i class="fa fa-facebook-official"></i> IT CAMP | KMITL</a></p>
      </div>
			<form method="post" lpformnum="1">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="ชื่อผู้ใช้ -> itcamp000" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;" autocomplete="off">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="รหัสผ่าน เลขประจำตัวประชาชน 13 หลัก" style="cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;" autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
            	<input type="hidden" name="_token" value="oEeMSo9f93sA1IKm3aF7EuUVVGjU75N9pWAAk4Xh">
              <button type="submit" class="btn btn-success btn-block btn-flat" style="font-size: 18px;">เข้าสู่ระบบ</button>
            </div><!-- /.col -->
          </div>
        </form>
		</div>
	</div>
	
</body>
</html>