`<!DOCTYPE html>
<html lang="vn">
<body>
    <head>
        <title>Thông tin sách</title>
        <left><h1>Benh Vien Da Khoa</h1></left><right><h1>Danh Sach Benh Nhan</h1></right>
        <left><h3>Khoa <\ten Khoa\></h3></left>
        

        <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <meta charset="UTF-8">
    <style>
    table{
        width:100%;
        background: rgb(111,222,123);
    }
    </style>
    </head>
    <body style="background:url('giaodien.jpg')">
<table border="2">
<?php
$doc = new DOMDocument();
$doc->load( 'cau1.xml' );
$books = $doc->getElementsByTagName( "book" );
echo "<tr background:><th>STT</th> <th>Ma benh nhan </th><th>Ho ten</th><th>Dia chi</th><th>Gioi tinh</th><th>Ngay nhap vien</th> <th>So ngay deu tri</th><th>So tien</th> </tr> ";
foreach( $books as $book )
{
$a = $book->getElementsByTagName( "STT" );
$STT = $a->item(0)->nodeValue;
$b = $book->getElementsByTagName( "mabenhan" );
$mabenhnhan = $b->item(0)->nodeValue;
$c = $book->getElementsByTagName( "hoten" );
$hoten = $c->item(0)->nodeValue;
$d = $book->getElementsByTagName( "diachi" );
$diachi = $d->item(0)->nodeValue;
$e = $book->getElementsByTagName( "gioitinh" );
$gioitinh = $e->item(0)->nodeValue;
$f = $book->getElementsByTagName( "ngaynhapvien" );
$ngaynhapvien = $e->item(0)->nodeValue;
$g = $book->getElementsByTagName( "songaydieutri" );
$songaydieutri = $e->item(0)->nodeValue;
$h = $book->getElementsByTagName( "sotien" );
$sotien = $e->item(0)->nodeValue;


echo "<tr><td>$STT</td><td>$mabenhnhan</td><td>$hoten</td><td>$diachi</td><td>$gioitinh</td><td>$ngaynhapvien</td><td>$songaydieutri</td><td>$sotien</td> </tr>";
}
echo "<tr><td colspan='7'>Tong tien</td><td></td> </tr>";


?>
</table>
<div class = "class-btn" align = "center">
            <button class = "button" type = "submit"><a href="cau2.php">Thêm Don</a></button>
            <button class = "button" type = "submit"><a href="cau3.php">Xuất file JSON</a></button>
        </div>
</html>