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
                                    <a href="{{ url('user-login') }}">
                                        <i class="fa fa-lock"></i>
                                        <span>เข้าสู่ระบบ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">
                                        <i class="fa fa-user"></i>
                                        <span>ลงทะเบียนเข้าใช้งาน</span>
                                    </a>
                                </li>
                            @else
                                @if (Auth::user()
            ->roles()
            ->first()->name == 'Admin')
                                    <li class="{{ request()->is('dashboard') ? 'active open' : '' }}">
                                        <a href="{{ route('dashboard') }}">
                                            <i class="fa fa-home"></i>
                                            <span>หน้าหลัก</span>
                                        </a>
                                    </li>
                                    <li class="{{ request()->is('admin/*') ? 'active open' : '' }}">
                                        <a href="{{ route('admin') }}" role="button" tabindex="0">
                                            <i class="fa fa-list"></i>
                                            <span>1. ระบบจัดการครุภัณฑ์</span>
                                        </a>
                                        <ul>
                                            <li class="{{ request()->is('admin/assets*') ? 'active' : '' }}">
                                                <a href="{{ route('assets.dashboard') }}">
                                                    <i class="fa fa-angle-right"></i>1.1 อุปกรณ์และเครื่องมือ</a>
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
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-square"></i>
                                            <span>2. ตรวจสอบสิทธิ์</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-university"></i>
                                            <span>3. อนุมัติสัญญา</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-envelope"></i>
                                            <span>4. ข้อความ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-check-o"></i>
                                            <span>5. ปฏิทินกิจกรรม</span>
                                            <span class="label label-info">ใหม่</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <span>6. ตอบแบบสำรวจ</span>
                                            <span class="label label-warning">2</span>
                                        </a>
                                    </li>
                                @endif

                                @if (Auth::user()
            ->roles()
            ->first()->name == 'Audit')
                                    <li class="{{ request()->is('home') ? 'active open' : '' }}">
                                        <a href="{{ route('home') }}">
                                            <i class="fa fa-home"></i>
                                            <span>หน้าหลัก</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-square"></i>
                                            <span>1. ตรวจสอบสิทธิ์</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()
            ->roles()
            ->first()->name == 'Approve')
                                    <li class="{{ request()->is('home') ? 'active open' : '' }}">
                                        <a href="{{ route('home') }}">
                                            <i class="fa fa-home"></i>
                                            <span>หน้าหลัก</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-university"></i>
                                            <span>1. อนุมัติสัญญา</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()
            ->roles()
            ->first()->name == 'Audit' ||
        Auth::user()
            ->roles()
            ->first()->name == 'Approve')
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-envelope"></i>
                                            <span>2. ข้อความ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-edit"></i>
                                            <span>3. ปัญหาการใช้งาน</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar-check-o"></i>
                                            <span>4. ปฏิทินกิจกรรม</span>
                                            <span class="label label-info">ใหม่</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            <span>5. ตอบแบบสำรวจ</span>
                                            <span class="label label-warning">2</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Auth::user()
            ->roles()
            ->first()->name == 'User')
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-download"></i>
                                            <span>1. ระบบยืมอุปกรณ์</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('manual') }}">
                                                    <i class="fa fa-angle-right"></i>1.1 ศึกษาการใช้อุปกรณ์เครื่องมือ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>1.2
                                                    ลงทะเบียนความต้องการฝึกอบรมการใช้อุปกรณ์/เครื่องมือ</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('doc') }}">
                                                    <i class="fa fa-angle-right"></i>1.3 เอกสารที่เกี่ยวข้อง</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('object') }}">
                                                    <i class="fa fa-angle-right"></i>1.4 รายการอุปกรณ์ทั้งหมด</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-edit"></i>
                                            <span>2. กรอกเอกสารแบบคำขอยืมอุปกรณ์</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a role="button" tabindex="0">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>2.1 แบบเดี่ยว</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('form-borrow') }}">
                                                            <i class="fa fa-angle-right"></i>แบบคำขอยืมอุปกรณ์ฯ (ทก. 01)</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('form-receive') }}">
                                                            <i class="fa fa-angle-right"></i>แบบคำขอรับอุปกรณ์ฯ (ทก. 02)</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>2.2 แบบกลุ่ม</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-angle-right"></i>แบบคำขอยืมอุปกรณ์ฯ (ทก. 03)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-angle-right"></i>แบบคำขอรับอุปกรณ์ฯ (ทก. 04)</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-file-text"></i>
                                            <span>3. ผลการพิจารณา</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>3.1
                                                    แบบสรุปผลการพิจรณาอนุมัติการขอยืมอุปกรณ์ฯ (ทก.09)
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>3.2
                                                    แบบสรุปผลการพิจรณายกเลิกการขอยืมอุปกรณ์ฯ (ทก.10)</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>3.3
                                                    แบบสรุปผลการพิจรณาอนุมัติการขอรับอุปกรณ์ฯ (ทก.11)</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>3.4
                                                    แบบสรุปผลการพิจรณายกเลิกการขอรับอุปกรณ์ฯ (ทก.12)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-info-circle"></i>
                                            <span>4. แจ้งความประสงค์ใช้สิทธิ</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>4.1 แบบแจ้งความประสงค์และรับมอบอุปกรณ์ฯ
                                                    (ทก.05)
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-file-text-o"></i>
                                            <span>5. จัดทำสัญญา/หนังสือค้ำประกัน</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>5.1 สัญญา
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>5.2 หนังสือค้ำประกัน
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-retweet"></i>
                                            <span>6. ประวัติการยืม</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>6.1 รายละเอียดการรับอุปกรณ์
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-send-o "></i>
                                            <span>7. ส่งคืนอุปกรณ์</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-angle-right"></i>7.1 แบบคำขอส่งคืนอุปกรณ์ฯ (ทก.06)
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-user"></i>
                                            <span>8. ข้อมูลส่วนตัว</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('profile') }}">
                                                    <i class="fa fa-angle-right"></i>8.1 ข้อมูลผู้พิการ
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('substitute') }}">
                                                    <i class="fa fa-angle-right"></i>8.2 ข้อมูลผู้ยื่นคำขอแทน
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>
                                            <span>9. ข้อความ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-exclamation-triangle"></i>
                                            <span>10. ปัญหาการใช้งาน</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            <span>11. ปฎิทินกิจกรรม</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <span>12. ตอบแบบสำรวจ</span>
                                        </a>
                                    </li>
                                @endif
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
