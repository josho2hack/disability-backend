<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            [
                'email' => 'admin@pwdsthai.org',   //1
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ดูแลระบบ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123',
                'system_id' => 'AM63-001',
                'appove_date' => now()
            ],
            [
                'email' => 'audit@pwdsthai.org', //2
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ตรวจสอบ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123',
                'system_id' => 'AD63-001',
                'appove_date' => now()
            ],
            [
                'email' => 'approve@pwdsthai.org', //3
                'password' => bcrypt('password'),
                'first_name' => 'ผู้อนุมัติ',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123',
                'system_id' => 'AP63-001',
                'appove_date' => now()
            ],
            [
                'email' => 'user@pwdsthai.org',  //4
                'password' => bcrypt('password'),
                'first_name' => 'ผู้ใช้งาน',
                'last_name' => 'เครื่องมือผู้พิการ',
                'gender' => true,
                'active' => true,
                'email_verified_at' => now(),
                'citizen_id' => '1234567890123',
                'pwd_id' => '1234567890123',
                'system_id' => 'MB63-001',
                'appove_date' => now()
            ],
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'Admin', //1
                'description' => 'ผู้ดูแลระบบ'
            ],
            [
                'name' => 'Audit', //2
                'description' => 'ผู้ตรวจสอบ'
            ],
            [
                'name' => 'Approve', //3
                'description' => 'ผู้อนุมัติ'
            ],
            [
                'name' => 'User', //4
                'description' => 'สมาชิก'
            ],
        ]);

        DB::table('user_options')->insert([
            [
                'verify' => 1
            ],
        ]);

        DB::table('disability_types')->insert([
            [
                'description' => "คนพิการทางการเห็น" //1
            ],
            [
                'description' => "คนพิการทางการได้ยินหรือสื่อความหมาย" //2
            ],
            [
                'description' => "คนพิการทางการเคลื่อนไหวหรือร่างกาย" //3
            ],
            [
                'description' => "คนพิการทางจิตใจหรือพฤติกรรม" //4
            ],
            [
                'description' => "คนพิการทางสติปัญญา" //5
            ],
            [
                'description' => "คนพิการทางการเรียนรู้" //6
            ],
            [
                'description' => "คนพิการทางออทิสติก" //7
            ],
        ]);

        $user = App\User::find(1);
        $user->roles()->attach(1);
        $user = App\User::find(2);
        $user->roles()->attach(2);
        $user = App\User::find(3);
        $user->roles()->attach(3);

        $user = App\User::find(4);
        $user->roles()->attach(4);
        $dis_type = App\DisabilityType::find(1);
        $user->disabilityType()->associate($dis_type);
        $user->save();

        DB::table('asset_statuses')->insert([
            [
                'name' => 'คงเหลือ'
            ],
            [
                'name' => 'รอรับ'
            ],
            [
                'name' => 'ยืม'
            ],
            [
                'name' => 'เสีย'
            ],
            [
                'name' => 'ส่งซ่อม'
            ],
            [
                'name' => 'สูญหาย'
            ]
            ,
            [
                'name' => 'อื่น ๆ'
            ]
        ]);

        DB::table('main_groups')->insert([
            [
                'name' => 'เทคโนโลยีสารสนเทศและการสื่อสาร'
            ],
            [
                'name' => 'เทคโนโลยีสิ่งอำนวยความสะดวกเพื่อการสื่อสาร'
            ]
        ]);

        DB::table('sub_groups')->insert([
            [
                'name' => 'เครื่องคอมพิวเตอร์',
                'main_groups_id' => '1'
            ],//1
            [
                'name' => 'อุปกรณ์สื่อสาร (โทรศัพท์เคลื่อนที่)',
                'main_groups_id' => '1'
            ],//2
            [
                'name' => 'เครื่องช่วยสื่อสารพร้อมอุปกรณ์ต่อพ่วงสำหรับคนพิการ',
                'main_groups_id' => '2'
            ],//3
            [
                'name' => 'เครื่องพิมพ์อักษรเบรลล์ด้วยระบบคอมพิวเตอร์',
                'main_groups_id' => '2'
            ],//4
            [
                'name' => 'เครื่องสแกนเนอร์',
                'main_groups_id' => '2'
            ],//5
            [
                'name' => 'เครื่องแสดงผลอักษรเบรลล์',
                'main_groups_id' => '2'
            ],//6
            [
                'name' => 'อุปกรณ์ควบคุมตัวชี้ตำแหน่ง',
                'main_groups_id' => '2'
            ],//7
            [
                'name' => 'โปรแกรมคอมพิวเตอร์สำหรับแปลสื่อสิ่งพิมพ์เป็นอักษรเบรลล์หรืออักษรเบรลล์เป็นสื่อสิ่งพิมพ์',
                'main_groups_id' => '2'
            ],//8
            [
                'name' => 'โปรแกรมคอมพิวเตอร์สำหรับอ่านหน้าจอ',
                'main_groups_id' => '2'
            ],//9
            [
                'name' => 'โปรแกรมคอมพิวเตอร์แปลภาพเป็นอักษรและมีเสียงสังเคราะห์',
                'main_groups_id' => '2'
            ],//10
            [
                'name' => 'โปรแกรมคอมพิวเตอร์ขยายจอภาพ',
                'main_groups_id' => '2'
            ],//11
            [
                'name' => 'โปรแกรมคอมพิวเตอร์อ่านหนังสือสำหรับคนพิการ',
                'main_groups_id' => '2'
            ],//12
            [
                'name' => 'โปรแกรมคอมพิวเตอร์ช่วยในการพิมพ์',
                'main_groups_id' => '2'
            ],//13
            [
                'name' => 'โปรแกรมพจนานุกรมสำหรับคนพิการ',
                'main_groups_id' => '2'
            ],//14
            [
                'name' => 'โปรแกรมสำหรับโทรศัพท์เคลื่อนที่เพื่ออำนวยความสะดวกในการสื่อสาร',
                'main_groups_id' => '2'
            ],//15
            [
                'name' => 'เครื่องมือหรืออุปกรณ์ช่วยในการใช้คอมพิวเตอร์',
                'main_groups_id' => '2'
            ],//16
            [
                'name' => 'ชุดอุปกรณ์สำหรับฝึกการใช้แป้นพิมพ์คอมพิวเตอร์',
                'main_groups_id' => '2'
            ],//17
        ]);

        DB::table('asset_categories')->insert([
            //1
            [
                'name' => 'เครื่องคอมพิวเตอร์แบบตั้งโต๊ะ',
                'description' => 'ใช้สำหรับการเข้าถึงข้อมูลข่าวสารและการสื่อสาร โดยใช้ประกอบกับอุปกรณ์ต่อพ่วง โปรแกรม และอุปกรณ์ต่าง ๆ สำหรับคนพิการแต่ละประเภท',
                'for_give' => 'ยืม',
                'sub_groups_id' => '1'
            ],
            //2
            [
                'name' => 'เครื่องคอมพิวเตอร์แบบพกพา',
                'description' => 'ใช้สำหรับการเข้าถึงข้อมูลข่าวสารและการสื่อสาร โดยใช้ประกอบกับอุปกรณ์ต่อพ่วง โปรแกรม และอุปกรณ์ต่าง ๆ สำหรับคนพิการแต่ละประเภท',
                'for_give' => 'ยืม',
                'sub_groups_id' => '1'
            ],
            //3
            [
                'name' => 'เครื่องแท็บเล็ตSamsung Galaxy Tab 4 10.1"',
                'description' => 'ใช้สำหรับการเข้าถึงข้อมูลข่าวสารและการสื่อสาร โดยใช้ประกอบกับอุปกรณ์ต่อพ่วง โปรแกรม และอุปกรณ์ต่าง ๆ สำหรับคนพิการแต่ละประเภท',
                'for_give' => 'ยืม',
                'sub_groups_id' => '1'
            ],
            //4
            [
                'name' => 'Samsung Galaxy Grand 2',
                'description' => 'ใช้สำหรับการติดต่อสื่อสาร โดยใช้ประกอบกับโปรแกรมอ่านจอภาพและโปรแกรมสำหรับโทรศัพท์เคลื่อนที่ เพื่ออำนวยความสะดวกในการสื่อสาร',
                'for_give' => 'ยืม',
                'sub_groups_id' => '2'
            ],
            //5
            [
                'name' => 'อุปกรณ์เชื่อมต่อระบบ FM Cochlear CP800 Series',
                'description' => 'อุปกรณ์ที่ใช้เชื่อมต่อระหว่างเครื่องแปลงสัญญาณเสียง (speech processor) ของผู้ผ่าตัดประสาทหูเทียม กับตัวรับสัญญาณ เอฟเอ็ม (FM)',
                'for_give' => 'ยืม',
                'sub_groups_id' => '3'
            ],
            //6
            [
                'name' => 'Single chart',
                'description' => 'เป็นอุปกรณ์เสริมและทางเลือกอื่นสำหรับการสื่อสาร เพื่อช่วยให้บุคคลที่มีความบกพร่องทางการพูดและภาษาที่มีความยากลำบากในการเปล่งเสียงพูด หรือพูดไม่ได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '3'
            ],
            //7
            [
                'name' => 'Grid chart',
                'description' => 'เป็นอุปกรณ์เสริมและทางเลือกอื่นสำหรับการสื่อสาร เพื่อช่วยให้บุคคลที่มีความบกพร่องทางการพูดและภาษาที่มีความยากลำบากในการเปล่งเสียงพูด หรือพูดไม่ได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '3'
            ],
            //8
            [
                'name' => 'Super talker',
                'description' => 'เป็นอุปกรณ์เพื่อเป็นการสื่อสาร การใช้งานสามารถบันทึกเสียงลงในช่องตารางสี่เหลี่ยมแต่ละช่อง',
                'for_give' => 'ยืม',
                'sub_groups_id' => '3'
            ],
            //9
            [
                'name' => 'Go talk 32',
                'description' => 'เป็นอุปกรณ์เพื่อเป็นการสื่อสาร การใช้งานสามารถบันทึกเสียงลงในช่องตารางสี่เหลี่ยมแต่ละช่อง',
                'for_give' => 'ยืม',
                'sub_groups_id' => '3'
            ],
            //10
            [
                'name' => 'Juliet Pro 60',
                'description' => 'เป็นเครื่องพิมพ์ที่ใช้พิมพ์อักษรเบรลล์จากคอมพิวเตอร์ลงบนกระดาษ',
                'for_give' => 'ยืม',
                'sub_groups_id' => '4'
            ],
            //11
            [
                'name' => 'EmprintSpotDot',
                'description' => 'เป็นเครื่องพิมพ์ที่ใช้พิมพ์อักษรเบรลล์จากคอมพิวเตอร์ลงบนกระดาษและสามารถพิมพ์สีได้ด้วย',
                'for_give' => 'ยืม',
                'sub_groups_id' => '4'
            ],
            //12
            [
                'name' => 'EPSON WF-3521',
                'description' => 'เป็นเครื่องสแกนเนอร์ที่มีความสามารถใช้ พิมพ์งาน สแกน ถ่ายเอกสาร ส่งแฟกซ์ เพื่อความสะดวกในการใช้งานได้หลายด้าน',
                'for_give' => 'ยืม',
                'sub_groups_id' => '5'
            ],
            //13
            [
                'name' => 'PAC Mate BX440',
                'description' => 'เครื่องแสดงผลอักษรเบรลล์ชนิด ๔๐เซลล์โดยแสดงผลจากการเชื่อมต่อกับคอมพิวเตอร์เป็นอักษรเบรลล์ และใช้งานร่วมกับโปรแกรมอ่านหน้าจอได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '6'
            ],
            //14
            [
                'name' => 'Focus40 Blue',
                'description' => 'เครื่องแสดงผลอักษรเบรลล์ชนิด ๔๐เซลล์โดยแสดงผลจากการเชื่อมต่อกับคอมพิวเตอร์เป็นอักษรเบรลล์ และใช้งานร่วมกับโปรแกรมอ่านหน้าจอได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '5'
            ],
            //15
            [
                'name' => 'PAXMATE BX420',
                'description' => 'เครื่องแสดงผลอักษรเบรลล์ชนิด ๔๐เซลล์โดยแสดงผลจากการเชื่อมต่อกับคอมพิวเตอร์เป็นอักษรเบรลล์ และใช้งานร่วมกับโปรแกรมอ่านหน้าจอได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '5'
            ],
            //16
            [
                'name' => 'Mini Seika',
                'description' => 'เครื่องแสดงผลอักษรเบรลล์ชนิด ๑๖เซลล์โดยแสดงผลจากการเชื่อมต่อกับคอมพิวเตอร์เป็นอักษรเบรลล์ และใช้งานร่วมกับโปรแกรมอ่านหน้าจอและโทรศัพท์เคลื่อนที่แบบสมาร์ทโฟนได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '5'
            ],
            //17
            [
                'name' => 'อุปกรณ์ควบคุมตัวชี้ตำแหน่งด้วยศีรษะ (Head Mouse Smart Nav)',
                'description' => 'ควบคุมการทำงานสำหรับคนพิการทางร่างกายที่มีความยากลำบากหรือไม่สามารถใช้แขนและมือในการควบคุมการใช้เมาส์ปกติได้ แต่สามารถควบคุมการเคลื่อนไหวศีรษะได้ดี โดยเป็นอุปกรณ์ติดตามความเคลื่อนไหวของศีรษะแทนการใช้เมาส์ปกติ ทำงานโดยใช้ระบบอินฟราเรด ควบคุมการเคลื่อนที่ของลูกศรบนจอภาพตามทิศทางการเคลื่อนที่ของศีรษะ และป้อนข้อมูลโดยใช้ระบบหน่วงเวลาหรือการป้อนข้อมูลผ่านสวิตช์เดี่ยว',
                'for_give' => 'ยืม',
                'sub_groups_id' => '7'
            ],
            //18
            [
                'name' => 'อุปกรณ์ควบคุมตัวชี้ตำแหน่งด้วยเสียงฮัม (Humming Pointer)',
                'description' => 'เป็นโปรแกรมควบคุมการเคลื่อนที่ของลูกศรบนจอภาพตามทิศทางการเคลื่อนที่ของเสียงฮัม',
                'for_give' => 'ยืม',
                'sub_groups_id' => '7'
            ],
            //19
            [
                'name' => 'โปรแกรมแปลงอักษรภาษาต่างประเทศเป็นอักษรเบรลล์ (Duxbery Braille Translation)',
                'description' => 'โปรแกรมแปลงอักษรภาษาต่างประเทศเป็นอักษรเบรลล์',
                'for_give' => 'ให้',
                'sub_groups_id' => '8'
            ],
            //20
            [
                'name' => 'โปรแกรมแปลงอักษรภาษาไทย เป็นอักษรเบรลล์ (Thai Braille Translation)',
                'description' => 'โปรแกรมแปลงอักษรภาษาไทย เป็นอักษรเบรลล์',
                'for_give' => 'ให้',
                'sub_groups_id' => '8'
            ],
            //21
            [
                'name' => 'JAWS',
                'description' => 'โปรแกรมคอมพิวเตอร์สำหรับอ่านหน้าจอ',
                'for_give' => 'ให้',
                'sub_groups_id' => '9'
            ],
            //22
            [
                'name' => 'โปรแกรมแปลงภาพเป็นอักษรและมีเสียงสังเคราะห์ฯ (Open Book )',
                'description' => 'เป็นโปรแกรมที่ใช้แปลงภาพเป็นข้อความ และมีเสียงสังเคราะห์ภาษาอังกฤษ ในขณะที่ใช้โปรแกรมสามารถใช้งานร่วมกับสแกนเนอร์ในการแปลงข้อมูลเป็นข้อความภาษาอังกฤษได้',
                'for_give' => 'ให้',
                'sub_groups_id' => '10'
            ],
            //23
            [
                'name' => 'โปรแกรมแปลงภาพเป็นอักษรภาษาไทย (ArnThai)',
                'description' => 'เป็นโปรแกรมที่ใช้แปลงภาพเป็นข้อความและมีเสียงสังเคราะห์ แปลงข้อความในสื่อสิ่งพิมพ์ให้เป็นภาพ ข้อความ และเป็นข้อความอิเล็กทรอนิกส์ (ภาษาไทย) สามารถใช้งานร่วมกับสแกนเนอร์',
                'for_give' => 'ให้',
                'sub_groups_id' => '10'
            ],
            //24
            [
                'name' => 'โปรแกรมแปลงภาพเป็นอักษรภาษาไทยและภาษาอังกฤษ (ABBYY Find Reader OCR)',
                'description' => 'โปรแกรมที่ใช้แปลงภาพเป็นข้อความอักษรได้ทั้งภาษาไทยและภาษาอังกฤษ สามารถใช้งานร่วมกับสแกนเนอร์เพื่อแปลงภาพเป็นข้อความอักษรได้',
                'for_give' => 'ให้',
                'sub_groups_id' => '10'
            ],
            //25
            [
                'name' => 'โปรแกรมขยายหน้าจอ (Zoom Text)',
                'description' => 'สามารถขยายภาพและอักษรบนจอภาพ ปรับสีอ่อน/เข้ม และปรับมุมมองการอ่านข้อมูลได้หลายแบบ',
                'for_give' => 'ให้',
                'sub_groups_id' => '11'
            ],
            //26
            [
                'name' => 'โปรแกรมอ่านหนังสือ (TAB Player)',
                'description' => 'โปรแกรมที่ใช้สำหรับอ่านหนังสือเสียงอิเล็กทรอนิกส์ ระบบเดซี่ ซึ่งสามารถดาวน์โหลดได้จากเว็บไซต์ของผู้พัฒนาได้',
                'for_give' => 'ให้',
                'sub_groups_id' => '12'
            ],
            //27
            [
                'name' => 'โปรแกรมอ่านหนังสือ (AIMS)',
                'description' => 'โปรแกรมที่ใช้สำหรับอ่านหนังสือเสียงอิเล็กทรอนิกส์ ระบบเดซี่ ซึ่งสามารถดาวน์โหลดได้จากเว็บไซต์ของผู้พัฒนาได้',
                'for_give' => 'ให้',
                'sub_groups_id' => '12'
            ],
            //28
            [
                'name' => 'โปรแกรมเลือกคำศัพท์ภาษาไทย (Thai word Prediction 2.1)',
                'description' => 'โปรแกรมเลือกศัพท์ไทยแบบมีเสียงอ่าน เป็นโปรแกรมเพื่อช่วยการเขียนสำหรับผู้ที่มีปัญหาการสะกดคำ เหมาะสำหรับผู้ที่พิมพ์งานแทนการเขียนโดยใช้ร่วมกับโปรแกรมประมวลผลคำ',
                'for_give' => 'ให้',
                'sub_groups_id' => '13'
            ],
            //29
            [
                'name' => 'โปรแกรมค้นหาศัพท์ภาษาไทย Thai word Search 1.2)',
                'description' => 'โปรแกรมค้นหาศัพท์ไทยแบบมีเสียงอ่าน เป็นโปรแกรมช่วยการเขียนเบื้องต้น จะช่วยค้นหาคำที่เขียนถูกต้องและอ่านให้ฟัง',
                'for_give' => 'ให้',
                'sub_groups_id' => '13'
            ],
            //30
            [
                'name' => 'โปรแกรมฝึกพิมพ์ (Type Learn)',
                'description' => 'เป็นโปรแกรมที่ใช้ฝึกพิมพ์ดีด โดยมีแบบฝึกหัดและสรุปผลลัพธ์ในการฝึกพิมพ์ในแต่ละครั้ง เหมาะสำหรับคนพิการที่ต้องการฝึกทักษะในการพิมพ์คอมพิวเตอร์',
                'for_give' => 'ให้',
                'sub_groups_id' => '13'
            ],
            //31
            [
                'name' => 'โปรแกรมพจนานุกรม (Lexitron v.3)',
                'description' => 'พจนานุกรมอิเล็กทรอนิกส์ภาษาไทย<>ภาษาอังกฤษ และภาษาอังกฤษ<>ภาษาไทย มีเสียงสังเคราะห์เมื่อต้องการฟังเสียงคำศัพท์',
                'for_give' => 'ให้',
                'sub_groups_id' => '14'
            ],
            //32
            [
                'name' => 'โปรแกรมพจนานุกรมภาษามือสำหรับคนพิการ',
                'description' => 'พจนานุกรมภาษามือไทย แบบสามมิติ',
                'for_give' => 'ให้',
                'sub_groups_id' => '14'
            ],
            //33
            [
                'name' => 'โปรแกรม AAC (Augmentative and AlternativeCommunication Device)',
                'description' => 'เป็นระบบสังเคราะห์เสียงพูดภาษาไทย สามารถช่วยเหลือกระบวนการสื่อสารด้วยเสียงหรือทดแทนเสียงในการพูดของมนุษย์ ด้วยการแปลงข้อความเป็นเสียงพูด (Text-to-Speech)',
                'for_give' => 'ให้',
                'sub_groups_id' => '15'
            ],
            //34
            [
                'name' => 'ลูกบอลควบคุมขนาดใหญ่ (Big Track)',
                'description' => 'เป็นลูกบอลควบคุมที่ใช้แทนเมาส์ปกติ มีลูกบอลขนาดเส้นผ่านศูนย์กลางอย่างน้อย 3 นิ้ว วางอยู่ด้านบนบริเวณตรงกลาง เพื่อใช้ในการควบคุมการเคลื่อนที่ของลูกศรบนจอภาพ การใช้งานเหมาะสมสำหรับบุคคลที่ไม่สามารถใช้มือในการควบคุมการใช้เมาส์ปกติได้ เช่น มีอาการเกร็ง อ่อนแรง แต่สามารถใช้นิ้วมือหลายนิ้วหรือฝ่ามือได้คล่อง',
                'for_give' => 'ยืม',
                'sub_groups_id' => '16'
            ],
            //35
            [
                'name' => 'เมาส์ควบคุมขนาดเล็ก (Trackball)',
                'description' => 'เป็นเมาส์แบบที่มีลูกบอลอยู่ด้านบน สำหรับใช้ในการควบคุมการเคลื่อนที่ของลูกศรบนจอภาพ โดยกลิ้งลูกบอลไปในทิศทางที่ต้องการ โดยลูกบอลมีขนาดเส้นผ่าศูนย์กลาง 1.5 นิ้ว การใช้งานเหมาะสำหรับบุคคลที่ไม่สามารถใช้มือในการควบคุมการใช้เมาส์ปกติได้',
                'for_give' => 'ยืม',
                'sub_groups_id' => '16'
            ],
            //36
            [
                'name' => 'ที่ครอบคีย์บอร์ด (Key Guard)',
                'description' => 'อุปกรณ์ที่นำแผ่นพลาสติก มาครอบลงบนแป้นพิมพ์ เพื่อช่วยให้ผู้ใช้ที่มีความยากลำบากในการควบคุมการเคลื่อนไหวของนิ้วมือกดปุ่มต่างๆ บนแป้นพิมพ์ได้ไม่ตรงตำแหน่ง โดยมักกดพลาดไปโดนปุ่มที่ไม่ต้องการ',
                'for_give' => 'ยืม',
                'sub_groups_id' => '16'
            ],
            //37
            [
                'name' => 'แป้นพิมพ์คอมพิวเตอร์พร้อมลูกบอลควบคุม (Scorpius 35 PRO)',
                'description' => 'แป้นพิมพ์พร้อมเมาส์แบบที่มีลูกบอลอยู่ด้านบน สำหรับใช้ในการควบคุมการเคลื่อนที่ของลูกศรบนจอภาพ',
                'for_give' => 'ยืม',
                'sub_groups_id' => '16'
            ],
            //38
            [
                'name' => 'ชุดอุปกรณ์สำหรับการใช้แป้นพิมพ์คอมพิวเตอร์ (CU Speaker)',
                'description' => 'เป็นอุปกรณ์ที่ใช้ฝึกพิมพ์โดยไม่ต้องต่อเชื่อมกับคอมพิวเตอร์มีเพียงแป้นพิมพ์และอุปกรณ์รับสัญญาณจากแป้นพิมพ์มีเสียงขณะพิมพ์บนแป้นพิมพ์',
                'for_give' => 'ยืม',
                'sub_groups_id' => '17'
            ],
        ]);

        $asset_categories = App\AssetCategory::find(1);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(2);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(3);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(4);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(5);
        $asset_categories->disablilityTypes()->attach(2);

        $asset_categories = App\AssetCategory::find(6);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);

        $asset_categories = App\AssetCategory::find(7);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);

        $asset_categories = App\AssetCategory::find(8);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);

        $asset_categories = App\AssetCategory::find(9);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);

        $asset_categories = App\AssetCategory::find(10);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(11);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(12);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(13);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(14);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(15);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(16);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(17);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(18);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(19);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(20);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(21);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(22);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(23);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(24);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(25);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(26);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);

        $asset_categories = App\AssetCategory::find(27);
        $asset_categories->disablilityTypes()->attach(1);

        $asset_categories = App\AssetCategory::find(28);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(29);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(30);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(31);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(2);
        $asset_categories->disablilityTypes()->attach(3);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(32);
        $asset_categories->disablilityTypes()->attach(2);

        $asset_categories = App\AssetCategory::find(33);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(4);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        $asset_categories = App\AssetCategory::find(34);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(35);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(36);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(37);
        $asset_categories->disablilityTypes()->attach(3);

        $asset_categories = App\AssetCategory::find(38);
        $asset_categories->disablilityTypes()->attach(1);
        $asset_categories->disablilityTypes()->attach(5);
        $asset_categories->disablilityTypes()->attach(6);
        $asset_categories->disablilityTypes()->attach(7);

        \App\SurveyType::insert([
            [
                'name' => 'แบบสำรวจความพึงพอใจ',
                'slug' => 'survey-type-one'
            ]
        ]);

        \App\NewsCategory::insert([
            [
                'name' => 'ไม่มีหมวดหมู่',
                'slug' => 'uncategory'
            ]
        ]);

        \App\NewsGroup::insert([
            [
                'name' => 'ไม่มีกลุ่ม',
                'slug' => 'ungroup'
            ]
        ]);

    }
}
