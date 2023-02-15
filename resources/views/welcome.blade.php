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
        <h4>Ksh. 0.00</h4>

        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-3 shadow" style="border-right: 1px solid #dedede">
                <h5 class="text-uppercase mt-4 ">Income</h5>
                <h6 class="text-success">+Ksh. 105.00</h6>
            </div>
            <div class="col-md-3 shadow">
                <h5 class="text-uppercase mt-4">Expense</h5>
                <h5 class="text-danger">-Ksh. 30.00</h5>
            </div>
            <div class="col-md-3"></div>
        </div>

        <h3 class="mt-4">History</h3>

        {{-- <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-3 ">
                <hr>
            </div>
            <div class="col-md-3">
                <hr>
            </div>
            <div class="col-md-3"></div>
        </div> --}}
        {{-- history --}}
        <div class="row ">
            <div class="col-md-3"></div>
            {{-- @foreach ($transactions as $transaction) --}}
            <div class="col-md-3 text-left shadow ">
                <p>description</p>
            </div>
            <div class="col-md-3 shadow text-right">
                <p>description</p>
            </div>
            {{-- @endforeach --}}
            <div class="col-md-3"></div>
        </div>

        <h3 class="py-4">Add Transaction</h3>
        <p>Add negative amount for spendings</p>
        {{-- <form id="form">
            <div className="form-control">
                <label for="text">Text</label>
                <input type="text" id="text" placeholder="Enter text..." />
            </div>
            <div className="form-control">
                <label for="amount">Amount <br />
                    (negative - expense, positive - income)</label>
                <input type="number" id="amount" placeholder="Enter amount..." />
            </div>
            <button className="btn">Add transaction</button>
        </form> --}}


        <form action="{{ url('insert-transaction') }}" method="POST">
            @csrf
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-3 shadow d-flex justify-content-start">
                    <label for="description" class="mb-2">Transaction description</label>
                    <input type="text" name="description" id="description">
                </div>
                <div class="col-md-3 shadow d-flex justify-content-start">
                    <label for="amount" class="mb-2">Transaction amount</label>
                    <input type="amount" name="amount" id="amount">
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="py-2">
                <button class="btn btn-primary">Add transaction</button>
            </div>

        </form>





    </div>




    {{-- Bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
