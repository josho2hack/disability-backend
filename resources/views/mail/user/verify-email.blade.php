@component('mail::message')
# ยืนยันอีเมล์

โปรดยืนยันอีเมล์ เพื่อยืนยันการสมัครสมาชิก
<br>
คลิกปุ่ม ยืนยันอีเมล์ ด้านล่าง

@component('mail::button', ['url' => $url])
ยืนยันอีเมล์
@endcomponent

ด้วยความนับถือ<br>
{{ config('app.name') }}
@endcomponent
