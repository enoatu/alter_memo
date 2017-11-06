<?php
require_once "custom.php";
include "read.php";
?>
<html lang="ja">
<meta charset="utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<head> <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
//        var memoarray = <?php //echo json_safe_encode($memoarray) ?>//;
//        console.log(memoarray); // Object { hoge: "fuga" }

var flag=0;
        $(function(){

            $("#memoarea").change(function(){
                flag=1;
            });

            $('#save').click(
                function(){
                   if(flag!==0){
                    var memodata= $("#memoarea").val();
                    $.ajax({
                        type: 'post',
                        url: 'save.php',
                        data: {
                            //渡すデータ
                            'save': memodata
                        },
                        success: function(data){
                            $("#memoarea").html(data);
//                            alert(memodata+"って保存しました");
                            toastr.options.timeOut = 1500; // 3秒
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": false,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "3000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                            Command: toastr["info"]("", "保存しました");
                            $('#linkButton').click(function() {
                                toastr.success('click');
                            });
                        }
                    });
                }}
            );
        });
    </script>
    <style>#memoarea{
            width: 100%;
        height: 60%;}</style>
</head>
<body style="background-color:<?php echo $background_color; ?>;">
<div align="center" style=" margin : 0 auto; padding :5% ">
    <h1 style="font-family: 'ＭＳ 明朝';color:<?php echo $textcolor;?>">～ <?php echo $title;?> ～</h1>
    <p>前回の更新：<?php echo $in_created_at; ?></p>
    <input type="button" id="save" value="save"><br>
    <textarea id="memoarea" name="memoarea" placeholder="かくんだ！" autofocus><?php echo $in_text; ?></textarea>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>