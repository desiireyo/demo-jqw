<h2><i class="fa fa-cog"></i> เพิ่มข้อมูลอาชีพลูกค้า</h2>
<div id="setoccupTool"></div>
<input type="hidden" id="setoccupid" value="<?php echo $menucod ?>">
<br />
<form id="fmsetoccup">
    <table class="setoccup-table">
        <tr>
            <td>รหัสอาชีพ</td>
            <td><input type="text" id="<?php echo $menucod ?>occupcode"></td>
        </tr>
        <tr>
            <td>คำอธิบาย</td>
            <td><input type="text" id="<?php echo $menucod ?>occupdesc"></td>
        </tr>
    </table>
</form>
<br />

<script type="text/javascript">
    $(document).ready(function () {
    	var menucod = $("#setoccupid").val();
    	$("#"+menucod+"occupcode").jqxInput({ height: 23, width: 180, theme: theme, minLength: 1, maxLength: 10 });
        $("#"+menucod+"occupdesc").jqxInput({ height: 23, width: 300, theme: theme, maxLength: 60 });

        $("#setoccupTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button ',
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
                            setoccup_back();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-floppy-o fa-lg");
                        icon.attr("title", "บันทึกข้อมูล");
                        icon.attr("id", menucod+"btnSave");
                        icon.html("<p style='margin-top:3px;'>บันทึกข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            setoccup_save();
                        });
                        break;
                }
            }
        });

        $('#fmsetoccup').jqxValidator({
            hintType: 'label',
            animationDuration: 0,
            closeOnClick: false,
            rules:  [
                        { input: '#'+menucod+'occupcode', message: 'กรุณาระบุรหัสอาชีพ!', action: 'keyup, blur', rule: 'required' },
                        { input: '#'+menucod+'occupcode', message: 'ระบุรหัสอาชีพซ้ำ!', action: 'keyup, blur', rule: function (input, commit) {
                                var occupcode = $("#"+menucod+"occupcode").val();
                                if (occupcode !== '') {
                                    $.ajax({
                                        url: "setoccup/validate",
                                        type: 'get',
                                        data: { occupcode: occupcode },
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
                        }
                    ]
        });

        //ปุ่มบันทึกข้อมูล
        var setoccup_save = function() {
            $('#fmsetoccup').jqxValidator('validate', function (result) {
                if (result) {
                    $.when($.confirmdlg('ต้องการบันทึกข้อมูล?', 'info')).then(function() {
                        $('#ok').click(function(event) {
                            $.ajax({
                                url: "setoccup/save",
                                data: { menucod: menucod, occupcode: $("#"+menucod+"occupcode").val(), occupdesc: $("#"+menucod+"occupdesc").val() },
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
        var setoccup_back = function(event) {
            $('#fmsetoccup').jqxValidator('hide');
            $.ajax({
                url: "setoccup/index",
                data: { menucod: menucod },
                type: 'get',
                success: function(data) {
                    $("#"+menucod).html(data);
                }
            });
        };
    });
</script>
