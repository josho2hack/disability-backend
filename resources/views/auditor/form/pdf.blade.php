<title>{{ config('app.name', 'ICT for Disability') }}</title>
<style>
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
    *{
        font-family: 'THSarabunNew', sans-serif;
        font-size: 18px;
    }
    body{

        border: 1px;
        word-wrap: break-word;
    }
    @page {
      size: landscape;
      margin-left: 90.84px;
      margin-right: 60.64px;
    }
    @media print{
        size: A4;
    }
    .square{
        border: 1px solid #000; 
        overflow: auto; 
        width: 200px;
        height: 100px;
        text-align: center;
        font-size: 17px;
        float: right;
    }
    .fill-text-justify{
        text-align: justify;
        text-justify: distribute;
    }
    .text-center{
        text-align: center;
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

    table {
      border-collapse: collapse;
      word-wrap: break-word;  
      width: 100%;
    }

    table, td, th {
      border: 1px solid ;
    }

</style>

                <div class="row">
                    <div class="col-sm-offset-6 col-sm-6">
                        <div class="square">
                            <div> ทก.๐๗ </div>
                            <div> สำหรับหน่วยงาน – ส่ง </div>
                            <div> คณะอนุกรรมการฯ </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <br><br><br>
                        แบบรายงานการขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร<br>   
                    หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ <br><br>
                    ครั้งที่ <input type="text" name="round" value="{{ $form->round }}" readonly style="width:5%;"> ประจำปีงบประมาณ <input type="text" name="year" value="{{ $form->year }}" style="width:10%;"><br>
                    หน่วยงานที่รับคำขอฯ <input type="text" name="office" value="{{ $form->office }}" style="width:15%;" required> จังหวัด <input type="text" name="city" value="{{ $form->office }}" style="width:12%;" required>
                    </div>
                </div>

                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2" >ที่</th>
                                <th  >ชื่อ – สกุล คนพิการ</th>
                                <th  rowspan="2">ที่อยู่</th>
                                <th  rowspan="2">ประเภทความพิการ</th>
                                <th  rowspan="2">อายุ</th>
                                <th  rowspan="2">รายการอุปกรณ์/เครื่องมือฯ ที่ขอยืม</th>
                                <th  rowspan="2">ราคา/หน่วย</th>
                                <th  colspan="2">การขอใช้สิทธิ</th>
                                <th  rowspan="2">หมายเหตุ</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">หมายเลขบัตรประชาชน</th>
                                <th style="text-align: center;">รายบุคคล</th>
                                <th style="text-align: center;">รายกลุ่ม</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $form->form01s as $audit)
                            <tr align="center">
                                <td rowspan="2"> {{ $loop->iteration }} </td>
                                <td> {{ $audit->user->first_name }} {{ $audit->user->last_name }} </td>
                                <td rowspan="2"> 
                                    {{ $audit->address->house_no }} หมู่ {{ $audit->address->village_no }}  
                                    ต.{{ $audit->address->sub_district }}อ.{{ $audit->address->district }} 
                                    จ.{{ $audit->address->province }}  {{ $audit->address->postal_code }}
                                </td>
                                <td rowspan="2"> {{ $audit->user->disability->description }} </td>
                                <td rowspan="2"> 
                                    {{ (date('Y')) - ((date('Y', strtotime($audit->user->birthday))))  }}
                                </td>
                                <td rowspan="2"> 
                                    @if(strlen($audit->accessorie_list)>55)
                                    {{ $audit->accessorie_list = substr($audit->accessorie_list, 0, 55)."..." }}
                                    @else
                                    {{ $audit->accessorie_list}}
                                    @endif
                                </td>
                                <td rowspan="2"> {{ number_format($audit->asset->price) }} </td>
                                <td rowspan="2"> {{-- @if($audit->table == 'App\Form01') --}} <i class="fa fa-check"></i>  {{-- @endif --}}</td>
                                <td rowspan="2">{{-- @if($audit->table == 'App\Form03') <i class="fa fa-check"></i>  @endif  --}}</td>
                                <td rowspan="2">  </td>
                            </tr>
                            <tr>
                                <td align="center"> {{flexNformat($audit->user->citizen_id, ".-....-.....-..-.", "-") }} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

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