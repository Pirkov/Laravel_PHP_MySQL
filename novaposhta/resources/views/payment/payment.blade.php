@include('partials.navigation')
<div class="row" style=" margin-top: 50px;">
    <h1>Внесіть інформацію про статус оплати.</h1>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="{{route('payment.create')}}" role="button" style=" text-shadow: 3px 3px 9px black;">@lang('Додати данні')</a>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-payment dt-responsive nowrap w-100">
                    <thead>
                        <tr class="tr">
                            <th>id</th>
                            <th>name</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $payment)
                        <tr>
                            <td class="td">{{ $payment->id }}</td>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td>{{ $payment->updated_at }}</td>
                            <td>
                                <div class="container">
                                    <div class="d-flex flex-row justify-content-evenly" style="align-items:center">
                                        <a href="{{route('payment.edit', $payment->id)}}" type="button" class="btn btn-soft-success waves-effect waves-light block" style="background-color:green; height: 40px; width: 50px; box-shadow: 5px 8px 8px green;">
                                            <i class="mdi mdi-pencil font-size-16 align-middle"></i>---
                                        </a>
                                        <form action="{{route('payment.delete', $payment->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <div>
                                                <button type="submit" class="btn btn-soft-danger waves-effect waves-light block" style="background-color:red; height: 40px; width: 50px; box-shadow: 5px 8px 8px red;">
                                                    <i class="mdi mdi-trash-can d-block font-size-16 "></i>X
                                                </button>
                                            </div>
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