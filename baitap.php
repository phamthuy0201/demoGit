<?php 
echo " <b>1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. </b> <br>";
$bien = 13; 
if ($bien % 2 == 0){
    echo $bien ." là số chẵn";
} else {
    echo $bien. " là số lẻ";
}
echo"<br>";
echo "<b> 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.</b> <br>";
function tinhTong($n){
    $tong = 0;
    for ($i= 1; $i <= $n; $i++){
        $tong += $i;
    }
    return $tong;
}
$n = 5;
$ketQua = tinhTong($n);
echo "tổng các số từ 1 đến $n là: $ketQua";
echo "<br>";
echo "<b> 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10 </b> <br>";
for ($i = 1; $i <= 10; $i++){
    for($j = 1; $j <=10; $j++){
        echo "$i * $j = " .($i * $j);

        echo "<br>"; 
    }
}
echo "<br>";
echo "<b> 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.</b> <br>";
$word = "DeHa";
$mystring = "BTVN hoc phan PHP doanh nghiep DeHa"; 

if(strpos($mystring, $word) !== false){
    echo "Chuỗi '$mystring' chứa từ '$word'";
} else{
    echo " Chuỗi '$mystring' không chứa từ '$word'";
}

echo "<br>";
echo "<b> 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. </b> <br>";
function timGiaTriLonNhat($mang) {
    $lonNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri > $lonNhat) {
            $lonNhat = $giaTri;
        }
    }
    return $lonNhat;
}

function timGiaTriNhoNhat($mang) {
    $nhoNhat = $mang[0];
    foreach ($mang as $giaTri) {
        if ($giaTri < $nhoNhat) {
            $nhoNhat = $giaTri;
        }
    }
    return $nhoNhat;
}

$mang = array(3, 21, 1, 9, 2, 10, 7);

$lonNhat = timGiaTriLonNhat($mang);
$nhoNhat = timGiaTriNhoNhat($mang);

echo "Giá trị lớn nhất trong mảng là: $lonNhat <br>";
echo "Giá trị nhỏ nhất trong mảng là: $nhoNhat ";
echo "<br>";
echo "<b> 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.</b> <br>";
$numbers = array (78,6,8,3,12);
sort ($numbers);
$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++){
    echo $numbers[$x] ." ";

}
echo "<br>";
echo "<b> 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương </b> <br>";
function tinhGiaiThua($y){
    $giaiThua = 1;
    if ($y == 0 || $y == 1) {
        return $giaithua;
    } else {
        for ($r =2; $r <= $y; $r ++){
            $giaiThua *= $r;
        }
        return $giaiThua;
    }
}
$so = 5;
$ketQua = tinhGiaiThua($so);
echo "Giai thừa của $so là: $ketQua";
echo "<br>";
echo "<b> 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước </b> <br>";
function kiemTraSoNguyenTo($so){
    if($so < 2 ){
        return false;
    }
    for ($a = 2; $a <= sqrt($so); $a++){
        if ($so % $a == 0){
            return false;
        }

    }
    return true;
}
function timSoNguyenToTrongKhoang ($batDau, $ketThuc){
    echo "Các số nguyên tố trong khoảng $batDau đến $ketThuc là: ";
    for ($b = $batDau; $b <= $ketThuc; $b++){
        if (kiemTraSoNguyenTo($b)){
            echo "$b ";
        }
    }
} 

$batDau = 2;
$ketThuc = 18;

timSoNguyenToTrongKhoang ($batDau, $ketThuc);
echo "<br>";
echo "<b> 9. Viết chương trình PHP để tính tổng của các số trong một mảng.  </b> <br>";
$arry1 = array(2,3,4,5);
echo "Tổng của các số trong mảng là: " .array_sum($arry1) ;
echo "<br>";
echo "<b> 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. </b> <br>";
function fibonacci($n){
    $f0 = 1;
    $f1 = 1;
    $fn = 1;
    if($n < 0){
        return -1;
    } else if ($n == 0 || $n == 1){
        return $n;
    } else {
        for ($i = 2; $i < $n; $i++){
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}

echo ("Dãy số fibonacci là: ");
for ($i =0; $i < 15; $i++){
    echo (fibonacci($i) ." ");
}

echo "<br>";
echo "<b> 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. </b> <br>";
function check_Armstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string)$number);
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $number;

}
$testNumber = 153;
if (check_Armstrong($testNumber)) {
    echo $testNumber . " là số Armstrong.";
} else {
    echo $testNumber . " không là số Armstrong.";
}
    
