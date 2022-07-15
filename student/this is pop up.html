<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.pager.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxgrid.selection.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxnumberinput.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="../../scripts/gettheme.js"></script>
    <script type="text/javascript" src="generatedata.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var theme = getTheme();
            // prepare the data
            var data = generatedata(200);
            var source =
            {
                localdata: data,
                datatype: "array",
                updaterow: function (rowid, rowdata) {
                    // synchronize with the server - send update command   
                }
            };
            // initialize the input fields.
            $("#firstName").addClass('jqx-input');
            $("#lastName").addClass('jqx-input');
            $("#product").addClass('jqx-input');
            $("#firstName").width(150);
            $("#firstName").height(23);
            $("#lastName").width(150);
            $("#lastName").height(23);
            $("#product").width(150);
            $("#product").height(23);
            if (theme.length > 0) {
                $("#firstName").addClass('jqx-input-' + theme);
                $("#lastName").addClass('jqx-input-' + theme);
                $("#product").addClass('jqx-input-' + theme);
            }
            $("#quantity").jqxNumberInput({ width: 150, height: 23, theme: theme, decimalDigits: 0, spinButtons: true });
            $("#price").jqxNumberInput({ width: 150, height: 23, theme: theme, spinButtons: true });
            var dataAdapter = new $.jqx.dataAdapter(source);
            var editrow = -1;
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                source: dataAdapter,
                theme: theme,
                pageable: true,
                autoheight: true,
                selectionmode: 'singlecell',
                columns: [
                  { text: 'First Name', datafield: 'firstname', width: 100 },
                  { text: 'Last Name', datafield: 'lastname', width: 100 },
                  { text: 'Product', datafield: 'productname', width: 190 },
                  { text: 'Quantity', datafield: 'quantity', width: 90, cellsalign: 'right' },
                  { text: 'Price', datafield: 'price', cellsalign: 'right', cellsformat: 'c2' }
                ]
            });
            $("#jqxgrid").bind('cellselect', function (event) {
                // open the popup window when the user clicks a button.
                editrow = event.args.rowindex;
                var offset = $("#jqxgrid").offset();
                $("#popupWindow").jqxWindow({ position: { x: parseInt(offset.left) + 60, y: parseInt(offset.top) + 60} });
                // get the clicked row's data and initialize the input fields.
                var dataRecord = $("#jqxgrid").jqxGrid('getrowdata', editrow);
                $("#firstName").val(dataRecord.firstname);
                $("#lastName").val(dataRecord.lastname);
                $("#product").val(dataRecord.productname);
                $("#quantity").jqxNumberInput({ decimal: dataRecord.quantity });
                $("#price").jqxNumberInput({ decimal: dataRecord.price });
                // show the popup window.
                $("#popupWindow").jqxWindow('show');
            });
            // initialize the popup window and buttons.
            $("#popupWindow").jqxWindow({ width: 250, resizable: false, theme: theme, isModal: true, autoOpen: false, cancelButton: $("#Cancel"), modalOpacity: 0.01 });
            $("#Cancel").jqxButton({ theme: theme });
            $("#Save").jqxButton({ theme: theme });
            // update the edited row when the user clicks the 'Save' button.
            $("#Save").click(function () {
                if (editrow >= 0) {
                    var row = { firstname: $("#firstName").val(), lastname: $("#lastName").val(), productname: $("#product").val(),
                        quantity: parseInt($("#quantity").jqxNumberInput('decimal')), price: parseFloat($("#price").jqxNumberInput('decimal'))
                    };
                    $('#jqxgrid').jqxGrid('updaterow', editrow, row);
                    $("#popupWindow").jqxWindow('hide');
                }
            });
        });
    </script>
