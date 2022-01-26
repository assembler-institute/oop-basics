<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./assets/css/style.css" rel="stylesheet">
    <title>PokeClub</title>
</head>
<body>
    <section>
        <h1>You are on Pokemon page</h1>
        <div class="row">
            <div class="col"><img scr="../assets/img/picachu.jpg" alt="pikachu"></div>
            <div class="col">.col-6 .col-sm-4</div>

            <!-- Force next columns to break to new line at md breakpoint and up -->
            <div class="w-100 d-none d-md-block"></div>

            <div class="col">.col-6 .col-sm-4</div>
            <div class="col">.col-6 .col-sm-4</div>
        </div>
    </section>
    <footer>
        <nav class="navBar row align-items-center">
            <ul class="nav justify-content-center col">
                <img src="./assets/img/icon.png" alt="Pokemon_Club" class="logo col-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=club&action=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Trainers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pokemons</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>
</html>