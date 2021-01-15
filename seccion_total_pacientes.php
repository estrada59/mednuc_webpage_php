        <?php 
            include_once 'include/mysql.php';
            
            $mysql = new mysql();
            $link = $mysql->connect(); 

            $sql = $mysql->query($link, " SELECT s_total_pacientes() as total");
            
            $row = $mysql->f_obj($sql);

            // echo $row->total;
            
            $mysql->close();
            
            // echo $row->total;
        ?>
        <section class="full-section dark-section parallax" id="section-1" data-stellar-background-ratio="0.3">

            <div class="full-section-overlay-color"></div>

            <div class="full-section-container">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-prisoner"></i>
                                <div class="counter-value" data-value="<?php echo $row->total;?>"></div>
                                <div class="counter-details">Pacientes atendidos</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-judge"></i>
                                <div class="counter-value" data-value="1"></div>
                                <div class="counter-details">Doctor</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                        <div class="col-md-4 col-sm-4">

                            <div class="counter">

                                <i class="smartmed-icon-typewriter"></i>
                                <div class="counter-value" data-value="80" data-symbol-before="+" data-symbol-after=""></div>
                                <div class="counter-details">Servicios</div>

                            </div><!-- counter -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- full-section-container -->
        </section><!-- full-section -->