echo "<br>";
echo "<b> 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ  </b> <br>";  
$mang_ban_dau1 = array('Nước', 'Việt', 'Nam' ,'tươi' ,'đẹp' );
echo " - Mảng ban đầu:  <br>";
foreach ($mang_ban_dau1 as $L )
{
echo "$L ";
}
echo "<br>";
$phan_tu_can_chen = "biết bao!";
array_splice($mang_ban_dau1 ,6,0, $phan_tu_can_chen);
echo " - Sau khi chèn phần tử 'biết bao!' thì mảng sẽ như sau:" ."<br>";
foreach ($mang_ban_dau1 as $L){
echo "$L " ;
}

echo "<br>";
echo "<b> 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.   </b> <br>";
function loaiBoTrung($arr) {
    $arr = array_unique($arr);

    return $arr;
}

$array = [1, 2, 3, 2, 4, 3, 5];
$uniqueArray = loaiBoTrung($array);

echo "Mảng sau khi loại bỏ các phần tử trùng lặp:\n";
print_r($uniqueArray);
echo "<br>";
echo "<b> 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng    </b> <br>";
function timViTri($arr, $element) {
    $viTri = array_search($element, $arr);

    if ($viTri !== false) {
        return $viTri;
    } else {
        return -1;
    }
}

$array = [1, 2, 3, 4, 5];
$element = 3;

$position = timViTri($array, $element);

if ($position != -1) {
    echo "Phần tử $element được tìm thấy tại vị trí $position trong mảng.";
} else {
    echo "Phần tử $element không được tìm thấy trong mảng.";
}

echo "<br>";
echo "<b> 15. Viết chương trình PHP để đảo ngược một chuỗi.    </b> <br>";
echo strrev("hello world");

echo "<br>";
echo "<b> 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.    </b> <br>";
$brands = array("Đây", "là", "đài", "phát", "thanh", "nước", "cộng", "hòa", "xã", "hội", "chủ", "nghĩa", "Việt", "Nam");
echo count($brands);

echo "<br>";
echo "<b> 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.    </b> <br>";
function kiem_tra_chuoi_palindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return "là chuỗi palindrome";  
		  else  
			  return "không phải là chuỗi palindrone";  
		}  
		echo kiem_tra_chuoi_palindrome('1881')."<br>";

echo "<br>";
echo "<b> 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.    </b> <br>";

$arr1 = array(1,2,5,6,7,0,3,4,5,56,8,5);
$arr_count = array_count_values($arr1);
echo "<pre>";
print_r($arr_count);
echo "</pre>";

echo "<br>";
echo "<b> 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.    </b> <br>";

$alphabets = array("a", "b", "c", "d", "e", "f" ,"g" ,"h");
rsort($alphabets);
foreach($alphabets as $al ){
    echo  $al ." ";
}

echo "<br>";
echo "<b> 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng . </b> <br>";
//thêm vào đầu phần tử của mảng
function themPhanTuVaoDau($arr, $element) {
    array_unshift($arr, $element);
    return $arr;
}

$array = [1, 2, 3, 4, 5];
$element = 0;

$newArray = themPhanTuVaoDau($array, $element);

print_r($newArray);
echo "<br>";
//thêm vào cuối phần tử của mảng
function themPhanTuVaoCuoi($arr, $element) {
    array_push($arr, $element);
    return $arr;
}

$array = [1, 2, 3, 4, 5];
$element = 6;

$newArray = themPhanTuVaoCuoi($array, $element);

print_r($newArray);

echo "<br>";
echo "<b> 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.  </b> <br>";
function timSoLonThuHai($arr) {
    $max1 = $arr[0];
    $max2 = $arr[0];

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max1) {
            $max2 = $max1;
            $max1 = $arr[$i];
        } elseif ($arr[$i] > $max2 && $arr[$i] < $max1) {
            $max2 = $arr[$i];
        }
    }

    return $max2;
}

