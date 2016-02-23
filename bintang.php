<?php
if(isset($_POST["input"])){
    $nilai = $_POST["input"];
        for($i=0;$i<$nilai;$i++){
            for($j=0;$j<=$i;$j++){
                echo "* ";
            }
            echo "<br/>";
        }
        echo "<a href='bintang.php'>Kembali</a>";
        exit();
}
?>
<html>
<body>
<form action="bintang.php" method="post">
<table>
<tr>
    <td>
                <input type="text" name="input" id="input">
    </td>
    </tr>
    <tr>
        <td>
                <button type="submit">Buat Bintang</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>