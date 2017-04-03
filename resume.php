<?php
    include "header.php";
    $final_msg='You can upload your resume';
    $error=1;

    $servername = "166.62.8.11";
    $username = "careerguidance";
    $password = "Admin@123";
    $dbname= "careerguidance";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_check=$_SESSION['user_id'];
    $check_user_sql = "SELECT name FROM users WHERE user_id = ".$user_check;
    $check_user_sql_query=$conn->query($check_user_sql);
    echo $check_user_sql_query->num_rows;

    if ($check_user_sql_query->num_rows == 0) {
        $URL="./feedback.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        foreach($_FILES["file-7"]["tmp_name"] as $key=>$tmp_name){
            $fileName = $_FILES['file-7']['name'][$key];
            $tmpName  = $_FILES['file-7']['tmp_name'][$key];
            $fileSize = $_FILES['file-7']['size'][$key];
            $fileType = $_FILES['file-7']['type'][$key];

            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);

            if(!get_magic_quotes_gpc()) {
                $fileName = addslashes($fileName);
            }
        }

        $sql="UPDATE users SET resume = '".$content."' where user_id=".$_SESSION['user_id'];
        if ($conn->query($sql) === FALSE ) {
            echo $conn->error;
            $final_msg='You can upload your resume';
        }else{
            $final_msg='You successfully uploaded your resume';
            $error=0;
        }
    }
?>

<link rel="stylesheet" type="text/css" href="resume/css/demo.css" />
<link rel="stylesheet" type="text/css" href="resume/css/component.css" />
<script>
    (function(e,t,n){
        var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")
    })(document,window,0);
</script>

<div class="container">
    <header class="codrops-header">
        <div class="codrops-links">
        </div>
        <?php
            echo '<h1>'.$final_msg.'</h1>';
        ?>
        <h5>You have completed the guidance form, One of our team member will call you soon</h5>
    </header>
    <div class="content">
        <div class="box">
            <?php
                if($error)
                    $url="";
                else
                    $url="./index.php";
            ?>
            <form action="<?php echo $url;?>" method="POST" enctype="multipart/form-data">
                <input type='file' name='file-7[]' id='file-7' class='inputfile inputfile-6' style="display:none;"  accept='application/pdf'/>
                <label for='file-7'><span></span> <strong><svg xmlns='http://www.w3.org/2000/svg' width='20' height='17' viewBox='0 0 20 17'><path d='M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z'/></svg> Choose a file&hellip;</strong></label>
                <br/>
                <button type="submit" name="submit" class="myButton">
                    <?php
                        if ($error)
                            echo 'Upload';
                        else
                            echo 'Check out new courses';
                    ?>
                </button>
            </form>
            <a href="index.php" style="color: green">Don't have resume now? skip this step</a>
        </div>
    </div>
</div>
<script src="resume/js/custom-file-input.js"></script>
<?php
include "footer.php";
?>
