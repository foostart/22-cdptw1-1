<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1289.less', 'css/1289.css');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>1289</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/1289.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $url_path ?>/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $url_path ?>/js/1289.js"></script>
</head>

<body>
    <?php include $dir_block . '/1289-content.php'; ?>
    <script type="text/javascript">
    $("button").click(function() {
        $("li").css('display', 'block');
    });
    $(document).ready(function() {
        //khai báo biến submit form lấy đối tượng nút submit
        var submit = $("button[type='submit']");

        //khi nút submit được click
        submit.click(function() {
            //khai báo các biến dữ liệu gửi lên server
            var user = $("input[name='user']").val(); //lấy giá trị trong input user

            //Kiểm tra xem trường đã được nhập hay chưa
            if (user == '') {
                alert('Vui lòng nhập Tên người dùng');
                return false;
            }

            //Lấy toàn bộ dữ liệu trong Form
            var datas = $('form#form_input').serialize();

            //Sử dụng phương thức Ajax.
            $.ajax({
                type: "POST", //Sử dụng kiểu gửi dữ liệu POST
                url: "./1289-data.php", //gửi dữ liệu sang trang data.php
                data: datas, //dữ liệu sẽ được gửi
                success: function(data) // Hàm thực thi khi nhận dữ liệu được từ server
                {
                    if (data == 'false') {
                        alert('Không có người dùng');
                    } else {
                        $('#content').html(data);
                        //dữ liệu HTML trả về sẽ được chèn vào trong thẻ có id content
                    }
                }
            });
            return false;
        });
    });
    </script>

</body>

</html>