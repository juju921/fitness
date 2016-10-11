<!DOCTYPE html>
<html>
<html lang="en" ng-app="fitness">
<title>Ummaspot</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style/vendor.css">
<link rel="stylesheet" href="style/custom.css">
</head>
@foreach($salles as $salle)
    <ul>
        <li>{{$salle->nom}}</li>
        <li>{{$salle->email}}</li>
        <li>{{$salle->adresse}}</li>
        <li>{{$salle->nom}}</li>
    </ul>
@endforeach


