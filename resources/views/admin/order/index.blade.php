<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Order </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-body">
            <div class="container mb-5 mt-3">
                {{-- <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #123-123</strong></p>
                    </div>
                    <div class="col-xl-3 float-end">
                        <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                                class="fas fa-print text-primary"></i> Print</a>
                        <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                                class="far fa-file-pdf text-danger"></i> Export</a>
                    </div>
                    <hr>
                </div> --}}
                <div class="container">
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center my-4">

                            <img class=""
                                src="https://images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/79279logosticky.png"
                                alt="icon" style="width:90px; height: 60px;" />
                        </div>
                    </div>
                    <div class="row">

                        <div class="col d-flex align-items-center justify-content-center">
                            <table class="table  table-borderless border">
                                <thead style="background-color:#84B0CA ;" class="text-white">
                                    <tr>

                                        <th scope="col">Name</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($orderItems as $orderItem)
                                        <tr>
                                            <td scope="row">{{ $orderItem->product->name }}</td>
                                            <td>{{ $orderItem->quantity }}</td>
                                            <td>{{ $orderItem->created_at->format('g:i d/m/Y ') }}</td>
                                        </tr>
                                    @endforeach --}}

                                    @foreach ($data['OrderItems'] as $orderItem)
                                        <tr>
                                            <td scope="row">{{ $orderItem->product->name }}</td>
                                            <td>{{ $orderItem->quantity }}</td>
                                            <td>{{ $orderItem->created_at->format('g:i d/m/Y ') }}</td>
                                        </tr>
                                        <!-- Add more properties as needed -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</body>

</html>
