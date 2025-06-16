<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- Inline script to detect system dark mode preference and apply it immediately --}}
<script>
    (function() {
        const appearance = '{{ $appearance ?? "system" }}';

        if (appearance === 'system') {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (prefersDark) {
                document.documentElement.classList.add('dark');
            }
        }
    })();
</script>

{{-- Inline style to set the HTML background color based on our theme in app.css --}}
<style>
    html {
        background-color: oklch(1 0 0);
    }

    html.dark {
        background-color: oklch(0.145 0 0);
    }
</style>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('pageTitle', 'Laravel Ready: Next') | {{ config('app.name') }} </title>

<!-- Favicon -->
<link rel="icon" href="https://fav.farm/👽" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
