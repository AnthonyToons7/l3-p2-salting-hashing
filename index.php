<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB SALTING</title>
    <style>
        .popUp{
            display: none;
            color: white;
            background-color: red;
            padding: 10px;
            margin: 10px;
        }
        .error {display: block;}
        .hide {display: none;}
    </style>
</head>
<body>
    <h1>Create</h1>
    <form action="registreer_database.php" method="POST">
        <input type="text" name="username" id="" placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" name="repeatPass" id="rePassword" placeholder="Repeat password">
        <button class="hide">regrtisterr</button>
    </form>
    <div class="popUp">Wachtwoorden komen niet overeen</div>
    <a href="login.php">Login</a>
    <script>
        const passEl = document.getElementById("password");
        const rePassEl = document.getElementById("rePassword");
        passEl.addEventListener("input", ()=>checkPass());
        rePassEl.addEventListener("input", ()=>checkPass());
        function checkPass(){
            if(passEl.value == rePassEl.value){
                document.querySelector(".popUp").classList.remove("error");
                document.querySelector("button").classList.remove("hide"); 
            }else{
                document.querySelector(".popUp").classList.add("error");
                document.querySelector("button").classList.add("hide"); 
            }
        }
    </script>
</body>
</html>