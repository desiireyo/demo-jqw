<input type="hidden" id="show" value="<?php echo $show;?>">
<input type="hidden" id="returnid" value="<?php echo $returnid;?>">
<input type="hidden" id="param1" value="<?php echo $param1;?>">
<input type="hidden" id="srchMenucod" value="<?php echo $menucod;?>">
<input type="hidden" id="returnvalue" value="">
<div id="tbSearch"></div>
<script>
    function keyPressed(e) {
        if(e.keyCode==13) {
            //alert('keyPressed');
            $("#searchButton").click();
        }
    }
    $(function() {
        $.ajaxSetup({ cache: false });
        var width   = $(document).width();
        var height  = $(document).height();
        var menucod = $('#srchMenucod').val();
        var sqltxt  = "";
        var fields  = [];
        var keyno   = "";
        var data    = [];
        var source  = {};
        var source  =
        {
            localdata: data,
            datatype: 'json'
        };
        var gridDataAdapter = new $.jqx.dataAdapter(source);

        //ตรวจสอบว่าจะค้นหาข้อมูลอะไร พร้อมระบุ Field ที่จะแสดง
        if ($('#show').val() === 'setaump') {
            sqltxt = 'select * from setaump where upper(aumpcode||aumpdesc) like :param1 order by aumpcode';
            fields = [{ text: 'รหัสอำเภอ', datafield: 'aumpcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'aumpdesc', width: 250 }];
            keyno = 'aumpcode';
        } else if ($('#show').val() === 'setprov') {
            sqltxt = 'select * from setprov where upper(provcode||provdesc) like :param1 order by provcode';
            fields = [{ text: 'รหัสจังหวัด', datafield: 'provcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'provdesc', width: 250 }];
            keyno = 'provcode';
        } else if ($('#show').val() === 'setgroup') {
            sqltxt = 'select * from setgroup where upper(gcode||gdesc) like :param1 and assettype = :param2 order by gcode';
            fields = [{ text: 'รหัสกลุ่ม', datafield: 'gcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'gdesc', width: 250 }];
            keyno = 'gcode';
        } else if ($('#show').val() === 'settumb') {
            sqltxt = 'select * from settumb where upper(tumbcode||tumbdesc) like :param1 order by tumbcode';
            fields = [{ text: 'รหัสตำบล', datafield: 'tumbcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'tumbdesc', width: 250 }];
            keyno = 'tumbcode';
        } else if ($('#show').val() === 'argroup'){
            sqltxt = 'select * from argroup where upper(argroupcode||argroupdesc) like :param1 order by argroupcode';
            fields = [{ text: 'รหัสกลุ่มลูกหนี้', datafield: 'argroupcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'argroupdesc', width: 250 }];
            keyno = 'argroupcode';
        } else if ($('#show').val() === 'setgrade'){
            sqltxt = 'select * from setgrade where upper(grdcode||grddesc) like :param1 order by grdcode';
            fields = [{ text: 'รหัสเกรด', datafield: 'grdcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'grddesc', width: 250 }];
            keyno = 'grdcode';
        } else if ($('#show').val() === 'setoccup'){
            sqltxt = 'select * from setoccup where upper(occupcode||occupdesc) like :param1 order by occupcode';
            fields = [{ text: 'รหัสอาชีพ', datafield: 'occupcode', width: 250 },
                      { text: 'คำอธิบาย', datafield: 'occupdesc', width: 250 }];
            keyno = 'occupcode';
        } else if ($('#show').val() === 'garmast'){
            sqltxt = 'select * from garmast where upper(garcode||garname) like :param1 order by garcode';
            fields = [{ text: 'รหัสบริษัทประกัน', datafield: 'garcode', width: 250 },
                      { text: 'ชื่อบริษัท', datafield: 'garname', width: 250 }];
            keyno = 'garcode';
        } else if ($('#show').val() === 'invtran'){
            sqltxt = 'select idno, assettype, strno, "desc", price, gcode, engno, regno, regprov, regdate, regexp, typedesc, modeldesc, colordesc, manuyr, milert, insurecode, insuredate, insureexp, insurecomcode, prbcode, prbdate, prbexp, prbcomcode, area3, landdate, homeage from view_invtran where upper(strno||"desc"||engno||regno) like :param1 order by strno';
            fields = [{ text: 'รหัสหลักทรัพย์', datafield: 'strno', width: 250 },
                      { text: 'รายละเอียด', datafield: 'desc', width: 250 }];
            keyno = 'strno';
        }

        $("#tbSearch").jqxGrid({
            width: width-35,
            height: height-100,
            sortable: true,
            source: gridDataAdapter,
            theme: theme,
            columns: fields
        });

        //ฟังก์ชั่น คลิกปุ่มค้นหา และแสดงรายการที่ค้นหาพบ
        $("#searchButton").off().on( "click",function(e) {
            $('#tbSearch').jqxGrid('showloadelement');
            $.ajax({
                url: "search/searchtext",
                data: { sqltxt: sqltxt, param1: $('#searchInput').val(), param2: $('#param1').val() },
                type: 'POST',
                dataType: 'json',
                success: function (data) {
                    source.localdata = data;
                    $('#tbSearch').jqxGrid('updatebounddata');
                    $('#tbSearch').jqxGrid('autoresizecolumns');
                    $('#tbSearch').jqxGrid('hideloadelement');
                }
            });
        });
        $('#tbSearch').on('rowclick', function (event) {
            var args = event.args;
            var rowindex = args.rowindex;
            var data = $('#tbSearch').jqxGrid('getcellvalue', rowindex, keyno);
            $('#okButton').jqxButton({disabled: false });
            $("#returnvalue").val(data);
        });
        $('#okButton').off().on('click', function() {
            var id = '#'+$("#returnid").val();
            $(id).val($("#returnvalue").val());
            $('#search').jqxWindow('close');
            $(id).jqxInput('focus');
        });
        $('#tbSearch').on('rowdoubleclick', function (event) {
             $('#okButton').click();
        });
    });
</script>
