<!DOCTYPE html>
<html>
    <head>
        <title>VOUCHER INFO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            table{
                width: 850px;
                font-size:16px;
                margin-left: 90px;
            }
        </style>
    </head>

    <body>

        <table border="1">
            <tr>
                <td height="140" colspan="2"></td>
            </tr>
            <tr>
                <td height="30"></td>
                <td height="30" align="right">{{ $voucherInfo->voucher_date }}</td>
            </tr>
            <tr>
                <td height="30" colspan="2">{{ $voucherInfo->voucher_to }}</td>
            </tr>
            <tr>
                <td height="40" colspan="2">{{ $voucherInfo->voucher_for }}</td>
            </tr>
            <tr>
                <td height="auto" width="650" style="line-height: 35px">{{ $voucherInfo->voucher_description }}</td>
                <td align="right" style="padding-bottom: 90px">{{ $voucherInfo->amount_digit }}</td>
            </tr>
            <tr>
                <td height="30"></td>
                <td height="30"></td>
            </tr>
            <tr>
                <td height="30"></td>
                <td height="30"></td>
            </tr>
            <tr>
                <td height="30"></td>
                <td height="30"></td>
            </tr>
            <tr>
                <td height="30" style="padding-left: 50px">10</td>
                <td height="30"></td>
            </tr>
            <tr>
                <td height="30" style="padding-left: 100px">{{ $voucherInfo->total_amount_word }}</td>
                <td align="right">{{ $voucherInfo->amount_digit }}</td>
            </tr>

        </table>

{{--        <table>--}}
{{--            <td><a title="Print Screen" alt="Print Screen" onclick="window.print();"target="_blank" style="cursor: pointer;">Print</a></td>--}}
{{--        </table>--}}

    </body>
</html>
