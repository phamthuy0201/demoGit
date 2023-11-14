<!-- <?php
function kiemTraSoChan($so) {
    if ($so % 2 == 0) {
        return true; // Số là số chẵn
    } else {
        return false; // Số không phải là số chẵn
    }
}
$soCanKiemTra = 16; 

if (kiemTraSoChan($soCanKiemTra)) {
    echo $soCanKiemTra . ' là số chẵn.';
} else {
    echo $soCanKiemTra . ' không phải là số chẵn.';
}
?>

<?php
function tinhTongTuMotDenN($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }
    return $tong;
}

$n = 10; // Thay đổi giá trị này thành số n bạn muốn tính tổng

$tong = tinhTongTuMotDenN($n);
echo "Tổng của các số từ 1 đến $n là: $tong";
?> -->

<?php
 /*for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        $tich = $i * $j;
        echo "$i x $j = $tich\n <BR>";
    }
    echo "\n"; 
}

//funtion
function familyName($Name){
    echo "Nguyen $Name"
}
*/
function printMultiplicationTable($n) {
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result<br>";
    }
}
printMultiplicationTable(5);
?>
