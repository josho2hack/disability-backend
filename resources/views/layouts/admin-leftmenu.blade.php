<aside id="leftmenu">
    <div id="leftmenu-wrap">
        <div class="panel-group slim-scroll" role="tablist">
            <div class="panel panel-default">
                <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <!--  NAVIGATION Content -->
                        <ul id="navigation">
                            <li class="active open">
                                <a href="{{ route('admin')}}">
                                    <i class="fa fa-dashboard"></i>
                                    <span>ภาพรวมระบบ</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin')}}" role="button" tabindex="0">
                                    <i class="fa fa-list"></i>
                                    <span>1. บริหารจัดการระบบ</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('assets.dashboard')}}">
                                            <i class="fa fa-angle-right"></i>1.1 อุปกรณ์และเครื่องมือ</a>
                                    </li>
                                    <li>
                                        <a href="admin/users">
                                            <i class="fa fa-angle-right"></i>1.2 สมาชิก</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.3 ยืม/คืน อุปกรณ์
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.4 สัญญา</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.5 แบบฟอร์ม</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.6 ปฏิทินกิจกรรม</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.7 ปัญหา</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.8 แบบสอบถาม</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.9 จัดการไฟล์</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>1.10 ระบบจัดการเนื้อห</a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right"></i>1.10.1 จัดการข่าว
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-right"></i>1.10.2 จัดการกิจกรรม</a>
                                                </li>
                                            </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-envelope"></i>
                                    <span>2. ข้อความ</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>2.1 ข้อความใหม่
                                            <span class="label label-success">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>2.2 ส่งข้อความ</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-check-square"></i>
                                    <span>3. ตรวจสอบสิทธิ์</span>
                                </a>
                            </li>
                            <li>
                                <a  href="#">
                                    <i class="fa fa-university"></i>
                                    <span>4. อนุมัติสัญญา</span>
                                </a>
                            <li>
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>5. ประวัติการยืม</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('object') }}">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>6. รายการครุภัณฑ์ว่าง</span>
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
                                            <i class="fa fa-angle-right"></i>8.1 แจ้งปัญหา</a>
                                    </li>
                                    <li>
                                        <a href="tables-static.html">
                                            <i class="fa fa-angle-right"></i>8.2 ปัญหาที่พบบ่อย</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>10. ปฏิทินกิจกรรม</span>
                                    <span class="label label-primary">กิจกรรมใหม่</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span>11. ตอบแบบสอบถาม</span>
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-edit"></i>
                                    <span>12. ระบบจัดการเว็บ</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('news') }}">
                                            <i class="fa fa-angle-right"></i>12.1 จัดการข่าวสาร</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('activity') }}">
                                            <i class="fa fa-angle-right"></i>12.2 จัดการกิจกรรม</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('fileupload') }}">
                                            <i class="fa fa-angle-right"></i>12.3 จัดการไฟล์</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.surveys.index') }}">
                                            <i class="fa fa-angle-right"></i>11.4 จัดการแบบสำรวจ</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-lock"></i>
                                    <span>เข้าสู่ระบบ</span>
                                </a>
                            </li>
                            <li>
                                <a href="profile.html">
                                    <i class="fa fa-user"></i>
                                    <span>ลงทะเบียนเข้าใช้งาน</span>
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
