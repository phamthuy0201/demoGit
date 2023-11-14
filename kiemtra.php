<!-- I.Trắc nghiệm
Cau1: Màn hình hiển thị
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 9
) 
Câu 2: A,true
Câu 3: A, array
Câu 4: B, foden()
Câu 5: B, Chuyển đôit một đối tượng thành một chuỗi -->
<?php
echo "<b> Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:<br>
Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.<br>
Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử. </b> <br>";

function generateFibonacci($n) {
    $fibonacci = array();
    
    if($n == 1) {
        $fibonacci[] = 0;
    } elseif($n == 2) {
        $fibonacci[] = 0;
        $fibonacci[] = 1;
    } else {
        $fibonacci[] = 0;
        $fibonacci[] = 1;
        
        for($i=2; $i<$n; $i++) {
            $fibonacci[] = $fibonacci[$i-1] + $fibonacci[$i-2];
        }
    }
    
    return $fibonacci;
}

$numbers = generateFibonacci(10);

foreach($numbers as $number) {
    echo $number . ' ';
}

echo "<br>";

echo "<b> Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:<br>
Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade. <br>
Hiển thị thông tin của tất cả học sinh trong mảng.<br>
Viết hàm để tìm học sinh có điểm cao nhất (grade) </b><br>";

function hoc_sinh_diem_cao_nhat($hocSinhs) {
    $diem_cao_nhat = 0;
    $hoc_sinh_diem_cao_nhat = null;
    foreach ($hocSinhs as $hocSinh) {
        if ($hocSinh['grade'] > $diem_cao_nhat) {
            $diem_cao_nhat = $hocSinh['grade'];
            $hoc_sinh_diem_cao_nhat = $hocSinh;
        }
    } 
    return $hoc_sinh_diem_cao_nhat;
}

$hocSinhs = array(
    array(
        'id' => '21D191161',
        'name' => 'Pham Thi Thuy',
        'age' => 21,
        'grade' => 9
    ),
    array(
        'id' => '21D191162',
        'name' => 'Tran Thi Thanh Thao',
        'age' => 21,
        'grade' => 9.5,
    ),
    array(
        'id' => '21D191163',
        'name' => 'Le Thanh Thuy',
        'age' => 21,
        'grade' => 8.35,
    )
);

echo "<br> Thông tin của tất cả học sinh trong lớp: <br>";
foreach ($hocSinhs as $hocSinh) {
    echo "ID: " . $hocSinh['id'] . "<br>";
    echo "Họ tên: " . $hocSinh['name'] . "<br>";
    echo "Tuổi: " . $hocSinh['age'] . "<br>";
    echo "Điểm: " . $hocSinh['grade'] . "<br><br>";
}

$hocSinhDiemCaoNhat = hoc_sinh_diem_cao_nhat($hocSinhs);
echo "Học sinh có điểm cao nhất là: <br>";
echo "ID: " . $hocSinhDiemCaoNhat['id'] . "<br>";
echo "Họ tên: " . $hocSinhDiemCaoNhat['name'] . "<br>";
echo "Tuổi: " . $hocSinhDiemCaoNhat['age'] . "<br>";
echo "Điểm: " . $hocSinhDiemCaoNhat['grade'] . "<br>";
?>