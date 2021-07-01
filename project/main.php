<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <title>Home Page</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <style>
       html body #map-canvas {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>


</head>
<body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
  
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.5/angular-route.js"> </script>
        <script src="app.js"></script>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAau3t4B3PHGPeYvJ7t1v597XVKzmlvWFU&sensor=SET_TO_TRUE_OR_FALSE">
    </script>

    <div class="row">
        <div class="col-sm-1">
            <img src="bookk.jpg" class="img-rounded" alt="Cinque Terre" width="100" height="70">
        </div>
        <div class="col-sm-9">
            <h2> My Memories Journal</h2>
        </div>
        <!--if you want to put chating room and trip suggestins in the top of the page
        <div class="col-sm-1">
            <button type="button" class="btn btn-default">Chatting room</button>
        </div>
        <div class="col-sm-5">
            <button type="button" class="btn btn-primary">Trip suggestions</button>
        </div>
            -->
         <a href="file:///C:/xampp/htdocs/project/images2/deals.html"><button onclick="window.open('deals.html')" type="button" class="btn btn-info" >
            <span class=""></span> Guide
        </button></a>
        <a href="http://localhost/project/main1.html"><button type="button" class="btn btn-info" >
            <span class=""></span> Paint Page
        </button></a>
        <a href="http://localhost/upload.php" class="btn btn-info" style="background-color:green">
            <span class=""></span> Photos Page
        </a>
    </div>

    <div class="row">

        <div class="col-sm-3" style="background-color:lavender;">

            <div class="container">
                <img src="avatar0.jpg" class="img-circle" alt="Cinque Terre" width="200" height="200">
                <h2><?php echo $_SESSION['username']?> </h2>
                <div class="panel-group col-sm-3" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Your Profile</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">

                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="90"
                                      aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    90% Progress
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search friend">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">New Yourney</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Here u can upload new pictures
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Rumors</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <a href="#">News <span class="badge">5</span></a><br>
                                <a href="#">Comments <span class="badge">10</span></a><br>
                                <a href="#">Friend Updates <span class="badge">2</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col"><a href="http://localhost/chat2/index.php">
                            <button type="button" class="btn btn-default" style="width:250px; background-color:salmon">Chatting Page</button></a>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary" onclick="window.open('memories.html')" style="width:250px; background-color:teal">My Memories</button>
                        </div>
                        

                    </div>
                </div>
            </div>


        </div>
        <!-- put the chating and print and search buttons right up the map
        <div class="col-sm-9" style="background-color:lavenderblush;">
            <div class="col-sm-9" style="background-color:lavenderblush;">

                <button type="button" class="btn btn-default">Do some chatting</button>
                <button type="button" class="btn btn-primary">Trip suggestions</button>
            </div>
            <div style="background-color:lavenderblush;">
                <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
                <button type="button" class="btn btn-info">
                    <span class="glyphicon glyphicon-search"></span> Search
                </button>
                <a href="#" class="btn btn-info" style="background-color:green">
                    <span class="glyphicon glyphicon-print"></span> Print
                </a>
            </div>

            -->
        <!-- the map parttttttttttttttttt-->
        <div style="height:550px; width:100%;">
            <my-maps id="map-canvas">

            </my-maps>


        </div>



    </div>
                       <?php  if (isset($_SESSION['username'])) : ?>
            
            <p> <a href="main.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>

</body>
</html>