@include('partials.navigation')

<div class="row" style=" margin-top: 50px;">
    <h1>Створіть замовлення на відправку та отримання посилки.</h1>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="{{route('order.create')}}" role="button" style=" text-shadow: 3px 3px 9px black;">@lang('Додати данні')</a>
            </div>
            <div class="card-body"  style="width: 100vw">
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100" style="width: 100%; margin-left: 0px;">
                    <thead>
                        <tr class="tr">
                            <th>id</th>
                            <th>Client Last Name</th>
                            <th>Client First Name</th>
                            <th>Client Telephone</th>
                            <th>Client Email</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Citie</th>
                            <th>Department</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="td">Order ID: {{ $order->id }}</td>
                            <td>{{ $order->client_last_name }}</td>
                            <td>{{ $order->client_fitst_name }}</td>
                            <td>{{ $order->client_telephone }}</td>
                            <td>{{ $order->client_email }}</td>
                            <td>{{ $order->status_name }}</td>
                            <td>{{ $order->payment_name }}</td>
                            <td>{{ $order->citie_name }}</td>
                            <td>{{ $order->department_name }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td>
                            <td>
                                <div class="container">
                                    <div class="d-flex flex-row justify-content-evenly" style="align-items:center">
                                        <a href="{{route('order.edit', $order->id)}}" type="button" class="btn btn-soft-success waves-effect waves-light block" style="background-color:green; height: 40px; width: 50px; box-shadow: 5px 8px 8px green;">
                                            <i class="mdi mdi-pencil font-size-16 align-middle"></i>---
                                        </a>
                                        <form role="form" method="POST" action="{{route('order.delete', $order->id)}}">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-soft-danger waves-effect waves-light block" style="background-color:red; height: 40px; width: 50px; box-shadow: 5px 8px 8px red;">
                                                <i class="mdi mdi-trash-can d-block font-size-16 "></i>X
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>