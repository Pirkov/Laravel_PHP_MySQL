<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novaposhta Pirkov O.V.</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/buttons.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background:linear-gradient(to right, rgba(132,128,194,1),rgba(177,177,218),rgba(0,212,255,1)); height: 100%; margin: 0;">

    <div class="section, card, card-header" style="width: 100vw;">
        <div class="nav" style="width: 100%; background-color: rgba(250, 90, 200, 0.615); justify-content: center; border-style: double;  position: fixed; top: 0; z-index: 100; margin-bottom: 50px;">
            <div class="nav1" style="display: flex; justify-content: space-around;  align-items: center">
                <div class="home" style="height: 46px; width: 270px;">
                    <!-- <a class="btn btn-primary" href="{{ url('/home') }}" role="button">@lang('Home')</a> -->
                    <a class="btn btn-primary" style="height: 45px; width: 250px; padding-top: 0px; padding-left: 0px;" href="{{ url('/home') }}" role="button">
                        <img src="{{ asset('images/NP_Smilyvist.jpg') }}" alt="Smilyvist">
                        <!-- @lang('Home') -->
                    </a>
                </div>
                <div class="orders">
                    <a class="btn btn-outline-info" href="{{route('order.order')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Замовлення')</a>
                </div>
            </div>
            <div class="nav2" style="display: flex; justify-content: space-around; align-items: center">
                <div class="clients">
                    <a class="btn btn-outline-info" href="{{route('client.client')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Клієнти')</a>
                </div>
                <div class="statuses">
                    <a class="btn btn-outline-info" href="{{route('status.status')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Статус замовлення')</a>
                </div>
                <div class="payments">
                    <a class="btn btn-outline-info" href="{{route('payment.payment')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Оплата')</a>
                </div>
                <div class="cities">
                    <a class="btn btn-outline-info" href="{{route('citie.citie')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Місто')</a>
                </div>
                <div class="departments">
                    <a class="btn btn-outline-info" href="{{route('department.department')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Відділення')</a>
                </div>
                <div class="search">
                    <a class="btn btn-outline-info" href="{{ url('https://novaposhta.ua/') }}" role="button" target="_blank" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Стан посилки')</a>
                </div>
                <div class="rules">
                    <a class="btn btn-outline-info" href="{{ url('https://novaposhta.ua/') }}" role="button" target="_blank" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Правила')</a>
                </div>
                <div class="roles">
                    <a class="btn btn-outline-info" href="{{route('role.role')}}" role="button" style="margin-left: 5px; color: white; text-shadow: 3px 3px 9px black; border-style: outset;">@lang('Користувач')</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>