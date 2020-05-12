<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<style> 
    .video{
        width: 100%;
        max-width: 500px;
        max-height: 500px;
    }

    .espaco-abaixo{
        margin-bottom: 50px;
    }

    .rodape{
        margin: 0;
    }

    .cor-fundo{
        background-color: #D3D3D3 !important;
    }

    .logo{
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        max-width: 100px;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light cor-fundo">
        <img src="img/unisa.png" class="logo">
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        </div>
    </nav>

    <div class="container">
        <div class="col-sm-12">
            <br><br>
                <h3 class="text-center"> Lista de filmes para aula</h3>
            <br>
        </div>

        <div class="row">
            
            <div class="col-sm-6 espaco-abaixo">
                <h4> Divertidamente</h4>
                <video class="video"  poster="img/thumb/divertidamente.png" controls>
                    <source src="video/Divertida-novo.mp4" type="video/mp4">
                    <source src="video/Divertida-novo.ogg" type="video/ogg">
                </video>
            </div>

            <div class="col-sm-6 espaco-abaixo">
                <h4> Crack repensar</h4>
                <video class="video"  poster="img/thumb/crack.jfif" controls>
                    <source src="video/Crack, repensar.mp4" type="video/mp4">
                    <source src="video/Crack, repensar.ogg" type="video/ogg">
                </video>
            </div>

            <div class="col-sm-6 espaco-abaixo">
                <h4> A Garota Dinamarquesa</h4>
                <video class="video"  poster="img/thumb/A Garota Dinamarquesa.jpg" controls>
                    <source src="video/A Garota Dinamarquesa.mp4" type="video/mp4">
                    <source src="video/A Garota Dinamarquesa.ogg" type="video/ogg">
                </video>
            </div>
            
        </div>
    </div>
    

    <footer class="col-sm-12 rodape">
        <hr class="my-4">
        <p class="text-center"> Copyright © <?php echo date('Y'); ?> Isaias - Todos os direitos reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>