<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه آنلاین الماس</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/frontend.css">
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="loader"></div>
</div>

<!-- Back to Top Button -->
<div class="go-top">
    <i class="bi bi-arrow-up"></i>
</div>

@include("frontend.header")

@include("frontend.hero")

@include("frontend.feature")

@include("frontend.categories")

@include("frontend.product")

@include("frontend.baner")

@include("frontend.newsletter")

@include("frontend.footer")

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/frontend.js"></script>

</body>
</html>
