      <?php
      $url_host = 'http://'.$_SERVER['HTTP_HOST'];
      $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
      $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

      preg_match_all($pattern_uri, __DIR__, $matches);
      $url_path = $url_host . $matches[1][0];
      $url_path = str_replace('\\', '/', $url_path);
      ?>
      <div class="container">
        <div class="row">
          <div class="type-1289">
            <div class="col-sm-3 col-sm-offset-4 frame">
              <ul></ul>
              <div>
                <div class="msj-rta macro">                        
                  <div class="text text-r" style="background:whitesmoke !important">
                    <input class="mytext" placeholder="Type a message"/>
                  </div> 

                </div>
                <div style="padding:10px;">
                  <span class="glyphicon glyphicon-share-alt"></span>
                </div>                
              </div>
            </div>       
          </div>
        </div>
      </div>
      