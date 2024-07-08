<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Admin Pannel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex justify-between bg-blue-500 p-3 text-white">
        <div class="text-[25px] font-semibold">
            <h2>Logo</h2>
        </div>
        <div class="flex items-center justify-center">
            <div class=" bg-red-500 rounded-full">
                <i class="fa-regular p-3  fa-user"></i>
            </div>
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(".gallery").click(function() {
        var abc = $(this).next()
        $(".gallery2").not(abc).hide(300);
        abc.toggle(300);

    })
</script>

</html>
