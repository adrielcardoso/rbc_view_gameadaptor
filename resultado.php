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
    <body ng-controller='controller'>
        <div id="corpo" style="margin: 30px;">
            <div id="logo" style="margin-left: 30px; height: ">

                <img src="images/logo_gameadptor.png" style="height: 150px;"/>

            </div>
        <div class="row">
            <div class="col s12 m7">
                <div class="card">
                        <h1 ng-bind='games.name'></h1>
                </div>

                <div class="card" style="background: #696969; margin-bottom: 50px;">
                    <ul class="collection">
                      <li class="collection-item active" style='font-size:20px;' >
                          {{placa.placa[0]}} -
                          {{placa.placa[1]}} -
                          {{placa.placa[2]}} - 
                          {{placa.placa[3]}} - 
                          {{placa.placa[4]}} -
                          {{placa.placa[5]}} - 
                          {{placa.placa[6]}}
                      </li>
                    </ul>
                </div>

                <div class="card" ng-repeat='single in rbc'>
                    <ul class="collection">
                      <li class="collection-item" style='font-size:15px;' >
                          {{single.placa[0]}} -
                          {{single.placa[1]}} -
                          {{single.placa[2]}} - 
                          {{single.placa[3]}} - 
                          {{single.placa[4]}} -
                          {{single.placa[5]}} - 
                          {{single.placa[6]}}

                          -

                          {{single.index}}%
                      </li>
                    </ul>
                </div>
            </div>
            </div>

             <a href="http://localhost/GameAdaptor/#!" class="waves-effect waves-light btn-large" style="margin-right: 0px; margin-left: 90%;">Voltar</a>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-resource.min.js">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-route.min.js"></script>
        <script>
            angular.module('todoApp', [])
                .controller('controller', function($scope, $http){  

                    $http.get('http://localhost/rbc/game/<?php echo $_REQUEST['game']?>').success(function(data){
                        $scope.games = data.game;
                        $scope.rbc = data.rbc;
                        console.log(data);
                        $scope.placa = data;
                        console.log($scope.rbc);
                    }).error(function(e){
                        alert('error');
                    });
                });
        </script>
    </body>
</html>
