<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?> 

<div class="type-1276">
    <div class="container">
        <div class="partner">
            <ul>
                <li><img src="<?php echo $url_path ?>/images/partner-1.jpg" alt=""/></li>
                <li><img src="<?php echo $url_path ?>/images/partner-2.jpg" alt=""/></li>
                <li><img src="<?php echo $url_path ?>/images/partner-3.jpg" alt=""/></li>
                <li><img src="<?php echo $url_path ?>/images/partner-4.jpg" alt=""/></li>
                <li><img src="<?php echo $url_path ?>/images/partner-5.jpg" alt=""/></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="info-man">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="thumb-man">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="img-man">
                                    <img src="<?php echo $url_path ?>/images/man.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="text-man">
                                    <p>Lorem Ipsum has been the industry's standard dummy text 
                                        ever since the 1500s, when an unknown printer took a gallery</p>
                                        <span class="name">David willer</span> Graphic designer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="thumb-man">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="img-man">
                                        <img src="<?php echo $url_path ?>/images/woman.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="text-man">
                                        <p>Lorem Ipsum has been the industry's standard dummy text 
                                            ever since the 1500s, when an unknown printer took a gallery</p>
                                            <span class="name">David Miller</span> Graphic designer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>