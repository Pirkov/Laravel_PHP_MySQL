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
                    <form method="post" action="{{ route('order.store') }}">
                        @csrf
                        <div class="col-lg-12 ms-lg-auto">
                            <div class="mt-4 mt-lg-0">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>Виберіть ID клієнта та виберіть потрібну інформацію.</h5>
                                <!-- <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Номер телефона:</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="telephone" class="form-control" id="telephone-input" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Фамілія:</label>
                                    <div class="col-sm-9 form-group">
                                        <input type="text" name="last_name" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div>
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Ім`я:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fitst_name" class="form-control" id="horizontal-firstname-input">
                                    </div>
                                </div> -->
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">ID клієнта:</label>
                                    <div class="col-sm-9">
                                    <select name="client" class="form-select" id="client-select">
                                            @foreach($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Статус замовлення:</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-select" id="status-select">
                                            @foreach($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" name="status" class="form-control" id="horizontal-firstname-input"> -->
                                    </div>
                                </div>
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Статус оплати:</label>
                                    <div class="col-sm-9">
                                        <select name="payment" class="form-select" id="payment-select">
                                            @foreach($payments as $payment)
                                            <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" name="payment" class="form-control" id="horizontal-firstname-input"> -->
                                    </div>
                                </div>
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Місто доставки:</label>
                                    <div class="col-sm-9">
                                        <select name="citie" class="form-select" id="citie-select">
                                            @foreach($cities as $citie)
                                            <option value="{{ $citie->id }}">{{ $citie->name }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" name="citie" class="form-control" id="horizontal-firstname-input"> -->
                                    </div>
                                </div>
                                <div class="row mb-4 form-group">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Відділення доставки:</label>
                                    <div class="col-sm-9">
                                        <select name="department" class="form-select" id="department-select">
                                            @foreach($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                        <!-- <input type="text" name="department" class="form-control" id="horizontal-firstname-input"> -->
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-9 form-group">
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
        <!-- end col-->

        <!-- <script>
        document.getElementById('telephone-input').addEventListener('input', function() {
            var telephone = this.value;

            // Выполним AJAX-запрос к серверу для получения данных по номеру телефона
            fetch('http://novaposhta.com/get-client-data/' + telephone)
                .then(response => response.json())
                .then(data => {
                    // Заполним полученные данные в соответствующих полях
                    document.getElementsByName('last_name')[0].value = data.last_name;
                    document.getElementsByName('fitst_name')[0].value = data.fitst_name;
                    document.getElementsByName('email')[0].value = data.email;
                })
                .catch(error => console.error('Ошибка:', error));
        });
    </script> -->




</body>

</html>