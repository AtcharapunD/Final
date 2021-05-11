<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">DESCRIBE ABOUT NJ SHOPPING ONLINE [T.T]</span></h5>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p> <strong>ชื่อ-สกุล : </strong> 62-060216-1212-1 นางสาวอัจฉราพรรณ ดาสนม ตอนเรียนที่ 3 ลำดับที่ 10</p>
                <p><strong>ชื่อโปรแกรม : </strong>NJ SHOPPING ONLINE [T.T]</p>
                <p><strong>ชื่อฐานข้อมูล : </strong>shoponline</p>
                <p><strong></strong></p>
            </div>
            <br>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><strong>ตารางประเภทสินค้า ประกอบด้วย Attribute ดังนี้</strong></p>
            </div>
            <table>

                <tr>
                    <td>#</td>
                    <td>AttributeName</td>
                    <td>Detail</td>
                    <td>DataType</td>
                    <td>Key</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>typeId</td>
                    <td>รหัสประเภทสินค้า</td>
                    <td>int</td>
                    <td>primary key</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TypeName</td>
                    <td>ชื่อประเภทสินค้า</td>
                    <td>varchar(20)</td>
                    <td></td>
                </tr>
            </table>
            <br>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><strong>ตารางสินค้า ประกอบด้วย Attribute ดังนี้</strong></p>
            </div>
            <table>

                <tr>
                    <td>#</td>
                    <td>AttributeName</td>
                    <td>Detail</td>
                    <td>DataType</td>
                    <td>Key</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>productid</td>
                    <td>รหัสสินค้า</td>
                    <td>int</td>
                    <td>primary key</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>typeid</td>
                    <td>รหัสประเทภสินค้า</td>
                    <td>int</td>
                    <td>foreign key</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>productname</td>
                    <td>ชื่อสินค้า</td>
                    <td>varchar(40)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>quantity</td>
                    <td>จำนวนสินค้า</td>
                    <td>int</td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>CostPrice</td>
                    <td>ราคาทุน/หน่วย</td>
                    <td>float</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SellPrice</td>
                    <td>ราคาขาย/หน่วย</td>
                    <td>float</td>
                    <td></td>
                </tr>
            </table>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><strong>โปรแกรมสามารถทำงานได้ดังนี้</strong></p>
            </div>
            <p>1.สามารถแสดงสินค้าข้อมูลได้</p>
            <p>2.มีปุ่มกดกลับไปหน้าเมนูได้</p>
            
            <br>
        </div>
    </div>

    <br>
    <div align=center>
        <a href="menu.php" class="w3-button w3-black">BACK</a>
    </div>
    <br>
</body>

</html>