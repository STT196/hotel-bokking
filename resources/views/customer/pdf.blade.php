<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/pdf.css" type="text/css">
    <title>Invoice</title>
</head>
<body>
    <table class="w-full">
        <tr>
            <td class="w-half">
                <img src="images/eml.png" alt="" width="200" />
            </td>
            <td class="w-half">
                <h2>Invoice ID: {{ $data['invoice_id'] }}</h2>
            </td>
        </tr>
    </table>

    <div class="margin-top">
        <table class="w-full">
            <tr>
                <td class="w-half">
                    <div><h4>Customer</h4></div>
                    <div>{{$data['customer_name']}}</div>
                    <div>TP: {{$data['customer_tp']}}</div>


                </td>
                <td class="w-half">
                    <div><h4>Hotel</h4></div>
                    <div>{{$data['hotel_name']}}</div>
                    <div>{{$data['hotel_address']}}</div>
                    <div>TP: {{$data['hotel_phone']}}</div>

                </td>
        </table>
    </div>

    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Children</th>
                <th>Adults</th>
                <th>Room Type</th>
                <th >Checkin</th>
                <th >Checkout</th>
                <th >Days</th>

                <th>Price Per Day</th>
            </tr>
            <tr class="items">

                    <td>
                        {{ $data['children'] }}
                    </td>
                    <td>
                        {{ $data['adults'] }}
                    </td>
                    <td>
                        {{ $data['room_type'] }}
                    </td>
                    <td>
                        {{ $data['checkin'] }}
                    </td>
                    <td>
                        {{ $data['checkout'] }}
                    </td>
                    <td>
                        {{ $data['days'] }}
                    </td>

                    <td>
                        {{ $data['price'] }}
                    </td>

            </tr>
        </table>
    </div>

    <div class="total">
        Total: Rs {{ $data['total_price'] }}
    </div>

    <div class="footer margin-top">
        <div>Thank you</div>
    </div>
</body>
</html>
