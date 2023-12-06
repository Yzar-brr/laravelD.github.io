<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/basic.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="js/form.js">
    <title>Document</title>
</head>

<body>
    @php
        $count = $images->count()
    @endphp

    <script>
            var selected = document.querySelectorAll(".selected".{{$count}})
            var principaleSelect = document.querySelector(".principaleSelect")
                for (let i = 0; i < $count; i++) {
                    principaleSelect.addEventListener("click", (event) => {
                        if(principaleSelect.checked='checked'){
                        selected.checked='checked';
                        }else{
                    
                        }
                    });
                    }

    </script>
    <div class="container justify-content-center align-items-center" style="height: 100vh; width: 50vh;">
        <div class="shadow p-3 mb-5 bg-white">
            {{-- <form action="" method="post">
                <div>
                    <td>
                        <span>Identifiant</span>
                        <input type="email" class="emailCl" name="emailName" id="emailId" value="{{$u}}" onclick="value=''">
                    </td>
                </div>
                <div>
                    <td>
                        <span>Mot de passe</span>
                        <input type="password" class="passwordCl" name="PasswordName" id="PasswordId" value="***" onclick="value=''">
                    </td>
                <div>
                <input type="submit" value="Se connecter">
            </form> --}}

            <form method="post">
                <input type="checkbox" class="principaleSelect">
                @foreach ($images as $images)
                    <div class="shadow p-3 mb-5" style="display: inline-block">
                        <input type="checkbox" class="selected{{$images->numero_lot}}">
                        <span>{{ $images->name }}</span>
                    </div>
                @endforeach
            </form>
            <button>gfdgd</button>

            
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="js/form.js"></script>
</body>

</html>
