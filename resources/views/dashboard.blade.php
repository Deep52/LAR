<x-app-layout>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            @livewire('navigation-menu')
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i> &nbsp;HOTLE</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">  </a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

        </div>
    </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center user-image-back">
                            <img src="assets/img/find_user.png" class="img-responsive" />

                        </96li>


                        <li>
                            <a href="index.html"><i class="fa fa-desktop "></i>Dashboard</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-table "></i>Table Examples</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit "></i>Forms </a>
                        </li>



                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                         <h2></h2>

                        <div class="col-md-6">
                        <h5></h5>
                        <div class="table-responsive">
                            <form action="" method="head">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tbody>
                                        <tr class="success">

                                            <td>Room Number </td>
                                            <td><input type="text" name="r_n"></td>

                                        </tr>
                                        <tr class="success">

                                            <td>Room Type </td>
                                            <td><input type="text" name="r_t"></td>

                                        </tr>
                                        <tr class="success">

                                            <td>Room Categories </td>
                                            <td><input type="text" name="r_c"></td>

                                        </tr>
                                        <tr class="success">

                                            <td> </td>
                                            <td><input type="submit" name="sb" value="Submit"></td>

                                        </tr>
                                </thead>
                            </table>
                        </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Room Number</th>
                                        <th>Type</th>
                                        <th>Categories</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr class="info">
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jsmith</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                        </div>
                    </div>
                     <!-- /. ROW  -->
                      <hr />

                     <!-- /. ROW  -->
        </div>
                 <!-- /. PAGE INNER  -->
                </div>
             <!-- /. PAGE WRAPPER  -->
            </div>
         <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="js/jquery-1.10.2.js"></script>
          <!-- BOOTSTRAP SCRIPTS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="js/jquery.metisMenu.js"></script>
          <!-- CUSTOM SCRIPTS -->
        <script src="js/custom.js"></script>



</x-app-layout>
