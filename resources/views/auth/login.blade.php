<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Admin Pannel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex bg-neutral-200 justify-center items-center h-screen">
        <div class="bg-blue-500 text-white w-[95%] sm:w-3/4 md:w-1/2 lg:w-1/4 rounded-lg p-3 ">
            <h4 class="text-xl text-center mb-8 mt-3">Login</h4>
            <form id="form" class="space-y-4" action="">
                <div>
                    <input name="email" type="mail" placeholder="E-mail" class="w-full px-3 text-white py-1 bg-transparent rounded-md border focus:outline-none " type="text">
                </div>
                <div>
                    <input name="password" type="password" placeholder="Password" class="w-full px-3 text-white py-1 bg-transparent rounded-md border focus:outline-none " type="text">
                </div>
                <div>
                    <button class="w-full py-2 bg-blue-700 rounded-md text-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- <script>
   $("#form").on("submit", function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    
    // Fetch CSRF token from meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url: "../ajax?action=login",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': csrfToken // Add CSRF token to headers
        },
        success: function(res) {
            console.log(true);
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
    });
    
    $("#form")[0].reset();
});
 --}}

{{-- </script> --}}
</html>
