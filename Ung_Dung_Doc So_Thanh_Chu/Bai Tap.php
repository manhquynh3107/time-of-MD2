<form method="post">
    <input type="number" name="number" placeholder="Nhập Số"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>

<?php
$numbers = array("số không","số một","số hai","số ba","số bốn","số năm","số sáu","số bảy","số tám","số chín","số mười");
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $value_input = $_POST['number'];
    foreach ($numbers as $key=> $number){
        if ($key == $value_input){
            echo ($numbers[$key]);
        }else{
            echo "Không tìm thấy số bạn vừa nhập!!";
        }
    }
}
