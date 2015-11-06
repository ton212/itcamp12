<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('register_assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('login_assets/css/userstyle.css') }}">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<link rel="icon" href="{{ asset('main_assets/img/favicon.ico') }}">
	<title>เข้าสู่ระบบ ไอทีแคมป์ครั้งที่ 12 | ITCAMP12</title>
    <style>
      body {
      background: url("{{ asset('login_assets/img/soon_BG.png') }}") no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#myModal').modal('show')
  });
</script>
</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
<div class="container">
  <div class="card">
    <div class="page-header">
        <div class="pull-right">
          <a href="/12/logout" class="btn btn-danger" style="font-size:18px;"><i class="fa fa-sign-out"></i> ออกจากระบบ</a>
        </div>
      <h1 class="title">ไอทีแคมป์ครั้งที่ 12 <small>ระบบยืนยันสิทธิ์</small></h1>
    </div>
    <div class="row">
      <div class="col-xs-12">
        @if(count($errors))
          <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
              <li style="font-size:22px;">{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        @if(isset($success))
          <div class="alert alert-success">{{ $success }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
      <div class="well">
        <h2>ข้อมูลส่วนตัว</h2>
        <p>น้อง{{ $applicant->firstname." ".$applicant->lastname }}</p>
        <p>{{ $applicant->academic['school'] }}</p>
        <p>ค่ายที่สมัคร {{ $applicant->getCampName() }} </p>
      </div>
      <div class="well">
        <h2>สถานะหลักฐาน</h2>
        <p>สลิปการโอนเงิน
          @if($applicant->transfer_slip == null)
            <span class="label label-danger"><i class="fa fa-times"></i> ยังไม่ได้รับ</span>
          @else
            <span class="label label-success"><i class="fa fa-check"></i> ได้รับแล้ว</span>
          @endif
        </p>
        <p>ปพ. 1
          @if($applicant->transcript == null)
            <span class="label label-danger"><i class="fa fa-times"></i> ยังไม่ได้รับ</span>
          @else
            <span class="label label-success"><i class="fa fa-check"></i> ได้รับแล้ว</span>
          @endif
        </p>
      </div>
      </div>
      <div class="col-md-9">
        <div class="panel with-nav-tabs panel-default">
          <div class="panel-heading">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1default" data-toggle="tab">อ่านรายละเอียด</a></li>
              <li><a href="#tab2default" data-toggle="tab">ส่งแบบหลักฐาน</a></li>
              <li><a href="#tab3default" data-toggle="tab">รอตรวจเอกสาร</a></li>
              <li><a href="#tab4default" data-toggle="tab">ดาวน์โหลดเอกสาร</a></li>
              <li><a href="#tab5default" data-toggle="tab">เตรียมพร้อมผจญภัย</a></li>
            </ul>
          </div>
        <div class="panel-body">
          <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1default">
        <h3>น้อง จะต้องยืนสิทธิ์โดยการแนบเอกสารทั้ง 2 อย่างให้ครบดังนี้</h3>
        <ol>
          <li>หลักฐานการโอนเงิน (ภายในวันที่ 21 พฤศจิกายน 2558)</li>
          <li>ใบปพ.1 ระบุผลการเรียนจนถึงภาคการศึกษาล่าสุด (เช่น ม.4 ใช้ 1 เทอม , ม.5 ใช้ 3 เทอม, ม.6 ใช้  5 เทอม) </li>
        </ol>
        <h3>หมายเหตุ :</h3>
        <ul>
          <li>หลักฐานทั้ง 2 อย่างให้น้องๆถ่ายรูปหรือแสกนมาก็ได้ครับ แต่ขอให้ภาพชัดเจนนะครับ</li>
          <li>หลักฐานการโอนเงิน ยกตัวอย่างเช่น สำเนาการโอน, สลิป เป็นต้น</li>
          <li>หากน้องมีปัญหาในการขอเอกสารกับทางโรงเรียนให้ติดต่อพี่ๆ มาทาง IT Camp Page Inbox ได้เลยครับ</li>
          <li>หากส่งเอกสารไม่ครบ (ใบโอนเงิน, ปพ.1) จะถือว่าสละสิทธิ์การเข้าร่วมค่ายไอทีแคมป์ครั้งที่ 12 นะครับ</li>
        </ul>
        <h3>การโอนเงินค่าธรรมเนียมค่าย</h3>
        <p>โอนเข้าบัญชีออมทรัพย์ ธนาคารไทยพาณิชย์ จำกัด (มหาชน)</p>
        <dl class="dl-horizontal">
          <dt>ชื่อบัญชี</dt>
          <dd>คณะไอทีลาดกระบัง</dd>
          <dt>เลขที่บัญชี</dt>
          <dd>088-251953-4</dd>
          <dt>สาขา</dt>
          <dd>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</dd>
        </dl>
        <h3>วิธีโอน ให้โอนเงินจำนวน 500 บาท และใส่เศษสตางค์ตามเลขท้ายรหัสผู้สมัคร</h3>
        <h4>ตัวอย่างเช่น</h4>
        <ul>
          <li>รหัสผู้สมัคร itcamp003 โอนเงินจำนวน 500.03 บาท</li>
          <li>รหัสผู้สมัคร itcamp028 โอนเงินจำนวน 500.28 บาท</li>
          <li>รหัสผู้สมัคร itcamp102 โอนเงินจำนวน 500.02 บาท</li>
        </ul>
        <p>&#09;เศษสตางค์สำคัญมากเพราะใช้ในการตรวจสอบ ให้น้องๆ ตรวจทานให้แน่ใจว่าใส่จำนวนถูกต้อง
ให้น้องๆ โอนผ่านทางเคาน์เตอร์ธนาคารหรือโอนที่ตู้ ATM เท่านั้นจ้า
หลังจากน้องโอนเงินเรียบร้อยแล้วให้น้องอัพโหลดหลักฐานการโอนเงิน (สำเนาการโอนหรือสลิป) ในหน้าเว็บนี้

โอนเงินได้ถึงวันที่  21 พฤศจิกายน 2558 อย่ารอช้านะครับ</p>

              </div>
              <div class="tab-pane fade" id="tab2default">
                <h3>ส่งหลักฐาน</h3>
                <form method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label>หลักฐานสลิปการโอนเงิน</label>
                    <input type="file" name="transfer_slip">
                    <p class="help-block">ไฟล์ต้องเห็นรายละเอียดชัดเจน และมีขนาดไม่เกิน 2MB</p>
                  </div>

                  <div class="form-group">
                    <label>หลักฐานใบ ปพ. 1</label>
                    <input type="file" name="transcript">
                    <p class="help-block">ไฟล์ต้องเห็นรายละเอียดชัดเจน และมีขนาดไม่เกิน 2MB</p>
                  </div>
                  <button type="submit" class="btn btn-primary" style="font-size:18px;">ยืนยัน</button>
                </form>
              </div>
              <div class="tab-pane fade" id="tab3default">
                <h3>รอตรวจเอกสาร</h3>
                <p>หลังจากที่น้องแนบเอกสารมาเรียบร้อยแล้ว ให้น้องรอประมาณ 3 - 5 วัน เพื่อให้พี่ๆ ทีมงานได้ทำการตรวจสอบเอกสารนะครับ ในระหว่างนี้น้องสามารถเข้ามาร่วมพูดคุยกับเพื่อนๆ ที่สมัครไอทีแคมป์ 12 และเพื่อนๆ ที่เคยมาค่ายไอทีแคมป์ปีก่อนๆ ได้ในกรุ๊ป <a href="https://www.facebook.com/itcampKMITL?fref=photo" target="_blank" style="text-decoration:none"><i class="fa fa-facebook-official"></i> IT CAMP | KMITL</a></p>  
              </div>
              <div class="tab-pane fade" id="tab4default">เร็วนี้ๆ</div>
              <div class="tab-pane fade" id="tab5default">
                  <h2>เตรียมตัวผจญภัย</h2>
                  <h3>ในการออกผจญภัยนั้น ก่อนอื่นเลยน้องๆ จะต้องเตรียมของให้ครบดังนี้</h3>
                  <ol>
                    <li>ชุดนักเรียน 2 ชุด (สำหรับใส่มาวันแรกและใส่กลับวันสุดท้าย)</li>
                    <li>ชุดลำลอง 4 ชุด (เป็นชุดสุภาพ กางเกงขายาวเลยเข่า)</li>
                    <li>ชุดนอน 3 ชุด</li>
                    <li>เสื้อกันหนาว (ห้องเรียนเป็นห้องแอร์นะครับ)</li>
                    <li>ไม้แขวนเสื้อ</li>
                    <li>หมอน (พี่ๆ มีถุงนอนแจกจ้า)</li>
                    <li>อุปกรณ์อาบน้ำ เช่น สบู่, ยาสระผม, แปรงสีฟัน, ยาสีฟัน ฯลฯ</li>
                    <li>ผ้าถุง (ผู้หญิง)</li>
                    <li>ของใช้ส่วนตัว</li>
                    <li>รองเท้าแตะ</li>
                    <li>รองเท้าผ้าใบ</li>
                    <li>ยารักษาโรคประจำตัว (ถ้ามี)</li>
                    <li>เครื่องเขียน</li>
                    <li>และแน่นอน สิ่งที่ขาดไม่ได้นั่นก็คือ.. ชุดและเครื่องประดับสำหรับกิจกรรม Night Survey !!</li>
                  </ol>
                  <p>ทางค่ายจะมีกิจกรรมให้น้องๆ เข้าร่วมสนุกกันในธีม Night Survey !! น้องๆ จะได้กลายเป็นนักผจญภัยดินแดนไดโนเสาร์กัน พี่อยากให้น้องๆ เตรียมเครื่องแต่งกายและเครื่องประดับให้เข้ากับธีมงาน งานนี้จัดเต็มจ้าา แล้วเรามาสนุกกัน  :D
                  </p>
                  <p><i>น้องๆ ไม่จำเป็นต้องนำสิ่งของมีค่ามาค่าย เช่นคอมพิวเตอร์โน็ตบุ๊ค หากเกิดการสูญหาย ทางค่ายจะไม่รับผิดชอบไม่ว่ากรณีใดๆ ทั้งสิ้น</i></p>
                  <h3>นอกจากสิ่งที่ต้องนำมาแล้ว ยังมีสิ่งที่ ห้าม นำมาอีกด้วย</h3>
                  <ul>
                    <li>สิ่งเสพย์ติดทุกชนิด เช่น บุหรี่</li>
                    <li>เครื่องดื่มแอลกอฮอล์และสิ่งมึนเมาทุกชนิด เช่น สุรา เบียร์</li>
                    <li>อุปกรณ์ที่สามารถใช้เป็นอาวุธได้ เช่น มีด</li>
                    <li>หากนำมาจะตัดสิทธิ์การเข้าร่วมกิจกรรมใดๆ ของค่ายทันที</li>
                  </ul>
                  <p><i>วันค่ายไม่อนุญาตให้ผู้ติดตามหรือผู้ปกครองมาเฝ้าน้องหรือมานอนที่คณะ</i></p>
                  <h3>กำหนดการวันค่าย</h3>
                  <p>สามารถดาวน์โหลดได้ที่นี่จ้า</p>
                  <h3>การเดินทาง</h3>
                  <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.792152490152!2d100.78122500000003!3d13.73103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6636ecec9c2b%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1416420297310" width="100%" height="380" frameborder="0" style="border:0"></iframe>
                  </div>
                  <h3>การเดินทางโดยวิธีต่างๆ</h3>
                  <div class="row">
                    <div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-4" target="_blank" class="btn btn-block btn-sm btn-primary" style="font-size:18px;">รถไฟ</a></div>
                    <div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-5" target="_blank" class="btn btn-block btn-sm btn-primary" style="font-size:18px;">รถไฟฟ้า</a></div>
                    <div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-6" target="_blank" class="btn btn-block btn-sm btn-primary" style="font-size:18px;">รถประจำทาง</a></div>
                    <div class="col-xs-6 col-md-3"><a href="http://www.it.kmitl.ac.th/about/contact/map#header-7" target="_blank" class="btn btn-block btn-sm btn-primary" style="font-size:18px;">รถยนต์ส่วนตัว</a></div>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h3 class="modal-title">สวัสดีจ้าน้อง{{ $applicant->firstname." ".$applicant->lastname }}</h3>
              </div>
              <div class="modal-body font-web">
                <p style="font-size:21px;">ยินดีด้วย !! น้องเป็นผู้ถูกเลือกให้เข้าร่วมผจญภัยในดินแดนไดโนเสาร์ไปกับค่ายไอทีแคมป์ ครั้งที่ 12 
แต่ก่อนที่น้องๆ จะเข้ามาร่วมผจญภัยในไอทีแคมป์ครั้งที่ 12 น้องๆ จะต้องปฏิบัติดังนี้</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success btn-flat pull-right font-web" data-dismiss="modal" >ปิด</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</body>
</html>