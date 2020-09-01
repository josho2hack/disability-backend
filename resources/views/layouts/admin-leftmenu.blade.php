<aside id="leftmenu">
    <div id="leftmenu-wrap l-parpl">
        <div class="panel-group slim-scroll" role="tablist">
            <div class="panel panel-default">
                <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <!--  NAVIGATION Content -->
                        <ul id="navigation">
                            @guest
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
                            @else
                                @if (Auth::user()->roles()->first()->name == 'Admin')
                                    <li class="{{ request()->is('dashboard') ? 'active open' : '' }}">
                                        <a href="{{ route('dashboard') }}">
                                            <i class="fa fa-dashboard"></i>
                                            <span>ภาพรวมระบบ</span>
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('admin/*') ? 'active open' : '' }}">
                                        <a href="{{ route('admin') }}" role="button" tabindex="0">
                                            <i class="fa fa-list"></i>
                                            <span>1. บริหารจัดการระบบ</span>
                                        </a>
                                        <ul>
                                            <li class="{{ request()->is('admin/assets*') ? 'active' : '' }}">
                                                <a href="{{ route('assets.dashboard') }}">
                                                    <i class="fa fa-angle-right"></i>1.1 ระบบบริหารจัดการครุภัณฑ์</a>
                                            </li>
                                            <li class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                                                <a href="{{ route('users.index') }}">
                                                    <i class="fa fa-angle-right"></i>1.2 สมาชิก</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>1.3 ยืม/คืน อุปกรณ์
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>1.4 จัดการสัญญา</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>1.5 จัดการแบบฟอร์ม</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>1.7 ระบบรับแจ้งปัญหา</a>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-angle-right"></i>1.8
                                                    ระบบจัดการเว็บ</a> </a>
                                                <ul>
                                                    <li>
                                                        <a role="button" tabindex="0"
                                                            href="{{ route('admin.news.index') }}">
                                                            <i class="fa fa-angle-right"></i>1.8.1 จัดการข่าวสาร</a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0" href="{{ url('activity') }}">
                                                            <i class="fa fa-angle-right"></i>1.8.2 จัดการกิจกรรม</a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0" href="{{ url('fileupload') }}">
                                                            <i class="fa fa-angle-right"></i>1.8.3 จัดการไฟล์</a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0"
                                                            href="{{ route('admin.surveys.index') }}">
                                                            <i class="fa fa-angle-right"></i>1.8.4 จัดการแบบสำรวจ</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                @endif
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
                                @if ((Auth::user()->roles()->first()->name == 'Admin') || (Auth::user()->roles()->first()->name == 'Audit'))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-square"></i>
                                        <span>3. ตรวจสอบสิทธิ์</span>
                                    </a>
                                </li>
                                @endif
                                @if ((Auth::user()->roles()->first()->name == 'Admin') || (Auth::user()->roles()->first()->name == 'Approve'))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-university"></i>
                                        <span>4. อนุมัติสัญญา</span>
                                    </a>
                                </li>
                                @endif
                                @if (Auth::user()->roles()->first()->name == 'User')
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
                                @endif
                                @if (!(Auth::user()->roles()->first()->name == 'Admin'))
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
                                @endif
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
                            @endguest
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
