@component('mail::message')
# แจ้งผลการสมัครสมาขิก

เรียน  คุณ {{ $user->FullName }}
<br>
เรื่อง แจ้งผลการสมัครสมาชิก เสร็จสมบูรณ์
<br>
ท่านได้รับสิทธิเป็นสมาชิก โดยมีรายละเอียดดังต่อไปนี้
<br>
<br>
<span style="color: blue">
วันที่ทำรายการ : {{ formatDateThai($user->approve_date) }} {{ formatTimeThai($user->approve_date) }}
</span>
<br>
หมายเลขบัตรประชาชน : {{ $user->citizen_id }}
<br>
อีเมล์ที่สมัครสมาชิก : {{ $user->email }}
<br>
เบอร์โทรศัพท์มือถือที่สมัครสมาชิก : {{ $user->profile->tel ?? ''}}
<br>
สถานะการสมัครสมาชิก : <span style="color: green">อนุมัติใช้งาน</span>
<br>

@component('mail::button', ['url' => 'https://www.pwdsthai.org/user-login'])
เข้าสู่ระบบ
@endcomponent

ด้วยความนับถือ<br>
{{ config('app.name') }}
@endcomponent
