<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1290">
    <div class="container">
        <div class="row user-menu-container square">
            <div class="col-md-7 user-details">
                <div class="row coralbg white">
                    <div class="col-md-6 no-pad">
                        <div class="user-pad">
                            <h3>Welcome back, Jessica</h3>
                            <h4 class="white"><i class="fa fa-check-circle-o"></i> San Antonio, TX</h4>
                            <h4 class="white"><i class="fa fa-twitter"></i> CoolesOCool</h4>
                            <button type="button" class="btn btn-labeled btn-info">
                                <span class="btn-label"><i class="fa fa-pencil"></i></span>Update</button>
                        </div>
                    </div>
                    <div class="col-md-6 no-pad">
                        <div class="user-image">
                            <img src="https://farm7.staticflickr.com/6163/6195546981_200e87ddaf_b.jpg"
                                class="img-responsive thumbnail" alt="Hinh1">
                        </div>
                    </div>
                </div>
                <div class="row overview">
                    <div class="col-md-4 user-pad text-center">
                        <h3>FOLLOWERS</h3>
                        <h4>2,784</h4>
                    </div>
                    <div class="col-md-4 user-pad text-center">
                        <h3>FOLLOWING</h3>
                        <h4>456</h4>
                    </div>
                    <div class="col-md-4 user-pad text-center">
                        <h3>APPRECIATIONS</h3>
                        <h4>4,901</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-1 user-menu-btns">
                <div class="btn-group-vertical square" id="responsive">
                    <a href="#" class="btn btn-block btn-default active">
                        <i class="fa fa-bell-o fa-3x"></i>
                    </a>
                    <a href="#" class="btn btn-default">
                        <i class="fa fa-envelope-o fa-3x"></i>
                    </a>
                    <a href="#" class="btn btn-default">
                        <i class="fa fa-laptop fa-3x"></i>
                    </a>
                    <a href="#" class="btn btn-default">
                        <i class="fa fa-cloud-upload fa-3x"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 user-menu user-pad">
                <div class="user-menu-content active">
                    <h3>
                        Recent Interactions
                    </h3>
                    <ul class="user-menu-list">
                        <li>
                            <h4><i class="fa fa-user coral"></i> Roselynn Smith followed you.</h4>
                        </li>
                        <li>
                            <h4><i class="fa fa-heart-o coral"></i> Jonathan Hawkins followed you.</h4>
                        </li>
                        <li>
                            <h4><i class="fa fa-paper-plane-o coral"></i> Gracie Jenkins followed you.</h4>
                        </li>
                        <li>
                            <button type="button" class="btn btn-labeled btn-success">
                                <span class="btn-label"><i class="fa fa-bell-o"></i></span>View all activity</button>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>