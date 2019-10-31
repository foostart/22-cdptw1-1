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
                <ul class="nav nav-tabs">
                    <li class="item bell active"><a class="fa fa-bell-o fa-3x" data-toggle="tab" href="#home"
                            alt="Notification"></a></li>
                    <li class="item envelope"><a class="fa fa-envelope-o fa-3x" data-toggle="tab" href="#menu1"></a></li>
                    <li class="item laptop"><a class="fa fa-laptop fa-3x" data-toggle="tab" href="#menu2"></a></li>
                    <li class="item cloud"><a class="fa fa-cloud-upload fa-3x" data-toggle="tab" href="#menu3"></a></li>
                </ul>
            </div>
            <div class="col-md-4 user-menu user-pad">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
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
                                    <span class="btn-label"><i class="fa fa-bell-o"></i></span>View all
                                    activity</button>
                            </li>
                        </ul>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Messenger</h3>
                        <ul>
                            <li itemprop="reviews" class="comment">
                                <img alt="July" src="./images/avt.jpeg" class="photo" height="40" width="40" alt="avt">
                                <div class="comment-text">
                                    <p class="content">
                                        <strong itemprop="users">July</strong><time>22:19</time>
                                    </p>
                                    <div itemprop="description" class="description">
                                        <p>Amazing Jeans. They go with love.</p>
                                    </div>
                                </div>
                            </li>
                            <li itemprop="reviews" class="comment tex">
                                <img alt="JennyC" src="./images/avt.jpeg" class="photo" height="40" width="40">
                                <div class="comment-text">
                                    <p class="content">
                                        <strong itemprop="users">JennyC</strong><time>22:19</time>  
                                    </p>
                                    <div itemprop="description" class="description">
                                        <p>Amazing Jeans. They go with love.</p>
                                    </div>
                                </div>
                            </li>
                            <li itemprop="reviews" class="comment">
                                <img alt="Linda" src="./images/avt.jpeg" class="photo" height="40" width="40">
                                <div class="comment-text">
                                    <p class="content">
                                        <strong itemprop="users">Linda</strong><time>22:19</time>
                                    </p>
                                    <div itemprop="description" class="description">
                                        <p>Amazing Jeans. They go with love</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>