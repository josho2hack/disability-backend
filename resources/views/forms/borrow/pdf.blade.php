<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<title>{{ config('app.name', 'ICT for Disability') }}</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
	@font-face{
	 font-family:  'THSarabunNew';
	 font-style: normal;
	 font-weight: normal;
	 src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
	}
	@font-face{
	 font-family:  'THSarabunNew';
	 font-style: normal;
	 font-weight: bold;
	 src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
	}
	@font-face{
	 font-family:  'THSarabunNew';
	 font-style: italic;
	 font-weight: normal;
	 src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
	}
	@font-face{
	 font-family:  'THSarabunNew';
	 font-style: italic;
	 font-weight: bold;
	 src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
	}
	body{
		font-family: 'THSarabunNew', sans-serif;
		font-size: 18px;
		width: 630px; 
	    border: 1px;
	    word-wrap: break-word;


	}
	@page {
      size: A4;
      margin-left: 90.84px;
      margin-right: 60.64px;
    }
    @media print{
    	size: A4;
    }
    .border{
    	border: 1px solid #000; 
    	overflow: auto; 
    	width: 180px; 
    	text-align: center;
    	margin-left: 450px;
    	font-size: 17px;
	}
	.header{
		font-size: 20px;
		text-align: center;
	}
	.write-at{
		margin-left: 390px;
		text-align: center;
	}
	.date{
		margin-left: 219px;
		text-align: center;
	}
	.box{
    	display: inline-block;
    	margin-left: 50px;
	}
	.box input[type=checkbox] {
    transform: scale(1.5);
	}
	.type{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 500px;
		text-align: center;
	}
	.name{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 300px;
		text-align: center;
	}
	.card{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 280px;
		text-align: center;
	}
	.house{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 80px;
		text-align: center;
	}
	.moo{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 50px;
		text-align: center;
	}
	.lane{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 120px;
		text-align: center;
	}
	.district{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 150px;
		text-align: center;
	}
	.province{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 170px;
		text-align: center;
	}
	.postal_code{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 110px;
		text-align: center;
	}
	.edu{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 380px;
		text-align: center;
	}
	.tel{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 110px;
		text-align: center;
	}
	.email{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 320px;
		text-align: center;
	}
	.email2{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 462px;
		text-align: center;
	}
	.name2{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 400px;
		text-align: center;
	}
	.pwd_id{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 360px;
		text-align: center;
	}
	.object{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 440px;
		text-align: center;
	}
	.accessorie{
		display: inline-block;
		border-bottom: 1px dotted;
		width: 220px;
		text-align: center;
	}


</style>
</head>
<body>
	<div class="border">
			ทก.01<br>
		สำหรับคนพิการ / ผู้ยื่นคำขอแทน
	</div>

	<div class="header">
		แบบคำขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>	
		หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ
	</div>
	<div class="write-at">
		เขียนที่..............{{ $form->write_at }}........
	</div>
	<div class="date">
		วันที่ ...{{ date('d', strtotime($form->created_at)) }}..  
@php

