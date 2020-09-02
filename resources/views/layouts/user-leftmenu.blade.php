<aside id="leftmenu">
    <div id="leftmenu-wrap">
        <div class="panel-group slim-scroll" role="tablist">
            <div class="panel panel-default">
                <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <!--  NAVIGATION Content -->
                        <ul id="navigation">
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-envelope"></i>
                                    <span>1. ข้อความ</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.1 ข้อความใหม่
                                            <span class="label label-success">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.2 ส่งข้อความ</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="{{ url('object') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>2. รายการครุภัณฑ์ว่าง</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>3. ประวัติการยืม</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('tutorial') }}">
                                    <i class="fa fa-mortar-board"></i>
                                    <span>4. ศึกษาการใช้อุปกรณ์/เครื่องมือ</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                    <span>5. ลงทะเบียนความต้องการขอฝึกอบรมการใช้อุปกรณ์/ เครื่องมือ </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('doc') }}">
                                    <i class="fa fa-search-plus"></i>
                                    <span>6. จัดเตรียมเอกสาร </span>
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-edit"></i>
                                    <span>7. กรอกแบบฟอร์ม</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('form-borrow') }}">
                                            <i class="fa fa-angle-right"></i>7.1 แบบฟอร์มยืม</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>7.2 แบบฟอร์มรับ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>7.3 แบบฟอร์มคืน</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>7.4 แบบฟอร์มสัญญา</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-square-o"></i>
                                    <span>8. สัญญายืม/ค้ำประกัน</span>
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-edit"></i>
                                    <span>9. ปัญหาการใช้งาน</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>9.1 แจ้งปัญหา</a>
                                    </li>
                                    <li>
                                        <a href="tables-static.html">
                                            <i class="fa fa-angle-right"></i>9.2 ปัญหาที่พบบ่อย</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>10. ปฏิทินกิจกรรม</span>
                                    <span class="label label-info">ใหม่</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span>11. ตอบแบบสำรวจ</span>
                                    <span class="label label-warning">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('profile') }}">
                                    <i class="fa fa-user"></i>
                                    <span>จัดการข้อมูลส่วนตัว</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('substitute')}}">
                                    <i class="fa fa-user"></i>
                                    <span>รายละเอียดผู้ยื่นคำขอยืมแทน</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-map-o"></i>
                                    <span>แผนทีตั้งหน่วยงาน</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ NAVIGATION Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
