<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app='todoApp'>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>        

        
    </head>
    <body style="background-color: silver" ng-controller="controller">

        <div id="corpo" style="margin: 30px;">
            <div id="logo" style="margin-left: 30px; height: ">

                <img src="images/logo_gameadptor.png" style="height: 150px;"/>

            </div>
            <?php
            // put your code here
            ?>
            <ul class="collection" >
                <li class="collection-item avatar" ng-repeat='game in games'>
                    <!-- <img ng-src="game.game.img" alt="" class="circle"> -->
                    <span class="title" ng-bind='game.game.name'></span>
                    <p ng-bind='game.game.desenv'><br></p>
                    <a ng-click='parsePage(game)' class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
            </ul>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-resource.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js"></script>
        <script>
            angular.module('todoApp', [])
                .controller('controller', function($scope, $http){  

                    $http.get('http://localhost/rbc/games').success(function(data){
                        $scope.games = data;
                    }).error(function(e){
                        alert('error');
                    });

                    $scope.parsePage = function(elem){
                        console.log(elem);
                        window.location.href = "http://localhost/GameAdaptor/resultado.php?game=" + elem.game.idPlacaRecomedada
                    }
                });
        </script>
    </body>
</html>
