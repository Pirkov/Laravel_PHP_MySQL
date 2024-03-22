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

<body style="background:linear-gradient(to right, rgba(132,128,194,1),rgba(177,177,218),rgba(0,212,255,1)); height: 100%;">
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <form method="post" action="{{ route('order.update', $order->id) }}">
                        @csrf
                        @method('patch')
                        <div class="col-lg-12 ms-lg-order">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                    Ви можете змінити данні ордеру.</h5>


                                <!-- <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Фамілія:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="last_name" value="{{ $order->client_last_name }}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Ім`я:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fitst_name" value="{{ $order->client_fitst_name}}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">№ телефона:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="telephone" value="{{ $order->client_telephone }}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div> -->
                                <!-- <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Електронна адреса Email:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" value="{{ $order->client_email }}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div> -->
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Статус замовлення:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="status" value="{{ $order->status_name}}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Статус оплати:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="payment" value="{{ $order->payment_name }}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Місто доставки:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="citie" value="{{ $order->citie_name }}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">№ відділення:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="department" value="{{ $order->department_name}}" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md" style=" text-shadow: 3px 3px 9px black; border-style: outset;">Відправити</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
</body>

</html>