<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>novaposhta Pirkov O.V.</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/buttons.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background:linear-gradient(to right, rgba(132,128,194,1),rgba(177,177,218),rgba(0,212,255,1)); height: 100%;"> -->
@include('partials.navigation')

<div class="row" style=" margin-top: 50px;"><h1>Внесіть інформацію про місто.</h1>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{route('citie.create')}}" role="button" style=" text-shadow: 3px 3px 9px black;">@lang('Додати данні')</a>
                </div>
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-bcitieed dt-responsive nowrap w-100">
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
                            @foreach($cities as $citie)
                            <tr>
                                <td class="td">{{ $citie->id }}</td>
                                <td>{{ $citie->name }}</td>
                                <td>{{ $citie->created_at }}</td>
                                <td>{{ $citie->updated_at }}</td>
                                <td>
                                    <div class="container">
                                        <div class="d-flex flex-row justify-content-evenly" style="align-items:center">
                                            <a href="{{route('citie.edit', $citie->id)}}" type="button" class="btn btn-soft-success waves-effect waves-light block" style="background-color:green; height: 40px; width: 50px; box-shadow: 5px 8px 8px green;">
                                                <i class="mdi mdi-pencil font-size-16 align-middle"></i>---
                                            </a>
                                            <form action="{{route('citie.delete', $citie->id)}}" method="post">
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
<!-- </body>

</html> -->