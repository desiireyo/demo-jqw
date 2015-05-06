<h2><i class="fa fa-cog"></i> ประวัติลูกค้า/ผู้ค้ำประกัน</h2>
<div id="custmastTool"></div>
<br />
<div id="tbcustmast"></div>
<br />
<input type="hidden" id="viewcustmast" value="">
<input type="hidden" id="custmastid" value="<?php echo $menucod ?>">
<script type="text/javascript">

    function keyPressed(event) {
        if(event.keyCode==13) {
            $("#searchButton").click();
        }
    };
    $(document).ready(function () {
        //var theme = 'darkblue';
        var theme = 'ui-redmond';
        var url = 'custmast/dataCustmast';
        var menucod = $("#custmastid").val();
        var width = $(window).width();
        var height = $(window).height();
        // prepare the data
        var source =
        {
            datatype: "json",
            datafields: [
                { name: 'custcode', type: 'string' },
                { name: 'sname', type: 'string' },
                { name: 'fname', type: 'string' },
                { name: 'lname', type: 'string' },
                { name: 'idcard', type: 'string' },
                { name: 'mobile', type: 'string' },
                { name: 'line_id', type: 'string' }
            ],
            id: 'id',
            url: url,
			sortcolumn: 'custcode',
            sortdirection: 'asc'
        };
        var dataAdapter = new $.jqx.dataAdapter(source);

        $("#tbcustmast").jqxGrid(
        {
            width: '100%',
            theme: theme,
            source: dataAdapter,
            showfilterrow: true,
            filterable: true,
            columnsresize: true,
            selectionmode: 'singlecell',
            columns: [
                {
                    text: '#', sortable: false, filterable: false, editable: false,
                    groupable: false, draggable: false, resizable: false,
                    datafield: '', columntype: 'number', width: 50,
                    cellsrenderer: function (row, column, value) {
                        return "<div style='margin:4px;'>" + (value + 1) + "</div>";
                    }
                },
                { text: 'รหัสลูกค้า', datafield: 'custcode', width: 120 },
                { text: 'คำนำหน้า', datafield: 'sname', width: 90 },
                { text: 'ชื่อ', datafield: 'fname', width: 200 },
                { text: 'นามสกุล', datafield: 'lname', width: 200 },
                { text: 'เลขที่บัตร', datafield: 'idcard', width: 120 },
                { text: 'mobile', datafield: 'mobile', width: 100 },
                { text: 'id line', datafield: 'line_id', width: 100 }
            ],
            showtoolbar: true,
            rendertoolbar: function (toolbar) {
                    var me = this;
                    var container = $("<div style='margin: 5px;'></div>");
                    toolbar.append(container);
                    container.append('<input type="button" value="Export to Excel" id="'+menucod+'excelExport" />');
                    $("#"+menucod+"excelExport").jqxButton({ theme: theme });
                    //Export Data
                    $("#"+menucod+"excelExport").click(function () {
                        $("#tbcustmast").jqxGrid('exportdata', 'xls', 'ข้อมูลสาขา');
                    });
            },
            sortable: true,
            pageable: true,
            pagesize: 10,
            autoheight: true,
            columnsresize: true
        });

        $("#custmastTool").jqxToolBar({ width: '100%', height: 50, theme: theme, tools: 'button | button | button | button | button | button',
            initTools: function (type, index, tool, menuToolIninitialization) {
                var icon = $("<div class='buttonIcon'></div>");
                switch (index) {
                    case 0:
                        icon.addClass("fa fa-plus fa-lg");
                        icon.attr("title", "เพิ่มข้อมูล");
                        icon.attr("id", menucod+"btnInsert");
                        icon.html("<p>เพิ่มข้อมูล</p>");
                        tool.append(icon);
                        tool.click(function() {
                            custmast_insert();
                        });
                        break;
                    case 1:
                        icon.addClass("fa fa-eye fa-lg");
                        icon.attr("title", "ดูรายละเอียด");
                        icon.attr("id", menucod+"btnView");
                        icon.html("<p>ดูรายละเอียด</p>");
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
            $.get('custmast/index', {menucod: menucod}, function(data) {
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
        var custmast_print = function () {
            window.open('report/custmast', '', 'width='+width+', height='+height);
        };
    });
</script>
