<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ env('APP_NAME') }}</title>
<link rel="icon" type="image/png" href="/images/favicon.png" />
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
@yield('css')
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>