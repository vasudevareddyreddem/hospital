<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Upload Logos</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li>
                        <i class="fa fa-home"></i>&nbsp;
                        <a class="parent-item" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Logos</li>
                </ol>
            </div>
        </div>

        <div class="panel tab-border card-topline-green">
            <header class="panel-heading panel-heading-gray custom-tab ">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="#add" data-toggle="tab" class="active">Add Logos</a>
                    </li>
                    <li class="nav-item"><a href="#list" data-toggle="tab">Logos List</a>
                    </li>
                </ul>
            </header>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="add">
                        <div class="container">

                            <form action="" method="post" id="add_logos" name="add_logos">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Select logos</label>
                                        <input type="file" class="form-control" id="" name="" value="" multiple>
                                        <br>
                                        <button type="submit" class="btn btn-sm btn-success pull-right" type="button">Upload</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="tab-pane" id="list">
                        <div class="container">
                            <div class="row">
                                <div class="card-body col-md-12 table-responsive">
                                    <table id="example4" class="table table-striped table-bordered table-hover" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Card Numbers Count</th>
                                                <th>Created date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="" alt="image1"/>
                                                </td>
                                                <td>
                                                    12/4/2018
                                                </td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
															    <a href="#"><i class="fa fa-trash-o"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-save"></i> View</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="" alt="image1"/>
                                                </td>
                                                <td>
                                                    12/4/2018
                                                </td>
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
															    <a href="#"><i class="fa fa-trash-o"></i>Delete</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-save"></i> View</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">&nbsp;</div>

        </div>
    </div>
</div>