switch (date('m', strtotime($form->created_at)))
{
case '01' : $month="มกราคม"; break;
case '02' : $month="กุมภาพันธ์"; break;
case '03' : $month="มีนาคม"; break;
case '04' : $month="เมษายน"; break;
case '05' : $month="พฤษภาคม"; break;
case '06' : $month="มิถุนายน"; break;
case '07' : $month="กรกฎาคม"; break;
case '08' : $month="สิงหาคม"; break;
case '09' : $month="กันยายน"; break;
case '10' : $month="ตุลาคม"; break;
case '11' : $month="พฤศจิกายน"; break;
case '12' : $month="ธันวาคม"; break;
}
@endphp
		เดือน .......{{ $month }}...... พ.ศ. ............{{ (date('Y', strtotime($form->created_at)))+543 }}.................
	</div>
	<div class="title">
		เรื่อง	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อ
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสื่อสาร ตามกฎกระทรวงฯ 
	</div>
	<div class="subtitle">
		เรียน	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประธานคณะกรรมการส่งเสริมและพัฒนาการเข้าถึงและใช้ประโยชน์จากข้อมูลข่าวสาร การสื่อสาร <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บริการโทรคมนาคม เทคโนโลยีสารสนเทศและการสื่อสาร เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการ <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สื่อสารและบริการสื่อสารธารณะสำหรับคนพิการ
	</div>
	<div class="document">
		สิ่งที่ส่งมาด้วย เอกสารหลักฐาน
	</div>
	
	<div>
		<span class="box">
			<input class="largerCheckbox" type="checkbox" @if($form->copy_card)checked @else @endif>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;สำเนาบัตรประจำตัวคนพิการ พร้อมรับรองสำเนาถูกต้อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวน .....{{ $form->copy_card}}..... ฉบับ
	</div>
	<div>
		<span class="box">
			<input class="largerCheckbox" type="checkbox" @if($form->house_res )checked @else @endif>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;สำเนาทะเบียนบ้านคนพิการ พร้อมรับรองสำเนาถูกต้อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวน .....{{ $form->house_res}}..... ฉบับ
	</div>
	<div>
		<span class="box">
			<input class="largerCheckbox" type="checkbox" @if($form->copy_train )checked @else @endif>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;สำเนาเอกสารรับรองการเข้ารับการฝึกอบรมตามหลักสูตรที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวน .....{{ $form->copy_train}}..... ฉบับ<br>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พร้อมรับรองสำเนาถูกต้อง (ถ้ามี)
	</div>
	<div>
		<span class="box">
			<input class="largerCheckbox" type="checkbox" @if($form->sub_copy_citizen_id )checked @else @endif>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;สำเนาบัตรประจำตัวประชาชนหรือสำเนาทะเบียนบ้านของ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	จำนวน .....{{ $form->sub_copy_citizen_id}}..... ฉบับ<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ยื่นคำขอแทน พร้อมร้บรองสำเนาถูกต้อง
	</div>
	<div>
		<span class="box">
			<input class="largerCheckbox" type="checkbox" @if($form->power_attorney )checked @else @endif>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;หนังสือมอบอำนาจจากคนพิการหรือหลักฐานที่แสดงว่ามีส่วน &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวน .....{{ $form->power_attorney}}..... ฉบับ <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกี่ยวข้องกับคนพิการเนื่องจากเป็นผู้ปกครอง ผู้พิทักษ์ ผู้อนุบาล<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หรือผู้ดูแลคนพิการ (กรณี ผู้ยื่นคำขอแทน)
	</div>
	<div class="detail-1"><br>	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		ข้าพเจ้า @if($form->type == 2) {{ $form->substitute->title }} @else {{ $form->address->title }} @endif
		<div class="name">
			@if($form->type == 2)
				{{ $form->substitute->first_name}}&nbsp;&nbsp;{{$form->substitute->last_name }}
			@else
				{{ $form->user->first_name }}&nbsp;&nbsp;{{ $form->user->last_name }}
			@endif
		</div>
		<input type="checkbox" @if($form->type == 1) checked @else @endif>คนพิการ &nbsp;
		<input type="checkbox" @if($form->type == 2) checked @else @endif>ผู้ยื่นคำขอแทน
		ประเภทความพิการ
		<div class="type">
			@if($form->type == 2)
					-
			@else
				{{ $form->user->disability->description }} 
			@endif
		</div>
		บัตรประจำตัวคนพิการ/บัตรประชาชนเลขที่
		<div class="card">
			@if($form->type == 2)
				{{ $form->substitute->citizen_id }}
			@else
				{{ $form->user->pwd_id }}
			@endif
		</div>
		ที่อยู่ที่สามารถติดต่อได้
		บ้านเลขที่
		<div class="house">
			@if($form->type == 2)
				{{ $form->substitute->house_no }}
			@else
				{{ $form->address->house_no }}
			@endif
		</div>
		หมู่ที่
		<div class="moo">
			@if($form->type == 2)
				{{ $form->substitute->village_no }}
			@else
				{{ $form->address->village_no }}
			@endif
		</div>
		ซอย/ถนน
		<div class="lane">
			@if($form->type == 2)
				{{ $form->substitute->lane }}
			@else
				{{ $form->address->lane }}
			@endif
		</div>
		ตำบล/แขวง
		<div class="district">
			@if($form->type == 2)
				{{ $form->substitute->sub_district }}
			@else
				{{ $form->address->sub_district }}
			@endif
		</div>
		อำเภอ/เขต 
		<div class="district">
			@if($form->type == 2)
				{{ $form->substitute->district }}
			@else
				{{ $form->address->district }}
			@endif
		</div>
		จังหวัด
		<div class="province">
			@if($form->type == 2)
				{{ $form->substitute->province }}
			@else
				{{ $form->address->province }}
			@endif
		</div>
		รหัสไปรษณีย์
		<div class="postal_code">
			@if($form->type == 2)
				{{ $form->substitute->postal_code }}
			@else
				{{ $form->address->postal_code }}
			@endif
		</div>
		สถานศึกษา
		<div class="edu">
			@if($form->type == 2)
				{{ $form->substitute->edu_place }}
			@else
				{{ $form->address->edu_place }}
			@endif
		</div>
		โทรศัพท์
		<div class="tel">
			@if($form->type == 2)
				{{ $form->substitute->tel }}
			@else
				{{ $form->address->tel }}
			@endif
		</div>
		ที่อยู่อีเมล์ (e-mail address)
		<div class="email">
			@if($form->type == 2)
				{{ $form->substitute->email }}
			@else
				{{ $form->user->email }}
			@endif
		</div>
	</div>

	<div class="detail-2"><br><br><br><br>	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีความประสงค์ขอยืมอุปกรณ์/เครื่องมือ เทคโนโลยีสารสนเทศและการสื่อสารหรือ เทคโนโลยีสิ่ง
		อำนวยความสะดวกเพี่อการสื่อสาร ให้แก่
		<div class="name2">
			{{ $form->user->first_name }}&nbsp;&nbsp;{{ $form->user->last_name }}
		</div>
		เลขบัตรประจำตัวคนพิการ 
		<div class="pwd_id">
			{{ $form->user->pwd_id }}
		</div>
		ที่อยู่ที่สามารถติดต่อได้
		บ้านเลขที่
		<div class="house">
			{{ $form->address->house_no }}
		</div>
		หมู่ที่ 
		<div class="moo">
			@if($form->type == 2)
				{{ $form->substitute->village_no }}
			@else
				{{ $form->address->village_no }}
			@endif
		</div>
		ซอย/ถนน
		<div class="lane">
			{{ $form->address->lane }}
		</div>
		ตำบล/แขวง
		<div class="district">
			{{ $form->address->sub_district }}
		</div>
		อำเภอ/เขต
		<div class="district">
			{{ $form->address->district }}
		</div>
		จังหวัด
		<div class="province">
			{{ $form->address->province }}
		</div>
		รหัสไปรษณีย์
		<div class="postal_code">
			{{ $form->address->postal_code }}
		</div>
		สถานศึกษา
		<div class="edu">
			{{ $form->address->edu_place }}
		</div>
		โทรศัพท์
		<div class="tel">
			{{ $form->address->tel }}
		</div>
		ที่อยู่อีเมล์ (e-mail address)
		<div class="email2">
			{{ $form->user->email }}
		</div>
		โดยมีวัตถุประสงค์เพื่อ (โปรดระบุ)
		<div class="object">
			{{ $form->objective }}
		</div>
		ในรายการอุปกรณ์
		<div class="accessorie">
			{{ $form->accessorie_list }}
		</div>
		เลขที่อุปกรณ์
		<div class="accessorie">
			{{ $form->accessorie_no }}
		</div>
</div>
	<div class="foot"><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		ข้าพเจ้าขอรับรองว่าข้อความข้างต้นเป็นจริงทุกประการเมื่อได้รับอุกปกรณ์/เครื่องมือเทคโนโลยี
		สารสนเทศและการสื่อสารหรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสารแล้ว จะนำไปใช้ให้เกิดประโยชน์
		ตามหลักเกณฑ์ วิธีการ และเงื่อนไขที่กระทรวงเทคโนโลยีสารสนเทศและการสื่อสารกำหนด
	</div>
	<br><br>
	<P align = "center" > ขอแสดงความนับถือ </P>
	<br>	
	<div class="sign" align="right">
		ลงชื่อ ......................................................................... ( คนพิการ/ผู้ยื่นคำขอแทน)<br>
         ( .............................................................................)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	</div>

	
  
	
</body>
</html>


