<h2><i class="fa fa-car"></i> บันทึกรายละเอียดหลักทรัพย์</h2>
<div id="invtranTool"></div>
<input type="hidden" id="invtranid" value="<?php echo $menucod ?>">
<br />
<form id="fminvtran">
    <h4>ประเภทหลักทรัพย์</h4>
    <table class="invtran-table">
        <tr>
            <td class="sn-label">เลือกประเภท : </td>
            <td class="sn-data"><div id="<?php echo $menucod ?>assettype"></div></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="sn-label"><div id="lbstrno">เลขตัวถัง : </div></td>
            <td class="sn-data"><input type="text" id="<?php echo $menucod ?>strno"></td>
            <td class="sn-label">กลุ่มหลักทรัพย์ : </td>
            <td class="group-input sn-data">
                <div id="<?php echo $menucod ?>gcode" class="input-button">
                    <input type="text" id="<?php echo $menucod ?>v-gcode" />
                    <div id="<?php echo $menucod ?>searchSetgrp"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                </div>
                <div id="<?php echo $menucod ?>gdesc" class="input-desc"></div>
            </td>
        </tr>
        <tr>
            <td class="sn-label"><div id="lbengno">เลขเครื่อง : </div></td>
            <td class="sn-data"><input type="text" id="<?php echo $menucod ?>engno"></td>
            <td class="sn-label">ราคาประเมิณ : </td>
            <td class="sn-data"><div id="<?php echo $menucod ?>price"></div></td>
        </tr>
    </table>
    <div id="invtranDetail1">
        <hr>
        <h4>รายละเอียดหลักทรัพย์</h4>
        <table class="invtran-table">
            <tr>
                <td class="sn-label">ทะเบียน : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>regno"></td>
                <td class="sn-label">ทะเบียนจังหวัด : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>regprov" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-regprov" />
                        <div id="<?php echo $menucod ?>searchRegprv"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>regprvdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">วันที่จดทะเบียน : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>regdate"></div></td>
                <td class="sn-label">ทะเบียนหมดอายุ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>regexp"></div></td>
            </tr>
            <tr>
                <td class="sn-label">ยี่ห้อ : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>typedesc"></td>
                <td class="sn-label">รุ่น : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>modeldesc"></td>
            </tr>
            <tr>
                <td class="sn-label">สี : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>colordesc"></td>
                <td class="sn-label">ปีที่ผลิต : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>manuyr"></div></td>
            </tr>
            <tr>
                <td class="sn-label">เลขไมล์ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>milert"></div></td>
                <td class="sn-label"></td>
                <td class="sn-data"></td>
            </tr>
            <tr>
                <td class="sn-label">เลขที่ประกันภัย : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>insurecode"></td>
                <td class="sn-label">บริษัทประกันภัย : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>insurecomcode" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-insurecomcode" />
                        <div id="<?php echo $menucod ?>searchGarmst1"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>insurecomdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">วันที่เริ่มคุ้มครอง : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>insuredate"></div></td>
                <td class="sn-label">กรมธรรณ์หมดอายุ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>insureexp"></div></td>
            </tr>
            <tr>
                <td class="sn-label">เลขที่ พ.ร.บ. : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>prbcode"></td>
                <td class="sn-label">บริษัทประกันภัย : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>prbcomcode" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-prbcomcode" />
                        <div id="<?php echo $menucod ?>searchGarmst2"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>prbcomdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">วันที่เริ่มคุ้มครอง : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>prbdate"></div></td>
                <td class="sn-label">พ.ร.บ. หมดอายุ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>prbexp"></div></td>
            </tr>
        </table>
    </div>
    <div id="invtranDetail2">
        <hr>
        <h4>รายละเอียดหลักทรัพย์</h4>
        <table class="invtran-table">
            <tr>
                <td class="sn-label">หน้า : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>pageno"></td>
                <td class="sn-label">ระวาง : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>position"></td>
            </tr>
            <tr>
                <td class="sn-label">เลขที่ดิน : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>landno"></td>
                <td class="sn-label">หน้าที่สำรวจ : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>survey"></td>
            </tr>
            <tr>
                <td class="sn-label">วันที่ออกโฉนด : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>landdate"></div></td>
                <td class="sn-label">รหัสตำบล : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>tumbcode" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-tumbcode" />
                        <div id="<?php echo $menucod ?>searchTmb"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>tumbdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">เนื้อที่ ไร่ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>area1"></div></td>
                <td class="sn-label">รหัสอำเภอ : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>aumpcode" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-aumpcode" />
                        <div id="<?php echo $menucod ?>searchAmp"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>aumpdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">เนื้อที่ งาน : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>area2"></div></td>
                <td class="sn-label">รหัสจังหวัด : </td>
                <td class="group-input sn-data">
                    <div id="<?php echo $menucod ?>provcode" class="input-button">
                        <input type="text" id="<?php echo $menucod ?>v-provcode" />
                        <div id="<?php echo $menucod ?>searchPrv"><img alt="search" width="16" height="16" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/search_lg.png" /></div>
                    </div>
                    <div id="<?php echo $menucod ?>provdesc" class="input-desc"></div>
                </td>
            </tr>
            <tr>
                <td class="sn-label">เนื้อที่ ตารางวา : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>area3"></div></td>
                <td class="sn-label"></td>
                <td class="sn-data"></td>
            </tr>
        </table>
    </div>
    <div id="invtranDetail3">
        <hr>
        <h4>รายละเอียดหลักทรัพย์</h4>
        <table class="invtran-table">
            <tr>
                <td class="sn-label">บ้านเลขที่ : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>3-address"></td>
                <td class="sn-label">สถานที่ตั้ง : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>3-location"></td>
            </tr>
            <tr>
                <td class="sn-label">สถานที่ใกล้เคียง : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>3-nearby"></td>
                <td class="sn-label">ประเภทบ้าน : </td>
                <td class="sn-data"><input type="text" id="<?php echo $menucod ?>3-typehome"></td>
            </tr>
            <tr>
                <td class="sn-label">เนื้อที่ ไร่ : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>3-area1"></div></td>
                <td class="sn-label">เนื้อที่ งาน : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>3-area2"></div></td>
            </tr>
            <tr>
                <td class="sn-label">เนื้อที่ ตารางวา : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>3-area3"></div></td>
                <td class="sn-label">เนื้อที่ใช้สอย ตร.ม. : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>3-area4"></div></td>
            </tr>
            <tr>
                <td class="sn-label">อายุบ้าน : </td>
                <td class="sn-data"><div id="<?php echo $menucod ?>3-homeage"></div></td>
                <td class="sn-label"></td>
                <td class="sn-data"></td>
            </tr>
        </table>
    </div>
    <table class="invtran-table">
        <tr>
            <td class="sn-label" style="vertical-align: top; padding-top: 5px;">หมายเหตุ : </td>
            <td class="sn-data"><textarea id="<?php echo $menucod ?>memo1"></textarea></td>
            <td class="sn-label"></td>
            <td class="sn-data"></td>
        </tr>
    </table>
    <hr>
    <h4>อัพโหลดรูป</h4>
    <div id="jqxFileUpload"></div>
