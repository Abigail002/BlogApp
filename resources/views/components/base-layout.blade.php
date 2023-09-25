<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Blogggg!</title>

    <!-- SEO meta tags -->
    <meta name="description"
        content="Author: Marvel Theme, AI content writing and copywriting html5 and Bootstrap 5 landing page template" />

    <!-- Favicon -->
    <link rel="icon" href="blog.jpg" type="image/svg+xml" />

    <!-- CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div name="content">
        {{ $slot }}
    </div>
</body>

</html>
