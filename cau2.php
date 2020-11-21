<html lang="VN">
    <head>
        <>Thêm vào node</>
        <meta charset="UTF-8">
<style>
	textarea{
		color:blue;
	}
	html{
        background: #AAAAAA;
    }
    table{
        background:#cccccc;
    }
</style>
    </head>
</html>
<?php
if(isset($_REQUEST['add']))
{
    $xml=new DOMDocument("1.0","UTF_8");
    $xml->formatOutput=TRUE;
    $xml->preserveWhiteSpace=false;
    $xml->load('cau1.xml');
    $root= $xml->firstChild;
    $dataTag=$xml->createElement("book");
    $aTag=$xml->createElement("STT",$_REQUEST['STT']);
    $bTag=$xml->createElement("Mabenhan",$_REQUEST['Mabenhan']);
    $cTag=$xml->createElement("hoten",$_REQUEST['hoten']);
    $dTag=$xml->createElement("diachi",$_REQUEST['diachi']);
    $eTag=$xml->createElement("gioitinh",$_REQUEST['gioitinh']);
    $fTag=$xml->createElement("ngaynhapvien",$_REQUEST['ngaynhapvien']);
    $gTag=$xml->createElement("songaydieutri",$_REQUEST['songaydieutri']);
    $hTag=$xml->createElement("sotien",$_REQUEST['sotien']);
$dataTag->appendChild($aTag);
$dataTag->appendChild($bTag);
$dataTag->appendChild($cTag);
$dataTag->appendChild($dTag);
$dataTag->appendChild($eTag);
$dataTag->appendChild($fTag);
$dataTag->appendChild($gTag);
$dataTag->appendChild($hTag);

$root->appendChild($dataTag);
$xml->save('cau1.xml');
}
?>
<html>
    <body style="background:url('giaodien.jpg')"><center>
<textarea rows='24' cols='70'>
   <?php
    if (empty($_REQUEST['add']))
    {
        $xml=new DOMDocument("1.0","UTF_8");
        $xml->load("cau1.xml");
    }
    print($xml->saveXML());
    ?>
    </textarea>
    </center>
    <br>
    <center>
    <table border="2">
    <form action="cau2.php" method="post">
        <tr><td colspan='2' align="center">Thon tin khoa</td></tr>
    <tr><td>STT:</td><td><input type="text" name="STT" placeholder="Nhập so thu tu"/></td></tr>
    <tr><td>Ma benh nhan:</td><td><input type="text" name="Mabenhan" placeholder="Nhập ma benh nhan"/></td></tr>
    <tr><td>Ho ten:</td><td><input type="text" name="hoten" placeholder="Nhập ho ten"/></td></tr>
    <tr><td>Dia chi:</td><td><input type="text" name="diachi" placeholder="Nhập dia chi"/></td></tr>
    <tr><td>Gioi tinh:</td><td><input type="text" name="gioitinh" placeholder="Nhập gioi tinh"/></td></tr>
    <tr><td>Ngay nhap vien:</td><td><input type="text" name="ngaynhapvien" placeholder="Nhập ngay nhap vien"/></td></tr>
    <tr><td>Ngay dieu tri:</td><td><input type="text" name="songaydieutri" placeholder="Nhập ngay dieu tri"/></td></tr>
    <tr><td>So tien:</td><td><input type="text" name="sotien" placeholder="Nhập so tien"/></td></tr>
    <tr><td colspan="3" align="center"><input type="submit" name="add" value="Thêm"/>
    <input type="submit" name="add" value="Nhập lại"/>
    <button class = "button" type = "submit"><a href="index.php">Bảng sách</a></button></td></tr>
    
    </form>
    <table>
    </center>
  
    </body>
    </html>