</head>
<body class='default'>
    <div id='jqxWidget'>
        <div id="jqxgrid"></div>
        <div style="margin-top: 30px;">
            <div id="cellbegineditevent"></div>
            <div style="margin-top: 10px;" id="cellendeditevent"></div>
       </div>
       <div id="popupWindow">
            <div>Edit</div>
            <div style="overflow: hidden;">
                <table>
                    <tr>
                        <td align="right">First Name:</td>
                        <td align="left"><input id="firstName" /></td>
                    </tr>
                    <tr>
                        <td align="right">Last Name:</td>
                        <td align="left"><input id="lastName" /></td>
                    </tr>
                    <tr>
                        <td align="right">Product:</td>
                        <td align="left"><input id="product" /></td>
                    </tr>
                    <tr>
                        <td align="right">Quantity:</td>
                        <td align="left"><div id="quantity"></div></td>
                    </tr>
                    <tr>
                        <td align="right">Price:</td>
                        <td align="left"><div id="price"></div></td>
                    </tr>
                    <tr>
                        <td align="right"></td>
                        <td style="padding-top: 10px;" align="right"><input style="margin-right: 5px;" type="button" id="Save" value="Save" /><input id="Cancel" type="button" value="Cancel" /></td>
                    </tr>
                </table>
            </div>
       </div>
    </div>







<FORM NAME="sci-calc">
<TABLE CELLSPACING="0" CELLPADDING="1">
<TR>
<TD COLSPAN="5" ALIGN="center"><INPUT NAME="display" VALUE="0" SIZE="28" MAXLENGTH="25"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" exp " ONCLICK="if (checkNum(this.form.display.value)) { exp(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  7  " ONCLICK="addChar(this.form.display, '7')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  8  " ONCLICK="addChar(this.form.display, '8')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  9  " ONCLICK="addChar(this.form.display, '9')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   /   " ONCLICK="addChar(this.form.display, '/')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   ln   " ONCLICK="if (checkNum(this.form.display.value)) { ln(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  4  " ONCLICK="addChar(this.form.display, '4')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  5  " ONCLICK="addChar(this.form.display, '5')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  6  " ONCLICK="addChar(this.form.display, '6')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   *   " ONCLICK="addChar(this.form.display, '*')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sqrt " ONCLICK="if (checkNum(this.form.display.value)) { sqrt(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  1  " ONCLICK="addChar(this.form.display, '1')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  2  " ONCLICK="addChar(this.form.display, '2')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  3  " ONCLICK="addChar(this.form.display, '3')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   -   " ONCLICK="addChar(this.form.display, '-')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  sq  " ONCLICK="if (checkNum(this.form.display.value)) { square(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  0  " ONCLICK="addChar(this.form.display, '0')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   .  " ONCLICK="addChar(this.form.display, '.')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" +/- " ONCLICK="changeSign(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   +  " ONCLICK="addChar(this.form.display, '+')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="    (    " ONCLICK="addChar(this.form.display, '(')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="cos" ONCLICK="if (checkNum(this.form.display.value)) { cos(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sin" ONCLICK="if (checkNum(this.form.display.value)) { sin(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" tan" ONCLICK="if (checkNum(this.form.display.value)) { tan(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   )   " ONCLICK="addChar(this.form.display, ')')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="clear" ONCLICK="this.form.display.value = 0 "></TD>
<TD ALIGN="center" COLSPAN="3"><INPUT TYPE="button" VALUE="backspace" ONCLICK="deleteChar(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="enter" NAME="enter" ONCLICK="if (checkNum(this.form.display.value)) { compute(this.form) }"></TD>
</TR>
</TABLE>
</FORM>

<p align="center"><font face="arial" size="-2">This free script provided by</font><br>
<font face="arial, helvetica" size="-2"><a href="http://javascriptkit.com">JavaScript
Kit</a></font></p>











<form><input type="button" value="Popup Calculator" onclick="javascript:window.open('http://ostermiller.org/calc/calculator.html','calculator'+new Date().getTime(),'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=yes,copyhistory=no,width=450,height=300');"></form>
</body>
</html>