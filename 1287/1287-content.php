<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?> 
<div class="type-1287">             


    <div class="type-3">
        <div class="line"></div>
        <div class="container">
            <div class="row">                        
                <div class="col-md-6 col-sm-6 col-xs-12 abc">
                    <h2>Mobile Ready</h2>
                    <p>Synonyms for thematic at Thesaurus.com with 
                        free online thesaurus, antonyms, and definitions.
                        Dictionary and Word of the Day. ... Thematic elaboration is only</p>
                        <div class="nut">
                            <div class="btn btn1">
                                BUY IT
                            </div>
                            <div class="btn btn2">
                                GET FREE
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 abc">
                        <img src="<?php echo $url_path ?>/images/dienthoai.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>

    </div>         
