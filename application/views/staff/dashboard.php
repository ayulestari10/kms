<!-- MAIN -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dashboard Admin</h3>
                            <!--<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>-->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="<?= base_url('staff/data-staff') ?>">
                                        <div class="metric">
                                            <span class="icon"><i class="lnr lnr-chart-bars"></i></span>
                                            <p>
                                                <span class="number"><?= count($staff) ?></span>
                                                <span class="title">Data Staff</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= base_url('staff/data-tacit') ?>">
                                        <div class="metric">
                                            <span class="icon"><i class="lnr lnr-book"></i></span>
                                            <p>
                                                <span class="number"><?= count($tacit) ?></span>
                                                <span class="title">Data Tacit Knowledge</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= base_url('staff/data-explicit') ?>">
                                        <div class="metric">
                                            <span class="icon"><i class="lnr lnr-pencil"></i></span>
                                            <p>
                                                <span class="number"><?= count($explicit) ?></span>
                                                <span class="title">Data Explicit Knowledge</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OVERVIEW -->
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
        <!-- END MAIN -->