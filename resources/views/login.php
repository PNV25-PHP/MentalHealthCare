<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Beau+Rivage&family=Poppins&display=swap');
    </style>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


    <title>Login - page</title>

</head>

<body>
    <div class="pl-20 font-Poppins h-full">
        <a href=""><span class="material-symbols-outlined">arrow_back</span></a>
        <div class=" grid-cols-1 flex h-full">
            <div class="block_contain-lefl w-1/2 mr-30 ml-5 mb-20">
                <h3 class="title text-center text-5xl text-blue-900 animate-fadeIn font-bold leading-tight">
                    Mental Health Care
                </h3>
                <p class="text-center">Vui lòng nhập mật khẩu và email để tiếp tục</p>
                <form action="" method="post" id="form">
                    <div id="inputEmail"></div>
                    <div id="inputPassword"></div>
                    <div id="button"></div>
                    <a href="send_email.php" class="mb-2 italic text-blue-900 flex justify-center items-center" style="width:500px">Quên mật khẩu?</a>
                </form>

            </div>

            <div class="block_contain ml-10 bg-gray-300 ">
                <p class="text-5xl mt-5 text-center" style="font-family: Beau Rivage; ">"Vươn tới sức khỏe tâm thần với sự tiện lợi trực tuyến!"</p>
                <img class="mt-5" src="https://image.baophapluat.vn/1200x630/Uploaded/2023/athlraqhpghat/2022_10_11/minh-hoa-1617.jpg" alt="bac si">
            </div>
        </div>
    </div>
</body>

<script src="Components/Button.js"></script>
<script src="Components/Input.js"></script>

<script>
    Button
        .new()
        .setOnClick(() => {
            console.log("abc")
        })
        .setCustomClass("mt-10 mb-3 px-1 py-1 text-white flex justify-center items-center")
        .setLabel("Tiếp tục")
        .appendTo("button")

    Input
        .new()
        .setID("email")
        .setName("email")
        .setType("email")
        .setPlaceholder("Email của bạn")
        .setCustomClass("mt-5 block mb-4 w-full")
        // set label
        .setContent("Email")
        .setForlabel("email")
        // appendTo
        .appendTo("inputEmail")

    Input
        .new()
        .setID("password")
        .setName("password")
        .setType("password")
        .setPlaceholder("Nhập mật khẩu của bạn")
        .setCustomClass("mt-5 block mb-4 w-full")
        // set label
        .setContent("Password")
        .setForlabel("password")
        // appendTo
        .appendTo("inputPassword")
</script>

</html>