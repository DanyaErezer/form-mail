<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная форма</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Контактная форма</h5>
                </div>
                <div class="card-body">
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя *</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback" id="name-error"></div>
                        </div>

=                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон *</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                            <div class="invalid-feedback" id="phone-error"></div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback" id="email-error"></div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <span class="spinner-border spinner-border-sm d-none" id="spinner"></span>
                            Отправить
                        </button>
                    </form>

                    <div id="success-message" class="alert alert-success mt-3 d-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/contact-form.js') }}"></script>
</body>
</html>
