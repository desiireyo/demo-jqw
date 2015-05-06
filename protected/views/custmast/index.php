<h2><i class="fa fa-car"></i> ประวัติลูกค้า/ผู้ค้ำประกัน</h2>
<div id="custmastTool"></div>
<br />
<div id="tbcustmast"></div>
<input type="hidden" id="viewcustmast" value="">
<input type="hidden" id="custmastid" value="<?php echo $menucod ?>">
<form id="fmcustmast">
    <div id="docking" style="float: left;">
        <div style="overflow: hidden;">
            <div id="<?php echo $menucod ?>window4">
                <div>
                    กำหนดกลุ่ม/เกรด ลูกหนี้
                </div>
                <div style="overflow: hidden;">
                    <div id="box5">
                        <table>
                            <tr>
                                <td align="right">ประเภทลูกหนี้ : </td>
                                <td><div id='<?php echo $menucod ?>custtype'></div></td>
                            </tr>
                            <tr>
                                <td align="right">กลุ่มลูกหนี้ : </td>
                                <!-- <td><input type="text" id="<?php //echo $menucod ?>argroupcode" value=""></td> -->
                                <td class="group-input sn-data">
                                    <div id="<?php echo $menucod ?>argroupcode" class="input-button">
                                        <input type="text" id="<?php echo $menucod ?>argroupcode1" />
                                        <div id="<?php echo $menucod ?>searchArgroup"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                    </div>
                                    <div id="<?php echo $menucod ?>argroupdesc" class="input-desc"></div>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">เกรดลูกหนี้ : </td>
                                <!-- <td><input type="text" id="<?php //echo $menucod ?>grdcode" value=""></td> -->
                                <td align="left" class="group-input">
                                    <div id="<?php echo $menucod ?>grdcode" class="input-button">
                                        <input type="text" id="<?php echo $menucod ?>grdcode1" />
                                        <div id="<?php echo $menucod ?>searchGrd"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                    </div>
                                    <div id="<?php echo $menucod ?>grddesc" class="input-desc"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div id="<?php echo $menucod ?>window0" >
                <div id="box1_head">ข้อมูลส่วนตัว</div>
                <div style="overflow: hidden;">
                <div id="box1">
                    <table>
                        <tr>
                            <td align="right"><div id="box1_custcode">รหัสลูกค้า : </div></td>
                            <td><input type="text" id="<?php echo $menucod ?>custcode" value=""></td>
                        </tr>
                        <tr>
                            <td align="right"><div id="box1_sname">คำนำหน้า : </div></td>
                            <td><div id='<?php echo $menucod ?>sname'></div></td>
                        </tr>
                        <tr>
                            <td align="right"><div id="box1_fname">ชื่อ : </div></td>
                            <td><input type="text" id="<?php echo $menucod ?>fname" value=""></td>
                        </tr>
                        <tr>
                            <td align="right"><div id="box1_lname">นามสกุล : </div></td>
                            <td><input type="text" id="<?php echo $menucod ?>lname" value=""></td>
                        </tr>
                        <tr id="box1_nicknm">
                            <td align="right">ชื่อเล่น : </td>
                            <td><input type="text" id="<?php echo $menucod ?>nicknm" value=""></td>
                        </tr>
                        <tr>
                            <td align="right"><div id="box1_birthdt">วันเกิด : </div></td>
                            <td><div id='<?php echo $menucod ?>birthdt'></div></td>
                        </tr>
                        <tr>
                            <td align="right"><div id="box1_age">อายุ : </div></td>
                            <td><input type="text" id="<?php echo $menucod ?>age" value=""></td>
                        </tr>
                        <tr id="box1_sex">
                            <td align="right">เพศ : </td>
                            <td>
                                <div id="<?php echo $menucod ?>sex">
                                <div style="float: left;" id='<?php echo $menucod ?>sex1'>ชาย</div>
                                <div style="float: left;" id='<?php echo $menucod ?>sex2'>หญิง</div>
                                <div style="clear: both;"></div>
                                </div>
                            </td>
                        </tr>
                        <tr id="box1_cardtype">
                            <td align="right">ประเภทบัตร : </td>
                            <td><div id='<?php echo $menucod ?>cardtype'></div></td>
                        </tr>
                        <tr>
                            <td align="right">เลขที่ผู้เสียภาษี : </td>
                            <td><input type="text" id="<?php echo $menucod ?>idcard" value=""></td>
                        </tr>
                        <tr id="box1_issueby">
                            <td align="right">ออกบัตรโดย : </td>
                            <td><input type="text" id="<?php echo $menucod ?>issueby" value=""></td>
                        </tr>
                        <tr id="box1_issuedt">
                            <td align="right">วันที่ออกบัตร : </td>
                            <td><div id='<?php echo $menucod ?>issuedt'></div></td>
                        </tr>
                        <tr id="box1_expdt">
                            <td align="right">วันที่บัตรหมดอายุ : </td>
                            <td><div id='<?php echo $menucod ?>expdt'></div></td>
                        </tr>
                        <tr id="box1_nation">
                            <td align="right">สัญชาติ/เชื้อชาติ : </td>
                            <td><input type="text" id="<?php echo $menucod ?>nation" value=""></td>
                        </tr>
                        <tr id="box1_religion">
                            <td align="right">ศาสนา : </td>
                            <td><input type="text" id="<?php echo $menucod ?>religion" value=""></td>
                        </tr>
                        <tr id="box1_degree">
                            <td align="right">ระดับการศึกษา : </td>
                            <td><div id="<?php echo $menucod ?>degree"></div></td>
                        </tr>
                        <tr>
                            <td align="right">เบอร์มือถือ : </td>
                            <td><input type="text" id="<?php echo $menucod ?>mobile" value=""></td>
                        </tr>
                        <tr>
                            <td align="right">E-mail : </td>
                            <td><input type="text" id="<?php echo $menucod ?>email" value=""></td>
                        </tr>
                        <tr>
                            <td align="right">Line id : </td>
                            <td><input type="text" id="<?php echo $menucod ?>line_id" value=""></td>
                        </tr>
                    </table>
                </div><!-- end id box1 -->
            </div>
            </div>

        </div>
        <div>
            <div id="<?php echo $menucod ?>window1">
                <div>อาชีพ</div>
                <div id="box2">
                    <table>
                        <tr>
                            <td>อาชีพ</td>
                            <td align="left" class="group-input">
                                <div id="<?php echo $menucod ?>career" class="input-button">
                                    <input type="text" id="<?php echo $menucod ?>career1" />
                                    <div id="<?php echo $menucod ?>searchCareer"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                </div>
                                <div id="<?php echo $menucod ?>careerdesc" class="input-desc"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>ตำแหน่ง</td>
                            <td><input type="text" id="<?php echo $menucod ?>rank" value=""></td>
                        </tr>
                        <tr>
                            <td>อายุงาน (ปี/เดือน)</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="<?php echo $menucod ?>ageofwork_year" value=""> (ปี)
                                        </td>
                                        <td>
                                            <input type="text" id="<?php echo $menucod ?>ageofwork_month" value=""> (เดือน)
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>รายได้ต่อเดือน</td>
                            <td><div id='<?php echo $menucod ?>salary'></div></td>
                        </tr>
                        <tr>
                            <td>รายได้อื่นๆต่อเดือน</td>
                            <td><div id='<?php echo $menucod ?>other_salary'></div></td>
                        </tr>
                        <tr>
                            <td>ชื่อสถานที่ทำงาน</td>
                            <td><input type="text" id="<?php echo $menucod ?>compnm" value=""></td>
                        </tr>
                        <tr>
                            <td>ที่อยู่ที่ทำงาน</td>
                            <td><input type="text" id="<?php echo $menucod ?>compaddr" value=""></td>
                        </tr>
                        <tr>
                            <td>ประเภทธุรกิจ</td>
                            <td><div id="<?php echo $menucod ?>comptype"></div></td>
                        </tr>
                        <tr>
                            <td>เบอร์โทรศัพท์ที่ทำงาน</td>
                            <td><input type="text" id="<?php echo $menucod ?>comptelp" value=""></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div id="<?php echo $menucod ?>window2">
                <div>สถานภาพสมรส</div>
                <div style="overflow: hidden;">
                    <div id="box3">
                        <table>
                        <tr>
                            <td>สถานภาพ</td>
                            <td><div id="<?php echo $menucod ?>family_status"></div></td>
                        </tr>
                        <tr>
                            <td>ชื่อ/นามสกุล</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_nm" value=""></td>
                        </tr>
                        <tr>
                            <td>เบอร์มือถือ</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_telp" value=""></td>
                        </tr>
                        <tr>
                            <td>อาชีพ</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_career" value=""></td>
                        </tr>
                        <tr>
                            <td>ชื่อสถานที่ทำงาน</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_compnm" value=""></td>
                        </tr>
                        <tr>
                            <td>ที่อยู่ที่ทำงาน</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_compaddr" value=""></td>
                        </tr>
                        <tr>
                            <td>รายได้</td>
                            <td><input type="text" id="<?php echo $menucod ?>spouse_salary" value=""></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>

            <div id="<?php echo $menucod ?>window3">
                <div>
                    ลักษณะที่อยู่อาศัยปัจจุบัน
                </div>
                <div style="overflow: hidden;">
                    <div id="box4">
                        <table>
                        <tr>
                            <td>ลักษณะที่อยู่อาศัย</td>
                            <td><div id="<?php echo $menucod ?>home_style"></div></td>
                        </tr>
                        <tr>
                            <td>สถานภาพที่อยู่อาศัย</td>
                            <td><div id="<?php echo $menucod ?>home_status"></div></td>
                        </tr>
                        <tr>
                            <td>อาศัยมานาน (ปี / เดือน)</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" id="<?php echo $menucod ?>lived_year" value=""> (ปี)
                                        </td>
                                        <td>
                                            <input type="text" id="<?php echo $menucod ?>lived_month" value=""> (เดือน)
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end id docking -->

    <div id="docking2" style="float: left;">
        <div style="overflow: hidden;">
            <div id="windowX">
                <div>ที่อยู่</div>
                <div id="box6" style="height: 250px;">
                    <table>
                        <tr>
                            <td valign="top">
                                <table>
                                    <tr>
                                        <td align="right">ลำดับที่อยู่ : </td>
                                        <td align="left"><div id="<?php echo $menucod ?>addrid"></div></td>
                                    </tr>
                                    <tr>
                                        <td align="right">หมู่บ้าน/อาคาร : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>addrnm" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">ซอย : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>lane" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">ตำบล/แขวง : </td>
                                        <td align="left" class="group-input">
                                            <div id="<?php echo $menucod ?>sub_district0" class="input-button">
                                                <input type="text" id="<?php echo $menucod ?>sub_district01" />
                                                <div id="<?php echo $menucod ?>searchTumb"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                            </div>
                                            <div id="<?php echo $menucod ?>tumbdesc" class="input-desc"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">จังหวัด : </td>
                                        <!-- <td align="left"><input id="<?php //echo $menucod ?>provcode0" /></td> -->
                                        <td align="left" class="group-input">
                                            <div id="<?php echo $menucod ?>provcode0" class="input-button">
                                                <input type="text" id="<?php echo $menucod ?>provcode01" />
                                                <div id="<?php echo $menucod ?>searchProv"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                            </div>
                                            <div id="<?php echo $menucod ?>provdesc" class="input-desc"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">เบอร์โทรศัพท์ : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>telp" /></td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="right">หมายเหตุ : </td>
                                        <td align="left"><textarea id="<?php echo $menucod ?>memo1" ></textarea></td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top">
                                <table>
                                    <tr>
                                        <td align="right">บ้านเลขที่ : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>addrno" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">หมู่ที่ : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>villageno" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">ถนน : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>road" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">อำเภอ/เขต : </td>
                                        <!-- <td align="left" class="group-input"><input id="<?php //echo $menucod ?>district0" /></td> -->
                                        <td align="left" class="group-input">
                                            <div id="<?php echo $menucod ?>district0" class="input-button">
                                                <input type="text" id="<?php echo $menucod ?>district01" />
                                                <div id="<?php echo $menucod ?>searchAmp"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                                            </div>
                                            <div id="<?php echo $menucod ?>aumpdesc" class="input-desc"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">รหัสไปรษณีย์ : </td>
                                        <td align="left"><input id="<?php echo $menucod ?>zip" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">ใช้ติดต่อ : </td>
                                        <td>
                                            <div id="<?php echo $menucod ?>addr_contact0">
                                            <div style="float: left;" id='<?php echo $menucod ?>addr_contact1'>ใช่</div>
                                            <div style="float: left;" id='<?php echo $menucod ?>addr_contact2'>ไม่ใช่</div>
                                            <div style="clear: both;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">ใช้ส่งเอกสาร : </td>
                                        <td>
                                            <div id="<?php echo $menucod ?>addr_senddoc0">
                                            <div style="float: left;" id='<?php echo $menucod ?>addr_senddoc1'>ใช่</div>
                                            <div style="float: left;" id='<?php echo $menucod ?>addr_senddoc2'>ไม่ใช่</div>
                                            <div style="clear: both;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td align="right"></td>
                                        <td style="padding-top: 10px;" align="right"><input style="margin-right: 5px;" type="button" id="<?php //echo $menucod ?>Save0" value="บันทึก" /><input id="<?php //echo $menucod ?>Cancel0" type="button" value="ยกเลิก" /></td>
                                    </tr> -->
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> <!-- end id windowX -->
            <div id="w3">
                <div>รายการที่อยู่</div>
                <div id="<?php echo $menucod; ?>window6" style="height: 150px">
                    <div style="overflow: hidden;">
                        <div><div id="custaddr"></div></div>
                    </div>
                </div>
            </div>

        </div> <!-- end div style overflow -->
    </div> <!-- end id docking2 -->

    <div id="<?php echo $menucod ?>window7">
        <div>
            RISC</div>
        <div>
            <div style="overflow: hidden;">
                <form id="fmCustaddr0">
                    <table>
                    </table>
                    <input type="hidden" id="<?php echo $menucod ?>status0" value="">
                    <input type="hidden" id="<?php echo $menucod ?>bookcode_hd0" value="">
                    <input type="hidden" id="<?php echo $menucod ?>bookcode_chk0" value="">
                    <input type="hidden" id="<?php echo $menucod ?>bookcode_id0" value="">
                    <input type="hidden" id="<?php echo $menucod ?>bookcode_rowindex0" value="">
                </form>
            </div>
        </div>
    </div>


