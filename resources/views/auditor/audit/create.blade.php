@extends('layouts.form')
@section('content')
<style>
    .square{
        border: 1px solid #000; 
        overflow: auto; 
        width: 240px;
        height: 80px;
        text-align: center;
        font-size: 17px;
    }
    .fill-text-justify{
        text-align: justify;
        text-justify: distribute;
    }
    input{
        border: none;
        background-color: #FFF;
        padding: 0px;
        padding-top: 10px;
        width: 50px;
        text-align: center;
        font-size: 1.2rem;
    }
    input[type="text"]{
        
        width: auto;
        padding: 0px 10px;
        border-bottom: 2px dotted #4D585F;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input[type="number"]{
        border-bottom: 2px dotted #4D585F;
        -moz-appearance: textfield;
    }
    input[type="checkbox"],input[type="radio"]{
        width: auto;
    }
    input[type="file"]{
        background: #1a1a1a;
        border: 1px solid #FCF;
        color: #FCC:
    }
    input[type="checkbox"][disabled]{
        cursor: auto;
    }

</style>
    <!-- bradcome -->
    <div class="b-b mb-10">
        <h3 class="h3 m-0">6.1 แบบฟอร์มยืม</h3>
    </div>

    <div class="boxs">
        <div class="boxs-body" style="width: auto; margin: auto; padding: 15px 80px;">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square pull-right">
                            <div> ทก.๐๗ </div>
                            <div> สำหรับหน่วยงาน – ส่ง </div>
                            <div> คณะอนุกรรมการฯ </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        แบบรายงานการขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>   
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ <br><br>
                    ครั้งที่ .............. ประจำปีงบประมาณ .....................<br>
                    หน่วยงานที่รับคำขอฯ .................................................................... จังหวัด ...........................................
                    </div>
                </div>


                <div class="row">
@php

function flexNformat($value, $pattern, $split_symbol) {
  $value_split = str_split($value, 1);
  $count_value = count($value_split);
  $pattern_splited = explode($split_symbol, $pattern);
  $numPatterSplited = count($pattern_splited);

  $sb = 0;
  for ($i=0; $i < $numPatterSplited; $i++) {
    for ($ii=0; $ii < strlen($pattern_splited[$i]); $ii++) {
      @$finalValue .= $value_split[$ii+$sb];
      if (($ii + 1) == strlen($pattern_splited[$i])) {
        $sb += strlen($pattern_splited[$i]);
        if ($sb != $count_value) {
          $finalValue .= $split_symbol;
        }
      }
    }
  }

  return $finalValue;

}

// echo flexNformat("1234567890123", ".-....-.....-..-.", "-");
// echo flexNformat("0123456789", "...-...-....", "-");

@endphp
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle; text-align: center;">ที่</th>
                                <th style="vertical-align: middle; text-align: center;" >ชื่อ – สกุล คนพิการ</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">ที่อยู่</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">ประเภทความพิการ</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">อายุ</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">รายการอุปกรณ์/เครื่องมือฯ ที่ขอยืม</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">ราคา/หน่วย</th>
                                <th style="vertical-align: middle; text-align: center;" colspan="2">การขอใช้สิทธิ</th>
                                <th style="vertical-align: middle; text-align: center;" rowspan="2">หมายเหตุ</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">หมายเลขบัตรประชาชน</th>
                                <th style="text-align: center;">รายบุคคล</th>
                                <th style="text-align: center;">รายกลุ่ม</th>
                            </tr>
                            
                            
                        </thead>
                        <tbody>
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> 1 </td>
                                <td> กฤตติกา ใจดี </td>
                                <td rowspan="2" style="vertical-align: middle;"> 89/364 หมู่ 5 ต.บางพูด อ.ปากเกร็ด จ.นนทบุรี 1120 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คนพิการทางการเห็น </td>
                                <td rowspan="2" style="vertical-align: middle;"> 50 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คอมพิวเตอร์ </td>
                                <td rowspan="2" style="vertical-align: middle;"> 15,000 </td>
                                <td rowspan="2" style="vertical-align: middle;"> <i class="fa fa-check"></i>  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat("1234567890123", ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> 2 </td>
                                <td> ชัญญา พาสบาย </td>
                                <td rowspan="2" style="vertical-align: middle;"> 89/364 หมู่ 5 ต.บางพูด อ.ปากเกร็ด จ.นนทบุรี 1120 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คนพิการทางการเห็น </td>
                                <td rowspan="2" style="vertical-align: middle;"> 50 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คอมพิวเตอร์ </td>
                                <td rowspan="2" style="vertical-align: middle;"> 15,000 </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                                <td rowspan="2" style="vertical-align: middle;"> <i class="fa fa-check"></i> </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat("9876543210489", ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> 3 </td>
                                <td> ชติกา รุ่งเรือง </td>
                                <td rowspan="2" style="vertical-align: middle;"> 89/364 หมู่ 5 ต.บางพูด อ.ปากเกร็ด จ.นนทบุรี 1120 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คนพิการทางการเห็น </td>
                                <td rowspan="2" style="vertical-align: middle;"> 50 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คอมพิวเตอร์ </td>
                                <td rowspan="2" style="vertical-align: middle;"> 15,000 </td>
                                <td rowspan="2" style="vertical-align: middle;"> <i class="fa fa-check"></i>  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat("5878423159987", ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> 4 </td>
                                <td> นิรดา ยินดี </td>
                                <td rowspan="2" style="vertical-align: middle;"> 89/364 หมู่ 5 ต.บางพูด อ.ปากเกร็ด จ.นนทบุรี 1120 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คนพิการทางการเห็น </td>
                                <td rowspan="2" style="vertical-align: middle;"> 50 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คอมพิวเตอร์ </td>
                                <td rowspan="2" style="vertical-align: middle;"> 15,000 </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                                <td rowspan="2" style="vertical-align: middle;"> <i class="fa fa-check"></i> </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat("5235698751154", ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2" style="vertical-align: middle;"> 5 </td>
                                <td> ปาลิดา รักษา </td>
                                <td rowspan="2" style="vertical-align: middle;"> 89/364 หมู่ 5 ต.บางพูด อ.ปากเกร็ด จ.นนทบุรี 1120 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คนพิการทางการเห็น </td>
                                <td rowspan="2" style="vertical-align: middle;"> 50 </td>
                                <td rowspan="2" style="vertical-align: middle;"> คอมพิวเตอร์ </td>
                                <td rowspan="2" style="vertical-align: middle;"> 15,000 </td>
                                <td rowspan="2" style="vertical-align: middle;"> <i class="fa fa-check"></i>  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                                <td rowspan="2" style="vertical-align: middle;">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat("3226599874153", ".-....-.....-..-.", "-") }} </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                

                    <div class="row">
                        <div class="col-sm-offset-5 col-sm-7">
                            <div class="form-group">
                            ลงชื่อ <input type="text" name="submitSign" style="width: 58%;"><br>
                                <span>( <input type="text" value="อริย์ธัช ทิพย์จักร์" name="submitSign" style="width: 70%;"> )</span>
                        </div>
                        </div>
                        <div class="col-sm-offset-5 col-sm-7">
                            <div class="form-group">
                            ตำแหน่ง <input type="text" name="submitSign" style="width: 58%;">หัวหน้าหน่วยงาน<br><br>
                                <span>ลงวันที่<input type="text" value="" style="width: 20%;">/<input type="text" value="" style="width: 20%;">/<input type="text" value="" style="width: 20%;">
                                </span>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="text-right">
                    <button class="btn btn-raised btn-success">บันทึก ทก.07</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
@endsection
