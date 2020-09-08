<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ยืนยันอีเมล์</title>
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" media="screen">

</head>
<body>
    <div class="contain">
        <div class="row clearfix" style="margin-top: 40px; margin-bottom: 40px;">
            <div class="col-sm-12 col-xs-12">
                <div class="swal2-modal swal2-show"
                    style="display: block; width: 500px; padding: 20px; background: rgb(255, 255, 255); min-height: 354px;"
                    tabindex="-1">
                    <ul class="swal2-progresssteps" style="display: none;"></ul>
                    <div class="swal2-icon swal2-error" style="display: none;">
                        <span class="x-mark"><span class="line left"></span>
                            <span class="line right"></span></span>
                    </div>
                    <div class="swal2-icon swal2-question" style="display: none;">?</div>
                    <div class="swal2-icon swal2-warning" style="display: none;">!</div>
                    <div class="swal2-icon swal2-info" style="display: none;">i</div>
                    <div class="swal2-icon swal2-success animate" style="display: block;">
                        <span class="line tip animate-success-tip"></span>
                        <span class="line long animate-success-long"></span>
                        <div class="placeholder"></div>
                        <div class="fix"></div>
                    </div><img class="swal2-image" style="display: none;">
                    <h2 class="swal2-title">ระบบได้รับข้อมูลของท่านแล้ว</h2>
                    <div class="swal2-content" style="display: block;">
                        โปรดยืนยันอีเมล์ เพื่อยืนยันการสมัครสมาชิก
                    </div>
                    <input class="swal2-input" style="display: none;">
                    <input type="file" class="swal2-file" style="display: none;">
                    <div class="swal2-range" style="display: none;"><output></output><input type="range"></div>
                    <select class="swal2-select" style="display: none;"></select>
                    <div class="swal2-radio" style="display: none;"></div>
                    <label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"></label>
                    <textarea class="swal2-textarea" style="display: block;">ยืนยันการสมัครโปรคคลิกปุ่ม ยืนยันอีเมล์ ด้านล่าง</textarea>
                    <div class="swal2-validationerror" style="display: none;"></div>
                    <hr class="swal2-spacer" style="display: block;">
                    <a href="{{ $url }}" type="button" class="swal2-confirm swal2-styled"
                        style="background-color: rgb(48, 133, 214); border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">ยืนยันอีเมล์</a>
                    <span class="swal2-close" style="display: none;">×</span>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
