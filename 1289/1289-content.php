      <?php
      $url_host = 'http://'.$_SERVER['HTTP_HOST'];
      $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
      $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

      preg_match_all($pattern_uri, __DIR__, $matches);
      $url_path = $url_host . $matches[1][0];
      $url_path = str_replace('\\', '/', $url_path);
      ?>
      <div class="type-1289">
          <div class="container">
              <div class="row">
                  <div class="col-sm-3 col-sm-offset-4 frame">
                      <ul>
                      <li id="box-chat" style="display:none;position: relative;top: 58%;">
                        <div class="msj macro">
                        <div class="avatar"><img class="img-circle" style="width:100%;" src="./images/photo.jpg" /></div>
                            <div class="text text-l">
                            <p id="content"></p>
                                <p><small>12:55</small></p>
                            </div>
                        </div>
                    </li>
                      </ul>
                      <div>
                          <div class="text text-r" style="background:whitesmoke !important">
                              <form class="form-horizontal" id="form_input">
                                  <input class="mytext" placeholder="Type a message" type="text" name="user">
                                  <button class="send" type="submit">Gửi</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>