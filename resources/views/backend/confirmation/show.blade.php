@extends('backend.layout')

@section('content')
  <div class="row">
    <div class="col-xs-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user"></i>ข้อมูลใบสมัคร</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
              <div class="field">
                <span class="title">คำนำหน้า</span>
                <span class="value">{{ $applicant->prefix }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">ชื่อ</span>
                <span class="value">{{ $applicant->firstname }}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="field">
                <span class="title">นามสกุล</span>
                <span class="value">{{ $applicant->lastname }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">ชื่อเล่น</span>
                <span class="value">{{ $applicant->nickname }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <div class="field">
                <span class="title">เพศ</span>
                <span class="value">{{ $applicant->gender }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="field">
                <span class="title">เบอร์ติดต่อ</span>
                <span class="value">{{ $applicant->getFormattedTel() }}</span>
              </div>
            </div>
            <div class="col-md-5">
              <div class="field">
                <span class="title">Facebook</span>
                <span class="value"><a href="https://fb.com/{{ $applicant->facebook }}">www.facebook.com/{{ $applicant->facebook }}</a></span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">ศาสนา</span>
                <span class="value">{{ $applicant->religion }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="field">
                <span class="title">ระดับชั้น</span>
                <span class="value">{{ $applicant->academic['grade'] }} ({{ $applicant->academic['class'] }})</span>
              </div>
            </div>
            <div class="col-md-8">
              <div class="field">
                <span class="title">โรงเรียน</span>
                <span class="value">{{ $applicant->academic['school'] }} ({{ $applicant->academic['location'] }})</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="field">
                <span class="title">โรคประจำตัว</span>
                <span class="value">{{ $applicant->medical['disease'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="field">
                <span class="title">แพ้อาหาร</span>
                <span class="value">{{ $applicant->medical['food'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-3">
              <div class="field">
                <span class="title">ขนาดเสื้อ</span>
                <span class="value">{{ $applicant->shirt_size }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-phone"></i>ข้อมูลการติดต่อ</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-3">
              <div class="field">
                <span class="title">บ้านเลขที่</span>
                <span class="value">{{ $applicant->address['house_no'] }}</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="field">
                <span class="title">หมู่</span>
                <span class="value">{{ $applicant->address['village_no'] }}</span>
              </div>
            </div>
            <div class="col-md-7">
              <div class="field">
                <span class="title">ถนน</span>
                <span class="value">{{ $applicant->address['street'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="field">
                <span class="title">แขวง</span>
                <span class="value">{{ $applicant->address['sub_district'] }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">เขต</span>
                <span class="value">{{ $applicant->address['district'] }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">จังหวัด</span>
                <span class="value">{{ $applicant->address['province'] }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">รหัสไปรษณีย์</span>
                <span class="value">{{ $applicant->address['postcode'] }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user-secret"></i>ข้อมูลผู้ปกครอง</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="field">
                <span class="title">ชื่อ</span>
                <span class="value">{{ $applicant->parent['firstname'] }}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="field">
                <span class="title">นามสกุล</span>
                <span class="value">{{ $applicant->parent['lastname'] }}</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="field">
                <span class="title">เกี่ยวข้องเป็น</span>
                <span class="value">{{ $applicant->parent['relate'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="field">
                <span class="title">บ้านเลขที่</span>
                <span class="value">{{ $applicant->parent['addr']['house_no'] }}</span>
              </div>
            </div>
            <div class="col-md-2">
              <div class="field">
                <span class="title">หมู่</span>
                <span class="value">{{ $applicant->parent['addr']['village_no'] }}</span>
              </div>
            </div>
            <div class="col-md-7">
              <div class="field">
                <span class="title">ถนน</span>
                <span class="value">{{ $applicant->parent['addr']['street'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="field">
                <span class="title">แขวง</span>
                <span class="value">{{ $applicant->parent['addr']['sub_district'] }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">เขต</span>
                <span class="value">{{ $applicant->parent['addr']['district'] }}</span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="field">
                <span class="title">จังหวัด</span>
                <span class="value">{{ $applicant->parent['addr']['province'] }}</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="field">
                <span class="title">เบอร์ติดต่อ (1)</span>
                <span class="value">{{ explode('/', (string) $applicant->parent['tel'])[0] }}</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="field">
                <span class="title">เบอร์ติดต่อ (2)</span>
                <span class="value">{{ explode('/', (string) $applicant->parent['tel'])[1] }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-check-circle"></i>ตรวจหลักฐาน</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <legend>ปพ.1</legend>
              @if($applicant->transcript != "")
              <div class="row">
                <div class="col-md-6">
                  <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="proof_check0" value="1">
                    <button class="btn btn-sm btn-success btn-block">ผ่าน</button>
                  </form>
                </div>
                <div class="col-md-6">
                  <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="proof_check0" value="2">
                    <button class="btn btn-sm btn-danger btn-block">ไม่ผ่าน</button>
                  </form>
                </div>
              </div>
              <img src="data:image/png;base64,{{ base64_encode(\Storage::get('/confirmation/'.$applicant->transcript)) }}" style="max-width: 100%;">
              @else
              <div class="text-muted text-center">ยังไม่ได้ส่งหลักฐาน</div>
              @endif
            </div>
            <div class="col-md-6">
              <legend>หลักฐานการโอนเงิน</legend>
              @if($applicant->transfer_slip != "")
              <div class="row">
                <div class="col-md-6">
                  <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="proof_check1" value="1">
                    <button class="btn btn-sm btn-success btn-block">ผ่าน</button>
                  </form>
                </div>
                <div class="col-md-6">
                  <form method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="proof_check1" value="2">
                    <button class="btn btn-sm btn-danger btn-block">ไม่ผ่าน</button>
                  </form>
                </div>
              </div><br>
              <img src="data:image/png;base64,{{ base64_encode(\Storage::get('/confirmation/'.$applicant->transfer_slip)) }}" style="max-width: 100%;">
              @else
              <div class="text-muted text-center">ยังไม่ได้ส่งหลักฐาน</div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-search"></i>ตรวจหลักฐาน</h3>
        </div>
        <div class="box-body">
          <p>
            <strong>เอกสารยืนยันการชำระเงิน:</strong>
            @if($applicant->proof_check[1] == 1)
              <i class="fa fa-check-circle text-success no-margin"></i> ผ่าน
            @elseif($applicant->proof_check[1] == 2)
              <i class="fa fa-check-circle text-danger no-margin"></i> ไม่ผ่าน
            @elseif($applicant->transfer_slip == "")
              <i class="fa fa-check-circle text-muted no-margin"></i> ยังไม่ได้รับ
            @else
              <i class="fa fa-check-circle text-orange no-margin"></i> รอการตรวจสอบ
            @endif
          </p>
          <p>
            <strong>ปพ.1 :</strong>
            @if($applicant->proof_check[0])
              <i class="fa fa-check-circle text-success no-margin"></i> ผ่าน
            @elseif($applicant->proof_check[0] == 2)
              <i class="fa fa-check-circle text-danger no-margin"></i> ไม่ผ่าน
            @elseif($applicant->transcript == "")
              <i class="fa fa-check-circle text-muted no-margin"></i> ยังไม่ได้รับ
            @else
              <i class="fa fa-check-circle text-orange no-margin"></i> รอการตรวจสอบ
            @endif
          </p>
        </div>
      </div>

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-user"></i>สละสิทธิ์ / สำรอง</h3>
        </div>
        <div class="box-body">
          @if($user->active)
            <form method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PATCH">
              <input type="hidden" name="active" value="0">
              <button class="btn btn-sm btn-danger btn-block">บังคับสละสิทธิ์</button>
            </form>
          @else
            <form method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="PATCH">
              <input type="hidden" name="active" value="1">
              <button class="btn btn-sm btn-success btn-block">เรียกสำรอง (เปิดใช้งานบัญชี)</button>
            </form>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection

@endsection