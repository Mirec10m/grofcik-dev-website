<html>
<head>

</head>
<body>

<div>
    <h1>Error Tracking - {{ env('APP_NAME') }}</h1>

    <p>V systéme <b>{{ env('APP_NAME') }}</b> sa vyskytli nové chyby.</p>

    <div>

        @foreach($errors as $error)
            <hr>

            <div>
                <div>
                    {{ $error['error'] }}
                </div>

                <div>
                    {{ $error['timestamp'] }}
                </div>
            </div>
        @endforeach

    </div>
</div>

</body>
</html>
