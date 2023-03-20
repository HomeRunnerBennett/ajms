<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Comprehensive Income</h3>
        <div class="card-tools">
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid" id="outprint">
            <h3 class="text-center"><b>Cooperative Accounting System</b></h3>
            <h4 class="text-center"><b>Statement of Comprehensive Income</b></h4>
            <p class="m-0 text-center"><?= date("M d, Y", strtotime($from)). ' - '.date("M d, Y", strtotime($to)) ?></p>
            <hr>
            <table class="table table-hover table-bordered">
                <colgroup>
                    <col width="60%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr>
                        <th>Particulars</th>
                        <th>Amount</th>
                        <th>Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>Revenue</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;Sales Revenue</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;Other Revenue</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Total Revenue</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Expenses</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;Cost of Goods Sold</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;Operating Expenses</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;&emsp;&emsp;Salaries and Wages</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;&emsp;&emsp;Rent Expense</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;&emsp;&emsp;Depreciation Expense</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>&emsp;&emsp;&emsp;&emsp;Other Operating Expenses</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Total Expenses</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Net Income</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>