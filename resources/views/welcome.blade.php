<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Expense Tracker</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Styles -->

</head>

<body>

    <div class="text-center justify-content-start">
        <h2 class="mb-4">Expense Tracker</h2>
        <h4 class="text-uppercase">your balance</h4>
        <h4>Ksh. {{ $transactions->sum('amount') }}</h4>

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-3 shadow" style="border-right: 1px solid #dedede">
                <h5 class="text-uppercase mt-4 ">Income</h5>
                <h6 class="text-success">+Ksh. {{ $transactions->where('amount', '>', 0)->sum('amount') }}</h6>
            </div>
            <div class="col-md-3 shadow">
                <h5 class="text-uppercase mt-4">Expense</h5>
                <h5 class="text-danger">-Ksh. {{ $transactions->where('amount', '<', 0)->sum('amount') }}</h5>
            </div>
            <div class="col-md-3"></div>
        </div>

        <h3 class="mt-4">History</h3>
        <div class="container" style="margin-left: 25%">
            <div class="col-md-6 ">
                <ul style="list-style: none;" class="">
                    @foreach ($transactions as $transaction)
                        <li class="text-start mb-1">
                            <div class="row">
                                <div class="col-md-8">{{ $transaction->description }}</div>
                                <div class="col-md-3">{{ $transaction->amount }}</div>
                                <div class="col-md-1"> <a href="{{ url('delete-transaction', $transaction->id) }}"
                                        class="btn btn-danger">X</a></div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

        </div>

        <h3 class="py-4">Add Transaction</h3>
        <p>Add negative amount for spendings</p>

        <form action="{{ url('insert-transaction') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="row ">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 shadow d-flex justify-content-start">
                        <label for="description" class="mb-2">Transaction description</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                    <div class="col-md-3 shadow d-flex justify-content-start">
                        <label for="amount" class="mb-2">Transaction amount</label>
                        <input type="amount" class="form-control" name="amount" id="amount">
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">Add transaction</button>
                </div>
            </div>

        </form>

    </div>

    {{-- Bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
