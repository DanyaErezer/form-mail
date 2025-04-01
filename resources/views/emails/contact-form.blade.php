<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новая заявка</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Новая заявка</h1>

        <div class="info">
            <p><strong>Имя:</strong>{{ $contact->name }}</p>
            <p><strong>Email:</strong>{{ $contact->email }}</p>
            <p><strong>Телефон:</strong>{{ $contact->phone }}</p>

            <p><em>Дата отправки: {{ $contact->created_at->format('d.m.Y H:i') }}</em></p>
        </div>
    </div>

</body>
</html>
