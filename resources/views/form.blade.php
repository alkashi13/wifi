<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #667eea;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(102, 126, 234, 0.5), rgba(118, 75, 162, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(102, 126, 234, 0.5), rgba(118, 75, 162, 0.5))
            }
    </style>
    <!--CSS-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!--JS--> 
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>
<body class="gradient-custom">
    <div class="card container " style="width: 25rem; height: 20rem; margin-top: 10%; border-radius: 10px">
        <form class="card-body text-center" method="get" action="https://paygateglobal.com/v1/page">
            <h4 class="mb-3">Wifi Zone</h4>
            <p class="card-text text-info">
                Profitez d'une connexion internet haut débit à des frais abordables.
            </p>
            
            <div class="form-outline" style="margin-top: 10%">
                <input type="text" name="token" value="22ac309e-bd06-466d-a46b-caf580cdcbe8" hidden>
                    <select name="amount" class="browser-default custom-select">
                        <option value="100">1h/200Fr</option>
                        <option value="300">2h/300Fr</option>
                        <option value="500">3h/500Fr</option>
                        <option value="1000">10h/1000Fr</option>
                    </select>
                <input type="text" name="description" value="wifiPayement" hidden/>
                <input type="text" name="identifier" value="<?php echo $identifier=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'),1,7);?>" hidden/>
                
            </div>
            <div class="form-outline" style="margin-top: 5%">
                <button type="submit" class="btn btn-primary pulse">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>