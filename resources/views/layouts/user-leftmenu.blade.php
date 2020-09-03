<aside id="leftmenu" style="background-color: #d1d1d1;">
    <div id="leftmenu-wrap">
        <div class="panel-group slim-scroll" role="tablist">
            <div class="panel panel-default">
                <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                    <div class="panel-body">
                        <!--  NAVIGATION Content -->
                        <ul id="navigation" style="background-color: #d1d1d1;">
                            <li class="open">
                                        <a href="{{ route('home') }}" style="background-image: linear-gradient(45deg, #89a8a9, #dceae7);">
                                            <i class="fa fa-home"></i>
                                            <span>หน้าหลัก</span>
                                        </a>
                                    </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <i class="fa fa-download"></i>
                                    <span>1. ระบบยืมอุปกรณ์</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('tutorial') }}">
                                            <i class="fa fa-angle-right"></i>1.1 ศึกษาการใช้อุปกรณ์เครื่องมือ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('practice/index') }}">
                                            <i class="fa fa-angle-right"></i>1.2 ลงทะเบียนความต้องการฝึกอบรมการใช้อุปกรณ์/เครื่องมือ</a>
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
                                            <i class="fa fa-angle-right"></i>3.1 แบบสรุปผลการพิจรณาอนุมัติการขอยืมอุปกรณ์ฯ (ทก.09)
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>3.2 แบบสรุปผลการพิจรณายกเลิกการขอยืมอุปกรณ์ฯ (ทก.10)</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>3.3 แบบสรุปผลการพิจรณาอนุมัติการขอรับอุปกรณ์ฯ (ทก.11)</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>3.4 แบบสรุปผลการพิจรณายกเลิกการขอรับอุปกรณ์ฯ (ทก.12)</a>
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
                                            <i class="fa fa-angle-right"></i>4.1 แบบแจ้งความประสงค์และรับมอบอุปกรณ์ฯ (ทก.05)
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
                                            <i class="fa fa-angle-right"></i>8.1 ข้อมูลคนพิการ
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
                            
                        </ul>
                        <!--/ NAVIGATION Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