$array = [2, 7, 1, 5, 9, 3];

$secondLargest = timSoLonThuHai($array);

echo "Số lớn thứ hai trong mảng là: $secondLargest";
echo "<br>";

echo "<b> 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.  </b> <br>";
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return ($a * $b) / timUSCLN($a, $b);
}

$s1 = 12;
$s2 = 18;

$uscln = timUSCLN($s1, $s2);
$bscnn = timBSCNN($s1, $s2);

echo "Ước số chung lớn nhất của $s1 và $s2 là: $uscln <br>";
echo "Bội số chung nhỏ nhất của $s1 và $s2 là: $bscnn";
echo "<br>";
echo "<b> 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.  </b> <br>";
function kiemTraSoHoanHao($number) {
    $sum = 0;

    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

$number = 6;

if (kiemTraSoHoanHao($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không phải là số hoàn hảo";
}

echo "<br>";
echo "<b> 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. </b> <br>";

function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;
    foreach ($mang as $so) {
        if ($so % 2 != 0 && ($soLeLonNhat === null || $so > $soLeLonNhat)) {
            $soLeLonNhat = $so;
        }
    }
    if ($soLeLonNhat !== null) {
        echo "Số lẻ lớn nhất là: " . $soLeLonNhat;
    } else {
        echo "Không có số lẻ trong mảng.";
    }
}
$mang = array(2, 4, 7, 1, 9, 6, 8);
timSoLeLonNhat($mang);

echo "<br>";
echo "<b> 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. </b> <br>";
function kiem_tra_so_nguyen_to($q){
    if ($q < 2){
        return false;
    }
    for ($e = 2; $e <= sqrt($q); $e ++){
        if ($q % $e == 0 ){
            return false;
        }  
    }
    return true;
}

$test_number = 45;
if (kiem_tra_so_nguyen_to($test_number)){
    echo $test_number . " là số nguyên tố";
}else {
    echo $test_number ." không phải là số nguyên tố"; 
}

echo "<br>";
echo "<b> 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. </b> <br>";
$numbers = array (1,10,100,50);
echo "Số dương lớn nhất trong mảng là: " . max($numbers);


echo "<br>";
echo "<b> 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.  </b> <br>";
$numbers = array (-34,-10,-100,-50);
echo "Số âm lớn nhất trong mảng là: " .max($numbers);

echo "<br>";
echo "<b> 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n . </b> <br>";
$j = 6;
$sum = 0;
for ($s = 1; $s <= $j ; $s +=2){
       $sum += $s; 

}
echo "Tổng dãy số từ 1 đến " .$j . " là: " .$sum;

echo "<br>";
echo "<b> 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. </b> <br>";
function timSoChinhPhuong($start, $end) {
    $chinhPhuong = array();

    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == floor(sqrt($i))) {
            $chinhPhuong[] = $i;
        }
    }

    return $chinhPhuong;
}

$start = 1;
$end = 100;

$socp = timSoChinhPhuong($start, $end);

echo "Các số chính phương trong khoảng từ $start đến $end là: ";
foreach ($socp as $so) {
    echo $so . " ";
}

echo "<br>";
echo "<b> 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.  </b> <br>";
function kiemTraChuoiCon($chuoiChinh, $chuoiCon) {
    $len1 = strlen($chuoiChinh);
    $len2 = strlen($chuoiCon);

    for ($i = 0; $i <= $len1 - $len2; $i++) {
        $j = 0;

        while ($j < $len2 && $chuoiChinh[$i + $j] == $chuoiCon[$j]) {
            $j++;
        }

        if ($j == $len2) {
            return true;
        }
    }

    return false;
}

$chuoiChinh = "Hello World!";
$chuoiCon = "World";

if (kiemTraChuoiCon($chuoiChinh, $chuoiCon)) {
    echo "$chuoiCon là chuỗi con của $chuoiChinh";
} else {
    echo "$chuoiCon không phải là chuỗi con của $chuoiChinh";
}































































?>
