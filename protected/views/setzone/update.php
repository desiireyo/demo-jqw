<h2><i class="fa fa-cog"></i> แก้ไขข้อมูลรหัสการตลาด</h2>
<div id="setzoneTool"></div>
<input type="hidden" id="setzoneid" value="<?php echo $menucod ?>">
<br />
<form id="fmsetzone">
    <table class="setzone-table">
        <tr>
            <td>รหัสการตลาด</td>
            <td><input type="text" id="<?php echo $menucod ?>zonecode" value="<?php echo $setzone->zonecode; ?>"></td>
        </tr>
        <tr>
            <td>คำอธิบาย</td>
            <td><input type="text" id="<?php echo $menucod ?>zonedesc" value="<?php echo $setzone->zonedesc; ?>"></td>
        </tr>
    </table>
</form>
<br />

<script type="text/javascript">
    $(document).ready(function () {
        var menucod = $("#setzoneid").val();
        $("#"+menucod+"zonecode").jqxInput({ height: 23, width: 121, theme: theme, minLength: 1, maxLength: 10, disabled: true });
        $("#"+menucod+"zonedesc").jqxInput({ height: 23, width: 300, theme: theme, maxLength: 60 });
        $("#setzoneTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button ',
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
                            setzone_back();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-floppy-o fa-lg");
                        icon.attr("title", "บันทึกข้อมูล");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>บันทึกข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            setzone_save();
                        });
                        break;
                }
            }
        });

        $('#fmsetzone').jqxValidator({
            hintType: 'label',
            animationDuration: 0,
            closeOnClick: false,
            rules:  [
                        { input: '#'+menucod+'zonecode', message: 'กรุณาระบุรหัสการตลาด!', action: 'keyup, blur', rule: 'required' }
                    ]
        });

        //ปุ่มบันทึกข้อมูล
        var setzone_save = function() {
            $('#fmsetzone').jqxValidator('validate', function (result) {
                if (result) {
                    $.when($.confirmdlg('ต้องการบันทึกข้อมูล?', 'info')).then(function() {
                        $('#ok').click(function(event) {
                            $.ajax({
                                url: "setzone/save",
                                data: { menucod: menucod, zonecode: $("#"+menucod+"zonecode").val(), zonedesc: $("#"+menucod+"zonedesc").val() },
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
        var setzone_back = function(event) {
            $('#fmsetzone').jqxValidator('hide');
            $.ajax({
                url: "setzone/index",
                data: { menucod: menucod },
                type: 'get',
                success: function(data) {
                    $("#"+menucod).html(data);
                }
            });
        };
    });
</script>