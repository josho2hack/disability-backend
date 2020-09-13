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
        
        
    }
    body{
        font-family: 'THSarabunNew', sans-serif;
        border: 1px;
        word-wrap: break-word;
        font-size: 18px;
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
        height: 78px;
        text-align: center;
        font-size: 17px;
        float: right;
        position: fixed;
        line-height: 14px;
    }
    .fill-text-justify{
        text-align: justify;
        text-justify: distribute;
    }
    .text-center{
        text-align: center;
    }

    table {
      border-collapse: collapse;
      word-wrap: break-word;  
      width: 100%;
    }

    table, td, th {
      border: 1px solid ;
    }

    .sign{
        padding-right: 120px;
        position: fixed;
        bottom: 160px;  
        right: 0;
    }
    .sign2{
        padding-right: 30px;
        position: fixed;
        bottom: 100px;  
        right: 0;
    }
    .head{
        padding-left: 200px;
        font-size: 20px;
    }
    .no{
        display: inline-block;
        border-bottom: 1px dotted;
        width: 50px;
        text-align: center;
    }
    .round{
        margin-left: 350px;
    }
    .year{
        display: inline-block;
        border-bottom: 1px dotted;
        width: 100px;
        text-align: center;
    }
    .office{
        display: inline-block;
        border-bottom: 1px dotted;
        width: 200px;
        text-align: center;
    }
    .province{
        display: inline-block;
        border-bottom: 1px dotted;
        width: 150px;
        text-align: center;
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


                    <div class="head" align="center">
                        <br> <br>
                      <div>  แบบรายงานการขอยืมอุปกรณ์และเครื่องมือเทคโนโลยีสารสนเทศและการสื่อสาร </div>
                       <div style="padding-right: 200px;"> หรือเทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร ตามกฎกระทรวงฯ </div>
                    </div>

                        <div class="round">
                            ครั้งที่ 
                            <div class="no">
                                {{ $form->round }}
                            </div>
                            ประจำปีงบประมาณ 
                            <div class="year">
                                {{ $form->year }}
                            </div>
                        </div>
                        <div class="off" style="margin-left: 220px;">
                            หน่วยงานที่รับคำขอฯ
                            <div class="office">
                                {{ $form->office }}
                            </div> 
                            จังหวัด 
                            <div class="province">
                                {{ $form->city }}
                            </div>
                        </div>

                    <br>
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

    <br>    
    <div class="sign" align="right">
        <div>ลงชื่อ ......................................................................... </div>
         <div>( .............................................................................)</div>
    </div>
    <div class="sign2" align="right">
        <div>ตำแหน่ง .......................................................................................... หัวหน้าหน่วยงาน</div>
         <div>ลงวันที่ ................../................................/...........................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    </div>