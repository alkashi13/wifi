<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
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
    <div class="card container " style="width: 30rem; height: 25rem; margin-top: 10%; border-radius: 10px">
        <form class="card-body text-center" action="#" method="POST" id="formT">
            {!! csrf_field() !!}
            <h4 class="mb-3">Wifi Zone</h4>
            <p class="card-text text-info">
                Profitez d'une connexion internet haut débit à des frais abordables.
            </p>
            @csrf
            <div class="form-outline" style="margin-top: 10%">
                <input type="text" id="numbers" class="form-control" name="numbers" placeholder="Entrez votre numero de téléphone"/>
            </div>
            <div class="form-outline" style="margin-top: 10%">
                <select id="form2" class="form-control">
                    <option value="1">1h/200Frs</option>
                    <option value="2">2h/300Frs</option>
                    <option value="3">3h/500Frs</option>
                    <option value="3">10h/1000Frs</option>
                </select>
            </div>
            <div class="form-outline" style="margin-top: 5%">
                <button type="button" type="submit" class="btn btn-primary pulse">Envoyer</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $(document).on('formT', '#reg-form', function(e) {
            var data = $("#reg-form").serialize();
            e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '{{url("/")}}',
                    data: data,
                    success: function(data) {
                     alert("success");
                     console.log(data);
     
                    },
                    error: function(data) {
                        alert("error");
                    }
                });
                return false;
            });
        });
    </script>
</body>
</html>