<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
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
    <link href="{{ public_path('css/pdf.css') }}" rel="stylesheet" type="text/css" />
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
                        {{-- <div class="col-xl-8">
                            <ul class="list-unstyled">

                                <li class="text-muted">Street, City</li>
                                <li class="text-muted">State, Country</li>
                                <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
                            </ul>
                        </div> --}}
                        <div class="col-xl-4">
                            <p class="text-muted" style="margin-bottom:0px;">Invoice</p>
                            <ul class="list-unstyled">
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold">ID:</span>{{ $itemCode }}</li>
                                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="fw-bold"></span>Jun 23,2021</li>
                                {{-- <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                        class="me-1 fw-bold">Status:</span><span
                                        class="badge bg-warning text-black fw-bold">
                                        Unpaid</span></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="row my-2 mx-1 justify-content-center">
                        <table class="table table-striped table-borderless">
                            <thead style="background-color:#84B0CA ;" class="text-white">
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>

                                    <th scope="col">Qty</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0;
                                ?>
                                @foreach ($data['OrderItems'] as $orderItem)
                                    <tr>
                                        <td scope="row">{{ $orderItem->product->name }}</td>
                                        <td>{{ $orderItem->product->price }}</td>
                                        <td>{{ $orderItem->quantity }}</td>
                                        <td>{{ $orderItem->quantity * $orderItem->product->price }}</td>
                                        {{-- <td>{{ $orderItem->created_at->format('g:i d/m/Y ') }}</td> --}}
                                        <?php
                                        $total += $orderItem->quantity * $orderItem->product->price;
                                        ?>
                                    </tr>
                                    <!-- Add more properties as needed -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        {{-- <div class="col-xl-8">
                            <p class="ms-3">Thank you for your purchase</p>
                        </div> --}}
                        <div class="col-xl-4">
                            <ul class="list-unstyled">
                                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal:
                                    </span>${{ $total }}</li>
                                <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%):
                                    </span>${{ $total * 0.08 }}
                                </li>
                            </ul>
                            <p class="text-black float-start"><span class="text-black me-3">Total:</span><span
                                    style="font-size: 25px;">${{ $total * 1.08 }}</span></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-10">
                            <p>Thank you for your purchase</p>
                        </div>
                        {{-- <div class="col-xl-2">
                            <button type="button" class="btn btn-primary text-capitalize"
                                style="background-color:#60bdf3 ;">Pay Now</button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
