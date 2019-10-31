<?php
    $url_host = $_SERVER['HTTP_HOST'];


    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
?>

<div class="type-1287">
    <header>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/2.jpg" alt="" />
                    </a>
                    <div class="content-slide-show">
                        <div class="column">
                            <div class="left-column">
                                <h2>Mobile Ready</h2>
                                <p>Synonyms for thematic at Thesaurus.com with
                                    free online thesaurus, antonyms, and definitions.
                                    Dictionary and Word of the Day. ... Thematic elaboration is only</p>
                                <div class="btn btn1">
                                    BUY IT
                                </div>
                                <div class="btn btn2">
                                    GET FREE
                                </div>
                            </div>
                            <div class="right-column">
                                <img class="right" src="./images/dienthoai.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <a href="#">
                        <img src="images/4.jpg" alt="" />
                    </a>
                    <div class="content-slide-show">
                        <div class="column">
                            <div class="left-column">
                                <h2>Mobile Ready</h2>
                                <p>Synonyms for thematic at Thesaurus.com with
                                    free online thesaurus, antonyms, and definitions.
                                    Dictionary and Word of the Day. ... Thematic elaboration is only</p>
                                <div class="btn btn1">
                                    BUY IT
                                </div>
                                <div class="btn btn2">
                                    GET FREE
                                </div>
                            </div>
                            <div class="right-column">
                                <img class="right" src="./images/dienthoai.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </header>
</div>