</form>
<br />
<?php echo $this->renderPartial('//layouts/search');  ?>
<br />

<script type="text/javascript">
    $(document).ready(function () {
        var menucod = $("#invtranid").val();
        //เช็คสิทธิ
        var chkright = [];
        $.post('validate/checkright', { menucode: 'SALE02', userid: '<?php echo Yii::app()->user->name ?>' }, function(data) {
            chkright = jQuery.parseJSON(data);
            $("#invtranTool").jqxToolBar("refresh");
        });
        var source = [
            { text: "รถ / เล่มทะเบียน", value: 1 },
            { text: "ที่ดิน / น.ส.3", value: 2 },
            { text: "บ้านพักอาศัย", value: 3 },
            { text: "อื่นๆ", value: 4 }
        ];
        $("#"+menucod+"assettype").jqxDropDownList({ height: 23, width: 200, source: source, displayMember: 'text', valueMember: 'value', theme: theme, dropDownHeight:100, selectedIndex: 0 });
        $("#"+menucod+"strno").jqxInput({ height: 23, width: 200, theme: theme, minLength: 1, maxLength: 30 });
        $("#"+menucod+"engno").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"gcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"price").jqxNumberInput({ spinMode: 'simple', height: 23, width: 200, min: 0, spinButtons: true, theme: theme });
        //detail1
        $("#"+menucod+"regno").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"regprov").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"regdate").jqxDateTimeInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"regexp").jqxDateTimeInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"typedesc").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"modeldesc").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"colordesc").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"manuyr").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 9999, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });
        $("#"+menucod+"milert").jqxNumberInput({ spinMode: 'simple', height: 23, width: 200, min: 0, spinButtons: true, theme: theme, decimalDigits: 0 });
        $("#"+menucod+"insurecode").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"insurecomcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"insuredate").jqxDateTimeInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"insureexp").jqxDateTimeInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"prbcode").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"prbcomcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"prbdate").jqxDateTimeInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"prbexp").jqxDateTimeInput({ height: 23, width: 200, theme: theme });

        //detail2
        $("#"+menucod+"pageno").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"position").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"landno").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"survey").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"tumbcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"aumpcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"provcode").jqxInput({ height: 23, width: 100, theme: theme });
        $("#"+menucod+"area1").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 99, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });
        $("#"+menucod+"area2").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 99, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });
        $("#"+menucod+"area3").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, spinButtons: true, theme: theme, groupSeparator: '' });
        $("#"+menucod+"landdate").jqxDateTimeInput({ height: 23, width: 200, theme: theme });

        //detail3
        $("#"+menucod+"3-address").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"3-location").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"3-typehome").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"3-nearby").jqxInput({ height: 23, width: 200, theme: theme });
        $("#"+menucod+"3-area1").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 99, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });
        $("#"+menucod+"3-area2").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 99, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });
        $("#"+menucod+"3-area3").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, spinButtons: true, theme: theme, groupSeparator: '' });
        $("#"+menucod+"3-area4").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, spinButtons: true, theme: theme, groupSeparator: '' });
        $("#"+menucod+"3-homeage").jqxNumberInput({ spinMode: 'simple', inputMode: 'simple', height: 23, width: 200, min: 0, max: 99, spinButtons: true, theme: theme, decimalDigits: 0, groupSeparator: '' });

        //หมายเหตุ
        $("#"+menucod+"memo1").jqxInput({ height: 100, width: 505, theme: theme });

        //upload
        $('#jqxFileUpload').jqxFileUpload({
            theme: theme,
            width: 300,
            //uploadUrl: 'upload.php',
            fileInputName: 'fileInput',
            accept: 'image/*'
        });

        //แสดง Field ตามประเภทหลักทรัพย์
        $("#invtranDetail1").show();
        $("#invtranDetail2").hide();
        $("#invtranDetail3").hide();
        //Tools
        $("#invtranTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button | button | button | button',
            initTools: function (type, index, tool, menuToolIninitialization) {
                var icon = $("<div class='buttonIcon'></div>");
                switch (index) {
                    case 0:
                        icon.addClass("fa fa-refresh fa-lg");
                        icon.attr("title", "เริ่มใหม่");
                        icon.attr("id", menucod+"btnNew");
                        icon.html("<p style='margin-top:3px;'>เริ่มใหม่</p>");
                        tool.append(icon);
                        tool.click(function() {
                            invtran_new();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-search fa-lg");
                        icon.attr("title", "ค้นหาข้อมูล");
                        icon.attr("id", menucod+"btnBack");
                        icon.html("<p style='margin-top:3px;'>ค้นหาข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            invtran_search();
                        });
                        break;
                    case 2:
                        icon.addClass("fa fa-floppy-o fa-lg");
                        icon.attr("title", "บันทึกข้อมูล");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>บันทึกข้อมูล</p>");
                        tool.append(icon);
                        tool.jqxButton({ disabled: chkright.m_insert });
                        tool.click(function() {
                            invtran_save();
                        });
                        break;
                    case 3:
                        icon.addClass("fa fa-times fa-lg");
                        icon.attr("title", "ลบข้อมูล");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>ลบข้อมูล</p>");
                        tool.append(icon);
                        tool.jqxButton({ disabled: chkright.m_delete });
                        tool.click(function() {
                            invlocat_save();
                        });
                        break;
                    case 4:
                        icon.addClass("fa fa-power-off fa-lg");
                        icon.attr("title", "ปิดระบบ");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>ปิดระบบ</p>");
                        tool.append(icon);
                        tool.click(function() {
                            invtran_close();
                        });
                        break;
                }
            }
        });
        $("#"+menucod+"assettype").on('select', function (event) {
            document.getElementById("fminvtran").reset();
        });

        $("#"+menucod+"assettype").on('change', function (event) {
            var args = event.args;
            if (args) {
                var item = args.item;
                var value = item.value;
                if (value == 1) {
                    $("#invtranDetail1").show();
                    $("#invtranDetail2").hide();
                    $("#invtranDetail3").hide();
                    $("#lbstrno").text('เลขตัวถัง : ');
                    $("#lbengno").text('เลขเครื่อง : ');
                } else if (value == 2) {
                    $("#invtranDetail1").hide();
                    $("#invtranDetail2").show();
                    $("#invtranDetail3").hide();
                    $("#lbstrno").text('เลขที่โฉนด : ');
                    $("#lbengno").text('เล่มที่ : ');
                } else if (value == 3) {
                    $("#invtranDetail1").hide();
                    $("#invtranDetail2").hide();
                    $("#invtranDetail3").show();
                    $("#lbstrno").text('เลขที่โฉนด : ');
                    $("#lbengno").text('เล่มที่ : ');
                } else {
                    $("#invtranDetail1").hide();
                    $("#invtranDetail2").hide();
                    $("#invtranDetail3").hide();
                    $("#lbstrno").text('รหัสหลักทรัพย์ : ');
                    $("#lbengno").text('รายละเอียด : ');
                };
            }
        });
        var rules = [
                { input: '#'+menucod+'strno', message: 'กรุณาระบุรหัสหลักทรัพย์ !', action: 'keyup, blur', rule: 'required' },
                { input: '#'+menucod+'strno', message: 'ระบุรหัสหลักทรัพย์ซ้ำ !', action: 'keyup, blur', rule: function (input, commit) {
                    var strno = $("#"+menucod+"strno").val();
                    if (strno !== '') {
                        $.ajax({
                            url: "invtran/validate",
                            type: 'get',
                            data: { strno: strno },
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
                    }
                }
                },
                { input: '#'+menucod+'gcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var gcode = $("#"+menucod+"gcode").val();
                    var assettype = $("#"+menucod+"assettype").val();
                    if (gcode !== '') {
                        $.ajax({
                            url: "validate/findexit2",
                            type: 'get',
                            data: { table: 'setgroup', field1: 'gcode', field2: 'assettype', code1: gcode, code2: assettype },
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
                { input: '#'+menucod+'regprov', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var regprov = $("#"+menucod+"regprov").val();
                    if (regprov !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'setprov', field: 'provcode', code: regprov },
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
                { input: '#'+menucod+'tumbcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var tumbcode = $("#"+menucod+"tumbcode").val();
                    if (tumbcode !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'settumb', field: 'tumbcode', code: tumbcode },
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
                { input: '#'+menucod+'aumpcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var aumpcode = $("#"+menucod+"aumpcode").val();
                    if (aumpcode !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'setaump', field: 'aumpcode', code: aumpcode },
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
                { input: '#'+menucod+'provcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var provcode = $("#"+menucod+"provcode").val();
                    if (provcode !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'setprov', field: 'provcode', code: provcode },
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
                { input: '#'+menucod+'insurecomcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var insurecomcode = $("#"+menucod+"insurecomcode").val();
                    if (insurecomcode !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'garmast', field: 'garcode', code: insurecomcode },
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
                { input: '#'+menucod+'prbcomcode', message: 'ไม่พบรหัสนี้!', action: 'keyup, blur', rule: function (input, commit) {
                    var prbcomcode = $("#"+menucod+"prbcomcode").val();
                    if (prbcomcode !== '') {
                        $.ajax({
                            url: "validate/findexit",
                            type: 'get',
                            data: { table: 'garmast', field: 'garcode', code: prbcomcode },
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
            ];
        $('#fminvtran').jqxValidator({
            hintType: 'label',
            closeOnClick: false,
            focus: false,
            animationDuration: 0,
            rules: rules
        });

        //ค้นหากลุ่มสินค้า
        $("#"+menucod+"searchSetgrp").off().on('click', function() {
            $('#result').load('search/index', {show: "setgroup", returnid: menucod+"gcode", param1: $("#"+menucod+"assettype").val()});
            $('#search').jqxWindow('open');
        });
        //ค้นหาทะเบียนจังหวัด
        $("#"+menucod+"searchRegprv").off().on('click', function() {
            $('#result').load('search/index', {show: "setprov", returnid: menucod+"regprov"});
            $('#search').jqxWindow('open');
        });
        //ค้นหาตำบล
        $("#"+menucod+"searchTmb").off().on('click', function() {
            $('#result').load('search/index', {show: "settumb", returnid: menucod+"tumbcode"});
            $('#search').jqxWindow('open');
        });
        //ค้นหาอำเภอ
        $("#"+menucod+"searchAmp").off().on('click', function() {
            $('#result').load('search/index', {show: "setaump", returnid: menucod+"aumpcode"});
            $('#search').jqxWindow('open');
        });
        //ค้นหาจังหวัด
        $("#"+menucod+"searchPrv").off().on('click', function() {
            $('#result').load('search/index', {show: "setprov", returnid: menucod+"provcode"});
            $('#search').jqxWindow('open');
        });
        //ค้นหาบริษัทประกัน
        $("#"+menucod+"searchGarmst1").off().on('click', function() {
            $('#result').load('search/index', {show: "garmast", returnid: menucod+"insurecomcode"});
            $('#search').jqxWindow('open');
        });
        //ค้นหาบริษัทประกัน พ.ร.บ.
        $("#"+menucod+"searchGarmst2").off().on('click', function() {
            $('#result').load('search/index', {show: "garmast", returnid: menucod+"prbcomcode"});
            $('#search').jqxWindow('open');
        });


        //แสดงคำอธิบาย
        $('#'+menucod+'v-gcode').off().on('blur', function () {
            gdesc();
        });
        $('#'+menucod+'v-regprov').off().on('blur', function () {
            regprvdesc();
        });
        $('#'+menucod+'v-tumbcode').off().on('blur', function () {
            $.when(aumpcode()).then(function(){
                tumbdesc();
            });
        });
        $('#'+menucod+'v-aumpcode').off().on('blur', function () {
            $.when(provcode()).then(function(){
                aumpdesc();
            });
        });
        $('#'+menucod+'v-provcode').off().on('blur', function () {
            provdesc();
        });
        $('#'+menucod+'v-insurecomcode').off().on('blur', function () {
            insurecomdesc();
        })
        $('#'+menucod+'v-prbcomcode').off().on('blur', function () {
            prbcomdesc();
        })

        var aumpcode = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'settumb', field: 'tumbcode', code: $('#'+menucod+'tumbcode').val(), fieldv: 'aumpcode' },
                success: function(data) {
                    $('#'+menucod+'aumpcode').val(data);
                    provcode();
                    aumpdesc();
                }
            });
        };
        var provcode = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setaump', field: 'aumpcode', code: $('#'+menucod+'aumpcode').val(), fieldv: 'provcode' },
                success: function(data) {
                    $('#'+menucod+'provcode').val(data);
                    provdesc();
                }
            });
        };

        var gdesc = function() {
            $.ajax({
                url: "validate/findvalue2",
                type: 'get',
                data: { table: 'setgroup', field1: 'gcode', field2: 'assettype', code1: $('#'+menucod+'gcode').val(), code2: $('#'+menucod+'assettype').val(), fieldv: 'gdesc' },
                success: function(data) {
                    $('#'+menucod+'gdesc').text(data);
                }
            });
        };

        var tumbdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'settumb', field: 'tumbcode', code: $('#'+menucod+'tumbcode').val(), fieldv: 'tumbdesc' },
                success: function(data) {
                    $('#'+menucod+'tumbdesc').text(data);
                }
            });
        };

        var aumpdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setaump', field: 'aumpcode', code: $('#'+menucod+'aumpcode').val(), fieldv: 'aumpdesc' },
                success: function(data) {
                    $('#'+menucod+'aumpdesc').text(data);
                }
            });
        };

        var provdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setprov', field: 'provcode', code: $('#'+menucod+'provcode').val(), fieldv: 'provdesc' },
                success: function(data) {
                    $('#'+menucod+'provdesc').text(data);
                }
            });
        };

        var regprvdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'setprov', field: 'provcode', code: $('#'+menucod+'regprov').val(), fieldv: 'provdesc' },
                success: function(data) {
                    $('#'+menucod+'regprvdesc').text(data);
                }
            });
        };

        var insurecomdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'garmast', field: 'garcode', code: $('#'+menucod+'insurecomcode').val(), fieldv: 'garname' },
                success: function(data) {
                    $('#'+menucod+'insurecomdesc').text(data);
                }
            });
        };
        var prbcomdesc = function() {
            $.ajax({
                url: "validate/findvalue",
                type: 'get',
                data: { table: 'garmast', field: 'garcode', code: $('#'+menucod+'prbcomcode').val(), fieldv: 'garname' },
                success: function(data) {
                    $('#'+menucod+'prbcomdesc').text(data);
                }
            });
        };
        //ปุ่มเริ่มใหม่
        var invtran_new = function() {
            $.ajax({
                url: "invtran/index",
                data: { menucod: menucod },
                type: 'get',
                success: function(data) {
                    $("#"+menucod).html(data);
                }
            });
        };
        //ปุ่มค้นหาข้อมูล
        var invtran_search = function() {
            var rules2 = rules.slice();
            $('#result').load('search/index', { show: "invtran", returnid: menucod+"strno", menucod: menucod });
            $('#search').jqxWindow('open');
            $('#okButton').off().on('click', function() {
                $('#fminvtran').jqxValidator('hide'); 
                rules2.splice(1, 1)
                $('#fminvtran').jqxValidator('rules', rules2);
                $("#"+menucod+"assettype").jqxDropDownList({ disabled: true });
                $("#"+menucod+"strno").jqxInput({ disabled: true });
                $.ajax({
                    url: "invtran/view",
                    type: 'get',
                    data: { strno: $("#returnvalue").val() },
                    success: function(data) {
                        //console.log(data);
                        var obj = jQuery.parseJSON(data);
                        $("#"+menucod+"assettype").val(obj.assettype);
                        $("#"+menucod+"strno").val(obj.strno);
                        $("#"+menucod+"gcode").val(obj.gcode);
                        $("#"+menucod+"price").val(obj.price);
                        if (obj.assettype == 1) {
                            $("#"+menucod+"engno").val(obj.engno);
                            $("#"+menucod+"regno").val(obj.regno);
                            $("#"+menucod+"regprov").val(obj.regprov);
                            $("#"+menucod+"regdate").val(obj.regdate);
                            $("#"+menucod+"regexp").val(obj.regexp);
                            $("#"+menucod+"typedesc").val(obj.typedesc);
                            $("#"+menucod+"modeldesc").val(obj.modeldesc);
                            $("#"+menucod+"colordesc").val(obj.colordesc);
                            $("#"+menucod+"manuyr").val(obj.manuyr);
                            $("#"+menucod+"milert").val(obj.milert);
                            $("#"+menucod+"insurecode").val(obj.insurecode);
                            $("#"+menucod+"insurecomcode").val(obj.insurecomcode);
                            $("#"+menucod+"insuredate").val(obj.insuredate);
                            $("#"+menucod+"insureexp").val(obj.insureexp);
                            $("#"+menucod+"prbcode").val(obj.prbcode);
                            $("#"+menucod+"prbcomcode").val(obj.prbcomcode);
                            $("#"+menucod+"prbdate").val(obj.prbdate);
                            $("#"+menucod+"prbexp").val(obj.prbexp);
                            //$('.input-desc').text('');
                            gdesc();
                            regprvdesc();
                            insurecomdesc();
                            prbcomdesc();
                        } else if (obj.assettype == 2) {
                            $("#"+menucod+"engno").val(obj.engno);
                            $("#"+menucod+"pageno").val(obj.regno);
                            $("#"+menucod+"position").val(obj.regprov);
                            $("#"+menucod+"landno").val(obj.typedesc);
                            $("#"+menucod+"survey").val(obj.modeldesc);
                            $("#"+menucod+"tumbcode").val(obj.colordesc);
                            $("#"+menucod+"aumpcode").val(obj.insurecode);
                            $("#"+menucod+"provcode").val(obj.insurecomcode);
                            $("#"+menucod+"area1").val(obj.area1);
                            $("#"+menucod+"area2").val(obj.area2);
                            $("#"+menucod+"area3").val(obj.area3);
                            $("#"+menucod+"landdate").val(obj.landdate);
                            gdesc();
                            tumbdesc();
                            aumpdesc();
                            provdesc();
                        } else if (obj.assettype == 3) {
                            $("#"+menucod+"engno").val(obj.engno);
                            $("#"+menucod+"3-address").val(obj.regno);
                            $("#"+menucod+"3-location").val(obj.regprov);
                            $("#"+menucod+"3-typehome").val(obj.typedesc);
                            $("#"+menucod+"3-nearby").val(obj.modeldesc);
                            $("#"+menucod+"3-area1").val(obj.area1);
                            $("#"+menucod+"3-area2").val(obj.area2);
                            $("#"+menucod+"3-area3").val(obj.area3);
                            $("#"+menucod+"3-area4").val(obj.area4);
                            $("#"+menucod+"3-homeage").val(obj.homeage);
                            gdesc();
                        } else {
                            $("#"+menucod+"engno").val(obj.desc);
                            gdesc();
                        };
                    }
                });
            });
        };
        //ปุ่มบันทึกข้อมูล
        var invtran_save = function() {
            $('#fminvtran').jqxValidator('validate', function (result) {
                if (result) {
                    $.when($.confirmdlg('ต้องการบันทึกข้อมูล?', 'info')).then(function() {
                        $('#ok').click(function(event) {
                            if ($("#"+menucod+"assettype").val() == 1) {
                                var data1 = { menucod: menucod, assettype: $("#"+menucod+"assettype").val(), strno: $("#"+menucod+"strno").val(), price: $("#"+menucod+"price").val(), gcode: $("#"+menucod+"gcode").val(), desc: "รถ / เล่มทะเบียน", engno: $("#"+menucod+"engno").val(), regno: $("#"+menucod+"regno").val(), regprov: $("#"+menucod+"regprov").val(), regdate: $("#"+menucod+"regdate").val(), regexp: $("#"+menucod+"regexp").val(), typedesc: $("#"+menucod+"typedesc").val(), modeldesc: $("#"+menucod+"modeldesc").val(), colordesc: $("#"+menucod+"colordesc").val(), manuyr: $("#"+menucod+"manuyr").val(), milert: $("#"+menucod+"milert").val(), insurecode: $("#"+menucod+"insurecode").val(), insuredate: $("#"+menucod+"insuredate").val(), insureexp: $("#"+menucod+"insureexp").val(), insurecomcode: $("#"+menucod+"insurecomcode").val(), prbcode: $("#"+menucod+"prbcode").val(), prbdate: $("#"+menucod+"prbdate").val(), prbexp: $("#"+menucod+"prbexp").val(), prbcomcode: $("#"+menucod+"prbcomcode").val(), memo1: $("#"+menucod+"memo1").val() };
                            } else if ($("#"+menucod+"assettype").val() == 2) {
                                var data1 = { menucod: menucod, assettype: $("#"+menucod+"assettype").val(), strno: $("#"+menucod+"strno").val(), price: $("#"+menucod+"price").val(), gcode: $("#"+menucod+"gcode").val(), desc: "ที่ดิน / น.ส.3", engno: $("#"+menucod+"engno").val(), pageno: $("#"+menucod+"pageno").val(), position: $("#"+menucod+"position").val(), landno: $("#"+menucod+"landno").val(), survey: $("#"+menucod+"survey").val(), tumbcode: $("#"+menucod+"tumbcode").val(), aumpcode: $("#"+menucod+"aumpcode").val(), provcode: $("#"+menucod+"provcode").val(), area1: $("#"+menucod+"area1").val(), area2: $("#"+menucod+"area2").val(), area3: $("#"+menucod+"area3").val(), landdate: $("#"+menucod+"landdate").val(), memo1: $("#"+menucod+"memo1").val() };
                            } else if ($("#"+menucod+"assettype").val() == 3) {
                                var data1 = { menucod: menucod, assettype: $("#"+menucod+"assettype").val(), strno: $("#"+menucod+"strno").val(), price: $("#"+menucod+"price").val(), gcode: $("#"+menucod+"gcode").val(), desc: "บ้านพักอาศัย", engno: $("#"+menucod+"engno").val(), address: $("#"+menucod+"3-address").val(), location: $("#"+menucod+"3-location").val(), nearby: $("#"+menucod+"3-nearby").val(), typehome: $("#"+menucod+"3-typehome").val(), area1: $("#"+menucod+"3-area1").val(), area2: $("#"+menucod+"3-area2").val(), area3: $("#"+menucod+"3-area3").val(), area4: $("#"+menucod+"3-area4").val(), homeage: $("#"+menucod+"3-homeage").val(), memo1: $("#"+menucod+"memo1").val() };
                            } else {
                                var data1 = { menucod: menucod, assettype: $("#"+menucod+"assettype").val(), strno: $("#"+menucod+"strno").val(), price: $("#"+menucod+"price").val(), gcode: $("#"+menucod+"gcode").val(), desc: $("#"+menucod+"engno").val(), memo1: $("#"+menucod+"memo1").val() }
                            };
                            $.ajax({
                                url: "invtran/save",
                                data: data1,
                                type: 'POST',
                                success: function (data) {
                                    $("#"+menucod).html(data);
                                }
                            });
                        });
                    });
                }
            });
        };

        //ปุ่มปิดระบบ
        var invtran_close = function() {
            var selectedItem = $('#jqxTabs').jqxTabs('selectedItem');
            var disabledItems = $('#jqxTabs').jqxTabs('getDisabledTabsCount');
            var items = $('#jqxTabs').jqxTabs('length');
            if (items > disabledItems + 1) {
                $('#jqxTabs').jqxTabs('removeAt', selectedItem);
            }
        };
    });
</script>
