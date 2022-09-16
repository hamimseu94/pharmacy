<?php
$title ="Dashboard";
require_once 'Dahsboar_header.php';

require_once 'Login_auth.php';




?> 




                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4"> Hi!, 
                                        <?=$_SESSION ['user_name'] ?>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

               <?php 
               require_once 'Dahsboar_footer.php';
               ?>