</form>
<br />
<?php echo $this->renderPartial('//layouts/search');  ?>
<br />
<script type="text/javascript">

    function keyPressed(event) {
        if(event.keyCode==13) {
            $("#searchButton").click();
        }
    };
    $(document).ready(function () {
        //var theme = 'darkblue';
        var theme = 'ui-redmond';
        var url = 'custmast/getcustaddr';
        var menucod = $("#custmastid").val();

        // Create a jqxComboBox
        var source = [
            { text: "บุคคล", value: 1 },
            { text: "นิติบุคคล", value: 2 }
		];

        $("#"+menucod+"custtype").jqxDropDownList({ height: 23, width: 250, source: source, displayMember: 'text', valueMember: 'value', theme: theme, dropDownHeight:50, selectedIndex: 0 });

        $("#"+menucod+"custcode").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 13 });

        // Create a jqxComboBox
        var source = [
                    "นาย",
                    "นางสาว",
                    "นาง"
		        ];
        $("#"+menucod+"sname").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25', dropDownHeight:100});

        $("#"+menucod+"fname").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"lname").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"nicknm").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 15 });

        //create date
        $("#"+menucod+"birthdt").jqxDateTimeInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"age").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });

        //create radio box
        $("#"+menucod+"sex1").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'sex' });
        $("#"+menucod+"sex2").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'sex' });

        // Create a jqxComboBox
        var source = [
                    "บัตรประชาชน",
                    "บัตรข้าราชการ"
		        ];
        $("#"+menucod+"cardtype").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25', dropDownHeight:50});
        $("#"+menucod+"idcard").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"issueby").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        //create date
        $("#"+menucod+"issuedt").jqxDateTimeInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"expdt").jqxDateTimeInput({ width: 250, height: 23, theme: theme });

        $("#"+menucod+"nation").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"religion").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });

        // Create a jqxComboBox
        var source = [
                    "ประถมศึกษา",
                    "มัธยมศึกษา",
                    "ปวช./ปวส./ปวท.",
                    "ปริญญาตรี",
                    "ปริญญาโท",
                    "ปริญญาเอก"
		        ];
        $("#"+menucod+"degree").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});

        $("#"+menucod+"career").jqxInput({ height: 23, width: 129, theme: theme, maxLength: 100 });
        $("#"+menucod+"rank").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"ageofwork_year").jqxInput({ height: 23, width: 85, theme: theme, maxLength: 100 });
        $("#"+menucod+"ageofwork_month").jqxInput({ height: 23, width: 85, theme: theme, maxLength: 100 });

        // Create a jqxComboBox
        var source = [
                    "0 - 10,000",
                    "10,000 - 30,000",
                    "30,000 - 50,000",
                    "50,000 - 100,000",
                    "มากกว่า 100,000"
		        ];
        $("#"+menucod+"salary").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});
        $("#"+menucod+"other_salary").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});

        $("#"+menucod+"compnm").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"compaddr").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        // Create a jqxComboBox
        var source = [
                    "ข้าราชการ/รัฐวิสาหกิจ",
                    "พนักงานเอกชน",
                    "เจ้าของกิจการ-มี ทบ.การค้า",
                    "เจ้าของกิจการ-ไม่มี ทบ.การค้า",
                    "อาชีพอิสระ",
                    "เกษตรกรรม",
                    "ไม่มีอาชีพ (แม่บ้าน/นักศึกษา)",
                    "จักรยานยนต์รับจ้าง",
                    "แพทย์, ทันตแพทย์, วิศวกร, สถาปนิก",
                    "ทหาร, ตำรวจ",
                    "ทนายความ, นักการเมือง",
                    "หาบเร่, แผงลอย",
                    "ก่อสร้าง",
                    "ลูกจ้างชั่วคราว, พนักงานโรงงาน",
                    "รับซื้อ/ขาย ของเก่า",
		        ];
        $("#"+menucod+"comptype").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});

        $("#"+menucod+"comptelp").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"argroupcode").jqxInput({ height: 23, width: 129, theme: theme, maxLength: 100 });
        $("#"+menucod+"grdcode").jqxInput({ height: 23, width: 129, theme: theme, maxLength: 100 });
        $("#"+menucod+"mobile").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"email").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"line_id").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        // Create a jqxComboBox
        var source = [
                    "โสด",
                    "สมรสจดทะเบียน",
                    "สมรสไม่จดทะเบียน",
                    "หย่า",
                    "หม้าย",
                    "แยกกันอยู่"
		        ];
        $("#"+menucod+"family_status").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});

        //$("#jqxNavigationBar").jqxNavigationBar({ width: 250, height: 430, expandMode: 'toggle'});

        $("#"+menucod+"spouse_nm").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"spouse_telp").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"spouse_compnm").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"spouse_compaddr").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"spouse_career").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });
        $("#"+menucod+"spouse_salary").jqxInput({ height: 23, width: 250, theme: theme, maxLength: 100 });

        // Create a jqxComboBox
        var source = [
                    "บ้านเดี่ยว",
                    "บ้านแฝด",
                    "ทาวน์เฮาส์",
                    "อาคารพาณิชย์",
                    "คอนโดมิเนียม",
                    "อพาร์ทเมนท์ / หอพัก"
		        ];
        $("#"+menucod+"home_style").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});
        // Create a jqxComboBox
        var source = [
                    "เป็นของตนเอง",
                    "เป็นของสมาชิกในครอบครัว",
                    "เป็นบ้านพักบริษัท",
                    "อาศัยอยู่กับเพื่อน",
                    "เช่าอยู่",
                    "ผ่อนอยู่"
		        ];
        $("#"+menucod+"home_status").jqxComboBox({ source: source, theme: theme, promptText: "Please choose...",width: '250', height: '25'});

        $("#"+menucod+"lived_year").jqxInput({ height: 23, width: 80, theme: theme, maxLength: 100 });
        $("#"+menucod+"lived_month").jqxInput({ height: 23, width: 80, theme: theme, maxLength: 100 });

        // create docking
        $('#docking').jqxDocking({
            theme:theme,
            orientation: 'horizontal',
            width: 800,
            mode: 'docked'
        });
        //$('#docking').jqxDocking('importLayout', '{"panel0": {"<?php echo $menucod ?>window4":{"collapsed":false},"<?php echo $menucod ?>window0":{"collapsed":false}},"panel1": {"<?php echo $menucod ?>window1":{"collapsed":false},"<?php echo $menucod ?>window2":{"collapsed":false},"<?php echo $menucod ?>window3":{"collapsed":false}},"floating":{},"orientation": "horizontal"}');

        $('#docking').jqxDocking('hideAllCloseButtons');
        //$('#docking').jqxDocking('pinWindow', menucod+'window0');

        $('#box1').jqxPanel({ width: 400, height: 1000 });

        $('#docking2').jqxDocking({
            theme:theme,
            orientation: 'vertical',
            width: 800,
            mode: 'docked'
        });

        $('#docking2').jqxDocking('hideAllCloseButtons');
        //$('#docking2').jqxDocking('expandWindow', 'windowX');
        $('#box6').jqxPanel({ width: 800, height: 250,  autoUpdate:true });
        //$('#box7').jqxPanel({ width: 1000,  autoUpdate:true });


        var source =
        {
            datatype: "json",
            datafields: [
                { name: 'idno', type: 'float' },
                { name: 'addrid', type: 'float' },
                { name: 'addrno', type: 'string' },
                { name: 'addrnm', type: 'string' },
                { name: 'villageno', type: 'string' },
                { name: 'lane', type: 'string' },
                { name: 'road', type: 'string' },
                { name: 'sub_district', type: 'string' },
                { name: 'district', type: 'string' },
                { name: 'provcod', type: 'string' },
                { name: 'zip', type: 'string' },
                { name: 'telp', type: 'string' },
                { name: 'addr_contact', type: 'string' },
                { name: 'addr_senddoc', type: 'string' },
                { name: 'memo1', type: 'string' },
				{ name: 'status', type: 'string' },
				{ name: 'bookcode_chk', type: 'string' }
            ],
            addrow: function (rowid, rowdata, position, commit) {
                commit(true);
            },
            deleterow: function (rowid, commit) {
                commit(true);
            },
            updaterow: function (rowid, newdata, commit) {
                commit(true);
            },
            id: 'id',
            url: url,
            sortcolumn: 'addrid',
            sortdirection: 'asc'
        };
        var dataAdapter = new $.jqx.dataAdapter(source);


        //เพิ่มที่อยู่
        $("#custaddr").jqxGrid(
        {
            width: 790,
            height: 145,
            theme: theme,
            source: dataAdapter,
            sortable: true,
            editable: false,
            editmode: 'selectedcell',
            keyboardnavigation: true,
            columns: [
                { text: 'ลำดับที่อยู่', datafield: 'addrid', width: 150 , cellsalign: 'left'},
                { text: 'บ้านเลขที่', datafield: 'addrno', width: 100 , cellsalign: 'left'},
                { text: 'หมู่บ้าน/อาคาร', datafield: 'addrnm', width: 150 , cellsalign: 'left'},
                { text: 'หมู่ที่', datafield: 'villageno', width: 50 , cellsalign: 'left'},
                { text: 'ซอย', datafield: 'lane', width: 100 , cellsalign: 'left'},
                { text: 'ถนน', datafield: 'road', width: 100 , cellsalign: 'left'},
                { text: 'ตำบล/แขวง', datafield: 'sub_district', width: 100 , cellsalign: 'left'},
                { text: 'อำเภอ/เขต', datafield: 'district', width: 100 , cellsalign: 'left'},
                { text: 'จังหวัด', datafield: 'provcode', width: 100 , cellsalign: 'left'},
                { text: 'รหัสไปรษณีย์', datafield: 'zip', width: 100 , cellsalign: 'left'},
                { text: 'เบอร์โทรศัพท์', datafield: 'telp', width: 100 , cellsalign: 'left'},
                { text: 'ใช้ติดต่อ', datafield: 'addr_contact', width: 100 , cellsalign: 'left'},
                { text: 'ใช้ส่งเอกสาร', datafield: 'addr_senddoc', width: 100 , cellsalign: 'left'},
                { text: 'หมายเหตุ', datafield: 'memo1', width: 100 , cellsalign: 'left'}
            ],
            showtoolbar: true,
            rendertoolbar: function (toolbar) {
                    var container = $("<div style='margin: 5px;'></div>");
                    toolbar.append(container);
                    container.append('<div id="addrow1" class="fa fa-plus toolsbtn"> เพิ่มที่อยู่</div>');
                    container.append('<div style="margin-left: 5px;" id="deleterow" class="fa fa-minus toolsbtn"> ลบที่อยู่</div>');
                    //container.append('<div style="margin-left: 5px;" id="updaterow" class="fa fa-pencil toolsbtn"> แก้ไขข้อมูล</div>');

                    // create new row.
                    $("#addrow1").off().on('click', function () {
                        var rowscount = $("#custaddr").jqxGrid('getdatainformation').rowscount;
                        var rows = [];
                        var x1 = 0;
                        if (rowscount !== 0) {
                            for (var i = 0; i < rowscount; i++) {
                                var data = $('#custaddr').jqxGrid('getrowdata', i);
                                if (data.idno === $("#"+menucod+"addrid").val()) {
                                    x1++;
                                }
                            }
                            if(x1===0){
                                table1_addrow();
                            }else{
                                alert("ระบุที่อยู่ซ้ำ");
                            }
                        }else {
                            table1_addrow();
                        }

                        return false;
                    });
                    $("#addrow1").jqxButton({ width: 80, theme: theme });

                    // delete row.
                    $("#deleterow").off().on('click', function () {
                        table1_deleterow();
                        return false;
                    });
                    $("#deleterow").jqxButton({ width: 80, theme: theme });

                    // update row.
                    // $("#updaterow").off().on('click', function () {
                    //     var rowscount = $("#custaddr").jqxGrid('getdatainformation').rowscount;
                    //     var rows = [];
                    //     var x1 = 0;
                    //     if (rowscount !== 0) {
                    //         for (var i = 0; i < rowscount; i++) {
                    //             var data = $('#custaddr').jqxGrid('getrowdata', i);
                    //             if (data.idno === $("#"+menucod+"addrid").val()) {
                    //                 x1++;
                    //             }
                    //         }
                    //         if(x1===0){
                    //             table1_updaterow();
                    //         }else{
                    //             alert(data.addrid+"ระบุที่อยู่ซ้ำ");
                    //         }
                    //     }else {
                    //         table1_updaterow();
                    //     }
                    //
                    //     return false;
                    // });
                    // $("#updaterow").jqxButton({ width: 80, theme: theme });
            }
        });

        //on click row
        $('#custaddr').off().on('rowselect', function (event) {
            // event arguments.
            var args = event.args;
            // row's bound index.
            var rowBoundIndex = args.rowindex;
            // row's data. The row's data object or null(when all rows are being selected or unselected with a single action). If you have a datafield called "firstName", to access the row's firstName, use var firstName = rowData.firstName;
            var rowData = args.row;

            $("#"+menucod+"addrid").val(rowData.addrid);
            //alert(rowData.idno);
            $("#"+menucod+"addrid").jqxComboBox({selectedIndex: rowData.idno });
            $("#"+menucod+"addrno").val(rowData.addrno);
            $("#"+menucod+"addrnm").val(rowData.addrnm);
            $("#"+menucod+"villageno").val(rowData.villageno);
            $("#"+menucod+"lane").val(rowData.lane);
            $("#"+menucod+"road").val(rowData.road);
            $("#"+menucod+"sub_district01").val(rowData.sub_district);
            tumbdesc();
            $("#"+menucod+"district01").val(rowData.district);
            aumpdesc();
            $("#"+menucod+"provcode0").val(rowData.provcode);
            provdesc();
            $("#"+menucod+"zip").val(rowData.zip);
            $("#"+menucod+"telp").val(rowData.telp);

            //check radio type addr_contact
            if (rowData.addr_contact === "1") {
                $("#"+menucod+"addr_contact1").jqxRadioButton({ checked: true });
            }else{
                $("#"+menucod+"addr_contact2").jqxRadioButton({ checked: true });
            }
            //$("#"+menucod+"addr_contact").val(rowData.addr_contact);

            //check radio type addr_senddoc
            if (rowData.addr_contact === "1") {
                $("#"+menucod+"addr_senddoc1").jqxRadioButton({ checked: true });
            }else{
                $("#"+menucod+"addr_senddoc2").jqxRadioButton({ checked: true });
            }
            //$("#"+menucod+"addr_senddoc").val(rowData.addr_senddoc);
            $("#"+menucod+"memo1").val(rowData.memo1);
        });

        //Popup Edit & Button
        // Create a jqxComboBox
        var source = [
                { text: "1 : ที่อยู่ปัจจุบัน", value: 0 },
                { text: "2 : ที่อยู่ตามทะเบียนบ้าน", value: 1 },
                { text: "3 : ที่ทำงาน", value: 2},
                { text: "4 : อื่นๆ", value: 3 }
		    ];
        //$("#"+menucod+"addrid").jqxInput({ width: 350, height: 23, theme: theme });
        $("#"+menucod+"addrid").jqxComboBox({ source: source, theme: theme, width: '250', height: '25', displayMember: 'text', valueMember: 'value', dropDownHeight:100, selectedIndex: 0});

        $("#"+menucod+"addrno").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"addrnm").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"villageno").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"lane").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"road").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"sub_district0").jqxInput({ width: 129, height: 23, theme: theme });
        $("#"+menucod+"district0").jqxInput({ width: 129, height: 23, theme: theme });
        $("#"+menucod+"provcode0").jqxInput({ width: 129, height: 23, theme: theme });
        $("#"+menucod+"zip").jqxInput({ width: 250, height: 23, theme: theme });
        $("#"+menucod+"telp").jqxInput({ width: 250, height: 23, theme: theme });

        //create radio box
        $("#"+menucod+"addr_contact1").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'addr_contact0' });
        $("#"+menucod+"addr_contact2").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'addr_contact0',checked: true });

        $("#"+menucod+"addr_senddoc1").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'addr_senddoc0' });
        $("#"+menucod+"addr_senddoc2").jqxRadioButton({ height: 23, width: 80, theme: theme, groupName: 'addr_senddoc0',checked: true });

        $("#"+menucod+"memo1").jqxInput({ width: 250, height: 55, theme: theme });

        //$("#"+menucod+"Cancel0").jqxButton({ theme: theme });
        //$("#"+menucod+"Save0").jqxButton({ theme: theme });

        //button create rows
        // $("#"+menucod+"Save0").off().on('click', function() {
        //     //alert("55");
        //     table1_addrow();
        // });

        //create row address
        var table1_addrow = function() {
            if ($("#"+menucod+"addr_contact1").val() == true) {
                addr_contact0 = '1';
            } else if ($("#"+menucod+"addr_contact2").val() == true) {
                addr_contact0 = '2';
            }
            if ($("#"+menucod+"addr_senddoc1").val() == true) {
                addr_senddoc0 = '1';
            } else if ($("#"+menucod+"addr_senddoc2").val() == true) {
                addr_senddoc0 = '2';
            }
            var addrid_tx = $("#"+menucod+"addrid").jqxComboBox('getSelectedItem');

            var datarow = { idno: $("#"+menucod+"addrid").val(),addrid: addrid_tx.label, addrno: $("#"+menucod+"addrno").val(), addrnm: $("#"+menucod+"addrnm").val(), villageno: $("#"+menucod+"villageno").val(), lane: $("#"+menucod+"lane").val(), road: $("#"+menucod+"road").val(), sub_district: $("#"+menucod+"sub_district0").val(), district: $("#"+menucod+"district0").val(), provcode: $("#"+menucod+"provcode0").val(), zip: $("#"+menucod+"zip").val(), telp: $("#"+menucod+"telp").val(), addr_contact: addr_contact0, addr_senddoc: addr_senddoc0, memo1: $("#"+menucod+"memo1").val()};
            var commit = $("#custaddr").jqxGrid('addrow', null, datarow);
            if (commit) {
                var rows = $('#custaddr').jqxGrid('getrows');
                $("#custaddr").jqxGrid('selectrow',rows.length-1);
                $("#custaddr").jqxGrid('ensurerowvisible',rows.length-1);
            };
        };

        //delete rows
        var table1_deleterow = function() {
            var selectedrowindex = $("#custaddr").jqxGrid('getselectedrowindex');
            var rowscount = $("#custaddr").jqxGrid('getdatainformation').rowscount;
            if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                var id = $("#custaddr").jqxGrid('getrowid', selectedrowindex);
                var commit = $("#custaddr").jqxGrid('deleterow', id);
            }
        };

        //update row
        var table1_updaterow = function(){
            if ($("#"+menucod+"addr_contact1").val() == true) {
                addr_contact0 = '1';
            } else if ($("#"+menucod+"addr_contact2").val() == true) {
                addr_contact0 = '2';
            }
            if ($("#"+menucod+"addr_senddoc1").val() == true) {
                addr_senddoc0 = '1';
            } else if ($("#"+menucod+"addr_senddoc2").val() == true) {
                addr_senddoc0 = '2';
            }
            var addrid_tx = $("#"+menucod+"addrid").jqxComboBox('getSelectedItem');

            var datarow = { idno: $("#"+menucod+"addrid").val(),addrid: addrid_tx.label, addrno: $("#"+menucod+"addrno").val(), addrnm: $("#"+menucod+"addrnm").val(), villageno: $("#"+menucod+"villageno").val(), lane: $("#"+menucod+"lane").val(), road: $("#"+menucod+"road").val(), sub_district: $("#"+menucod+"sub_district0").val(), district: $("#"+menucod+"district0").val(), provcode: $("#"+menucod+"provcode0").val(), zip: $("#"+menucod+"zip").val(), telp: $("#"+menucod+"telp").val(), addr_contact: addr_contact0, addr_senddoc: addr_senddoc0, memo1: $("#"+menucod+"memo1").val()};

            var selectedrowindex = $("#custaddr").jqxGrid('getselectedrowindex');
            var rowscount = $("#custaddr").jqxGrid('getdatainformation').rowscount;
            if (selectedrowindex >= 0 && selectedrowindex < rowscount) {
                var id = $("#custaddr").jqxGrid('getrowid', selectedrowindex);
                var commit = $("#custaddr").jqxGrid('updaterow', id, datarow);
                $("#custaddr").jqxGrid('ensurerowvisible', selectedrowindex);
            }
        }

        //Popup Window
        $("#"+menucod+"window7").jqxWindow({
            theme: theme,
            width: 500,
            height: 300,
            resizable: false,
            isModal: true,
            autoOpen: false,
            cancelButton: $("#"+menucod+"Cancel0"),
            modalOpacity: 0.01
        });

        //ประเภทลูกหนี้
        $("#"+menucod+"custtype").change(function (event) {
            var args = event.args;
            if (args) {
                var item = args.item;
                var value = item.value;
                //document.getElementById("fminvtran").reset();
                if (value == 1) {
                    //เปลี่ยนประเภท บุคคล
                    $("#box1_head").text('ข้อมูลส่วนตัว');
                    $("#box1_custcode").text("รหัสลูกค้า : ");
                    $("#box1_sname").text("คำนำหน้า : ");

                    $("#"+menucod+"sname").jqxComboBox('updateAt',"นาย",0);
                    $("#"+menucod+"sname").jqxComboBox('updateAt',"นางสาว",1);
                    $("#"+menucod+"sname").jqxComboBox('updateAt',"นาง",2);
                    $("#"+menucod+"sname").jqxComboBox('removeItem', "บริษัท" );

                    $("#box1_lname").text("นามสกุล : ");

                    $('#box1_nicknm').toggle('show');

                    $("#box1_birthdt").text("วันเกิด : ");
                    $("#box1_age").text("อายุ : ");
                    $("#box1_sex").toggle('show');
                    $("#box1_cardtype").toggle('show');
                    $("#box1_issueby").toggle('show');
                    $("#box1_issuedt").toggle('show');
                    $("#box1_expdt").toggle('show');
                    $("#box1_nation").toggle('show');
                    $("#box1_religion").toggle('show');
                    $("#box1_degree").toggle('show');

                    //$('#box1').jqxPanel({autoUpdate:true});
                    $("#"+menucod+"window0").jqxWindow({height:"1000"});
                    //$("#"+menucod+"window0").jqxDocking({width:"400px" , height:"1000px"});
                    //$("#"+menucod+"window0").jqxDocking('setWindowProperty', 'contactWindow', 'height', 1000);

                }else if(value==2){
                    //เปลี่ยนประเภท นิติบุคคล
                    $("#box1_head").text("ข้อมูลนิติบุคคล");
                    $("#box1_custcode").text("เลขที่ทะเบียนพาณิชย์ : ");
                    $("#box1_sname").text("ประเภท : ");

                    $("#"+menucod+"sname").jqxComboBox('updateAt',"บจก.",0);
                    $("#"+menucod+"sname").jqxComboBox('updateAt',"หจก.",1);
                    $("#"+menucod+"sname").jqxComboBox('updateAt',"ห้างร้าน",2);
                    $("#"+menucod+"sname").jqxComboBox('addItem', 'บริษัท',3 );

                    $("#box1_lname").text("ชื่อผู้ติดต่อ : ");

                    $('#box1_nicknm').toggle('hide');

                    $("#box1_birthdt").text("วันเดือนปี ที่ก่อตั้ง : ");
                    $("#box1_age").text("อายุบริษัท : ");

                    //$("#"+menucod+"issueby").jqxInput({disabled: true });
                    $("#box1_sex").toggle('hide');
                    $("#box1_cardtype").toggle('hide');
                    $("#box1_issueby").toggle('hide');
                    $("#box1_issuedt").toggle('hide');
                    $("#box1_expdt").toggle('hide');
                    $("#box1_nation").toggle('hide');
                    $("#box1_religion").toggle('hide');
                    $("#box1_degree").toggle('hide');

                    //$('#box1').jqxPanel({autoUpdate:true});
                    $("#"+menucod+"window0").jqxWindow({height:"350"});
                    //$("#"+menucod+"window0").jqxDocking({height:"350px"});
                    //$("docking").jqxDocking(height:"350px", "<?php //echo $menucod ?>window0");
                }
            }
        });


        //create toolbar
        $("#custmastTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button | button | button | button | button',
            initTools: function (type, index, tool, menuToolIninitialization) {
                var icon = $("<div class='buttonIcon'></div>");
                switch (index) {
                    case 0:
                        icon.addClass("fa fa-search fa-lg");
                        icon.attr("title", "ค้นหาประวัติ");
                        icon.attr("id", menucod+"btnInsert");
                        icon.html("<p>ค้นหาประวัติ</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_insert();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-save fa-lg");
                        icon.attr("title", "บันทึกข้อมูล");
                        icon.attr("id", menucod+"btnView");
                        icon.html("<p>บันทึกข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_view();
                        });
                        break;
                    case 2:
                        icon.addClass("fa fa-pencil-square-o fa-lg");
                        icon.attr("title", "แก้ไขข้อมูล");
                        icon.attr("id", menucod+"btnEdit");
                        icon.html("<p>แก้ไขข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_edit();
                        });
                        break;
                    case 3:
                        icon.addClass("fa fa-times fa-lg");
                        icon.attr("title", "ลบข้อมูล");
                        icon.attr("id", menucod+"btnDelete");
                        icon.html("<p>ลบข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_delete();
                        });
                        break;
                    case 4:
                        icon.addClass("fa fa-print fa-lg");
                        icon.attr("title", "พิมพ์รายงาน");
                        icon.attr("id", menucod+"btnPrint");
                        icon.html("<p>พิมพ์รายงาน</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_print();
                        });
                        break;
                    case 5:
                        icon.addClass("fa fa-power-off fa-lg");
                        icon.attr("title", "ปิดระบบ");
                        icon.attr("id", menucod+"btnClose");
                        icon.html("<p>ปิดระบบ</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_close();
                        });
                        break;
                }
            }
        });
        $("#custmastTool").jqxToolBar("disableTool", 1);
        $("#custmastTool").jqxToolBar("disableTool", 2);
        $('#tbcustmast').on('rowclick', function (event) {
            var args = event.args;
            var rowindex = args.rowindex;
            var data = $('#tbcustmast').jqxGrid('getrowdata', rowindex);
            $("#viewcustmast").val(data.custcode);
        });
        var custmast_insert = function() {
            $.get('custmast/create', {menucod: menucod}, function(data) {
                $("#"+menucod).html(data);
            });
            // $.ajax({
            //     url: "custmast/create",
            //     cache: false,
            //     data: {menucod: menucod},
            //     success: function(data) {
            //         $("#"+menucod).html(data);
            //     }
            // });
        };
        var custmast_view = function() {
            if ($("#viewcustmast").val() !== '') {
                $.get('custmast/view', {custcode: $("#viewcustmast").val(),menucod: menucod}, function(data, textStatus, xhr) {
                    $("#"+menucod).html(data);
                });
            }
        };
        $('#tbcustmast').on('rowdoubleclick', function (event) {
			$.get('custmast/view', {custcode: $("#viewcustmast").val(), menucod: menucod}, function(data, textStatus, xhr) {
                $("#"+menucod).html(data);
            });
		});
		var custmast_edit = function() {
            if ($("#viewcustmast").val() !== '') {
                $.ajax({
                    url: "custmast/update",
                    type: "GET",
                    cache: false,
                    data: { custcode: $("#viewcustmast").val(), menucod: menucod}
                })
                .done(function(data) {
                    //console.log("success");
                    $("#"+menucod).html(data);
                })
                .fail(function(data) {
                    //console.log("error");
                })
                .always(function(data) {
                    //console.log("complete");
                });

            }
        };
		var custmast_delete = function() {
            if ($("#viewcustmast").val() !== "") {
				//if (confirm('คุณต้องการที่จะลบข้อมูล สาขา : '+$("#viewcustmast").val()+' ?')) {
                $.when($.confirmdlg('ต้องการลบข้อมูล สาขา?', 'warning')).then(function() {
                    $('#ok').click(function(event) {
    					$.post('custmast/delete', { custcode: $("#viewcustmast").val(), menucod: menucod }, function(data) {
    						//alert('ลบข้อมูล สาขา : '+$("#viewcustmast").val()+' เรียบร้อย');
    						//$("#"+menucod).html(data);
                            $('#tbcustmast').jqxGrid('updatebounddata','sort');
    					});
                    });//end if ok
				});//end if warning
            }
        };
        var custmast_close = function() {
            var selectedItem = $('#jqxTabs').jqxTabs('selectedItem');
            var disabledItems = $('#jqxTabs').jqxTabs('getDisabledTabsCount');
            var items = $('#jqxTabs').jqxTabs('length');
            if (items > disabledItems + 1) {
                $('#jqxTabs').jqxTabs('removeAt', selectedItem);
            }
        };

        //validation fmcustmast
        $('#fmcustmast').jqxValidator({
            hintType: 'label',
            closeOnClick: false,
            focus: false,
            animationDuration: 0,
            rules:  [
                        { input: '#'+menucod+'argroupcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                                var argroupcode = $("#"+menucod+"argroupcode").val();
                                if (argroupcode !== '') {
                                    $.ajax({
                                        url: "validate/findexit",
                                        type: 'get',
                                        data: { table: 'argroup', field: 'argroupcode', code: argroupcode },
                                        success: function(data) {
                                            if (data == "true") {
                                                 commit(true);
                                            }
                                            else commit(false);
                                        },
                                        error: function() {
                                            commit(false);
                                        }
                                    });
                                }else{
                                    commit(true);
                                }
                            }
                        },
                        { input: '#'+menucod+'grdcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                                var grdcode = $("#"+menucod+"grdcode").val();
                                if (grdcode !== '') {
                                    $.ajax({
                                        url: "validate/findexit",
                                        type: 'get',
                                        data: { table: 'setgrade', field: 'grdcode', code: grdcode },
                                        success: function(data) {
                                            if (data == "true") {
                                                 commit(true);
                                            }
                                            else commit(false);
                                        },
                                        error: function() {
                                            commit(false);
                                        }
                                    });
                                }else{
                                    commit(true);
                                }
                            }
                        },
                        { input: '#'+menucod+'career', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                                var career = $("#"+menucod+"career").val();
                                if (career !== '') {
                                    $.ajax({
                                        url: "validate/findexit",
                                        type: 'get',
                                        data: { table: 'setoccup', field: 'occupcode', code: career },
                                        success: function(data) {
                                            if (data == "true") {
                                                 commit(true);
                                            }
                                            else commit(false);
                                        },
                                        error: function() {
                                            commit(false);
                                        }
                                    });
                                }else{
                                    commit(true);
                                }
                            }
                        }
                    ]
        });

        //ค้นหา กลุ่มลูกหนี้
        $('#'+menucod+'argroupcode1').off().on('blur', function () {
            argroupdesc();
        });

        //ค้นหา กลุ่มลูกหนี้
        $('#'+menucod+'grdcode1').off().on('blur', function () {
            grddesc();
        });

        //ค้นหา อาชีพ
        $('#'+menucod+'career1').off().on('blur', function () {
            occupdesc();
        });

        //ค้นหา ตำบล
        $('#'+menucod+'sub_district01').off().on('blur', function () {
            $.when(aumpcode()).then(function(){
                 tumbdesc();
            });
        });

        //ค้นหา อำเภอ
        $('#'+menucod+'district01').off().on('blur', function () {
            $.when(provcode()).then(function(){
                aumpdesc();
            });
            //aumpdesc();
        });

        //ค้นหา จังหวัด
        $('#'+menucod+'provcode01').off().on('blur', function () {
            provdesc();
        });

        //validate
        var Valid_inputgroup = function (type){
            $('#fmcustmast').jqxValidator('validateInput', '#'+menucod+type);
        }

        //ค้นหา กลุ่มลูกหนี้
        $("#"+menucod+"searchArgroup").off().on('click', function() {
            $('#result').load('search/index', {show: "argroup", returnid: menucod+"argroupcode"});
            $('#search').jqxWindow('open');
        });

        var argroupdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'argroup', field: 'argroupcode', code: $('#'+menucod+'argroupcode').val(), fieldv: 'argroupdesc' },
                success: function(data) {
                    $('#'+menucod+'argroupdesc').text(data);
                }
            });
        };

        //ค้นหาเกรด
        $("#"+menucod+"searchGrd").off().on('click', function() {
            $('#result').load('search/index', {show: "setgrade", returnid: menucod+"grdcode"});
            $('#search').jqxWindow('open');
        });
        var grddesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setgrade', field: 'grdcode', code: $('#'+menucod+'grdcode').val(), fieldv: 'grddesc' },
                success: function(data) {
                    $('#'+menucod+'grddesc').text(data);
                }
            });
        };

        //ค้นหาอาชีพ
        $("#"+menucod+"searchCareer").off().on('click', function() {
            $('#result').load('search/index', {show: "setoccup", returnid: menucod+"career"});
            $('#search').jqxWindow('open');
        });
        var occupdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setoccup', field: 'occupcode', code: $('#'+menucod+'career').val(), fieldv: 'occupdesc' },
                success: function(data) {
                    $('#'+menucod+'careerdesc').text(data);
                }
            });
        };

        //ค้นหาตำบล
        $("#"+menucod+"searchTumb").off().on('click', function() {
            $('#result').load('search/index', {show: "settumb", returnid: menucod+"sub_district0"});
            $('#search').jqxWindow('open');
        });
        var tumbdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'settumb', field: 'tumbcode', code: $('#'+menucod+'sub_district0').val(), fieldv: 'tumbdesc' },
                success: function(data) {
                    $('#'+menucod+'tumbdesc').text(data);
                    //aumpdesc();
                }
            });
        };
        //ค้นหาอำเภอ
        $("#"+menucod+"searchAmp").off().on('click', function() {
            $('#result').load('search/index', {show: "setaump", returnid: menucod+"district0"});
            $('#search').jqxWindow('open');
        });
        var aumpcode = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'settumb', field: 'tumbcode', code: $('#'+menucod+'sub_district0').val(), fieldv: 'aumpcode' },
                success: function(data) {
                    //alert(data);
                    $('#'+menucod+'district01').val(data);
                    aumpdesc();
                }
            });
        };
        var aumpdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setaump', field: 'aumpcode', code: $('#'+menucod+'district0').val(), fieldv: 'aumpdesc' },
                success: function(data) {
                    $('#'+menucod+'aumpdesc').text(data);
                    provcode();
                }
            });
        };
        //ค้นหาจังหวัด
        $("#"+menucod+"searchProv").off().on('click', function() {
            $('#result').load('search/index', {show: "setprov", returnid: menucod+"provcode0"});
            $('#search').jqxWindow('open');
        });
        var provcode = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setaump', field: 'aumpcode', code: $('#'+menucod+'district0').val(), fieldv: 'provcode' },
                success: function(data) {
                    $('#'+menucod+'provcode01').val(data);
                    postcode();
                    provdesc();
                }
            });
        };
        var provdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setprov', field: 'provcode', code: $('#'+menucod+'provcode0').val(), fieldv: 'provdesc' },
                success: function(data) {
                    $('#'+menucod+'provdesc').text(data);
                }
            });
        };

        //เลือก รหัสไปรษณีย์
        var postcode = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setaump', field: 'aumpcode', code: $('#'+menucod+'district0').val(), fieldv: 'postcode' },
                success: function(data) {
                    $('#'+menucod+'zip').val(data);
                }
            });
        };

        var custmast_print = function () {
            window.open('report/custmast', '', 'width='+width+', height='+height);
        };
    });
</script>
