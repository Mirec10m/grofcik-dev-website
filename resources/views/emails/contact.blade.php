<html>
<head>

</head>
<body>

<div>
    <b>Meno:</b>
    {{ $data['name'] }}
</div>

<div>
    <b>E-mail:</b>
    {{ $data['email'] }}
</div>

<br>

<h2>Subject:</h2>
{{ $data['subject'] }}

<br>
<p>
    {{ $data['message'] }}
</p>

</body>
</html>
