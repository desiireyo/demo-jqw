<h2><i class="fa fa-cog"></i> แก้ไขข้อมูลกลุ่มสินค้า</h2>
<div id="setgroupTool"></div>
<input type="hidden" id="setgroupid" value="<?php echo $menucod ?>">
<br />
<form id="fmSetgroup">
    <table class="sertgroup-table">
        <tr>
            <td>รหัสกลุ่มสินค้า</td>
            <td><input type="text" id="<?php echo $menucod ?>gcode" value="<?php echo $setgroup->gcode; ?>"></td>
        </tr>
        <tr>
            <td>คำอธิบาย</td>
            <td><input type="text" id="<?php echo $menucod ?>gdesc" value="<?php echo $setgroup->gdesc; ?>"></td>
        </tr>
        <tr>
            <td>ประเภทหลักทรัพย์</td>
            <td>
                <div id="<?php echo $menucod ?>assettype"></div>
                <input type="hidden" id="<?php echo $menucod ?>v-assettype" value="<?php echo $setgroup->assettype; ?>">
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        var menucod = $("#setgroupid").val();
        var source = [
                        { text: "รถ / เล่มทะเบียน", value: 1 },
                        { text: "ที่ดิน / น.ส.3", value: 2 },
                        { text: "บ้านพักอาศัย", value: 3 },
                        { text: "อื่นๆ", value: 4 }
                    ];
        $("#"+menucod+"gcode").jqxInput({ height: 23, width: 121, theme: theme, minLength: 1, maxLength: 20, disabled: true });
        $("#"+menucod+"gdesc").jqxInput({ height: 23, width: 300, theme: theme, maxLength: 60 });
        $("#"+menucod+"assettype").jqxDropDownList({ height: 23, width: 200, source: source, displayMember: 'text', valueMember: 'value', theme: theme, dropDownHeight:100, selectedIndex: 0 });
        //ประเภทเอกสาร
        if ($("#"+menucod+"v-assettype").val() == 1) {
            $("#"+menucod+"assettype").jqxDropDownList('selectIndex',0);
        } else if ($("#"+menucod+"v-assettype").val() == 2) {
            $("#"+menucod+"assettype").jqxDropDownList('selectIndex',1);
        } else if ($("#"+menucod+"v-assettype").val() == 3) {
            $("#"+menucod+"assettype").jqxDropDownList('selectIndex',2);
        } else {
            $("#"+menucod+"assettype").jqxDropDownList('selectIndex',3);
        }
        //Tools
        $("#setgroupTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button ',
            initTools: function (type, index, tool, menuToolIninitialization) {
                var icon = $("<div class='buttonIcon'></div>");
                switch (index) {
                    case 0:
                        icon.addClass("fa fa-arrow-left fa-lg");
                        icon.attr("title", "ย้อนกลับ");
                        icon.attr("id", menucod+"btnBack");
                        icon.html("<p>ย้อนกลับ</p>");
                        tool.append(icon);
                        tool.click(function() {
                            setgroup_back();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-floppy-o fa-lg");
                        icon.attr("title", "บันทึกข้อมูล");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>บันทึกข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            setgroup_save();
                        });
                        break;
                }
            }
        });
        $('#fmSetgroup').jqxValidator({
            hintType: 'label',
            animationDuration: 0,
            rules:  [
                       { input: '#'+menucod+'gcode', message: 'กรุณาระบุรหัสกลุ่มสินค้า!', action: 'keyup, blur', rule: 'required' }
                    ]
        });
        var setgroup_save = function() {
            $('#fmSetgroup').jqxValidator('validate', function (result) {
                if (result) {
                    $.when($.confirmdlg('ต้องการบันทึกข้อมูล?', 'info')).then(function() {
                        $('#ok').click(function(event) {
                            $.ajax({
                                url: "setgroup/save",
                                data: { menucod: menucod, gcode: $("#"+menucod+"gcode").val(), gdesc: $("#"+menucod+"gdesc").val(), assettype: $("#"+menucod+"assettype").val() },
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
        var setgroup_back = function(event) {
            $('#fmSetgroup').jqxValidator('hide');
            $.ajax({
                url: "setgroup/index",
                data: { menucod: menucod },
                type: 'get',
                success: function(data) {
                    $("#"+menucod).html(data);
                }
            });
        };
    });
</script>