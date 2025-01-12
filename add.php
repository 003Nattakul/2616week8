<?php
    include("conn.php")
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: "Kanit", serif;
            font-weight: 300;
            font-style: normal;
            margin-left: 100px;
            margin-bottom: 300px;
            margin-top: 80px;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใช้งาน Bootstrap</title>
</head>
<body>
    <h1>ทดสอบการใช้งาน Bootstrap</h1>
    พัฒนาโดย 653485003 นายณัฐกุล จิระศิริโชติ <br>
    หมู่เรียน 26.16 <br>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row mb-2">
            <label for="inputEmail3" class="col-sm-1 col-form-label">รหัสนักศึกษา</label>
            <div class="col-sm-1">
                <input type="text" class="form-control" id="inputEmail3" name="stdid">
            </div>

        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-1 col-form-label">ชื่อ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="name">
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-1 col-form-label">ชื่อเล่น</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="nickname"> 
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-1 col-form-label">หมู่เรียน</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="classno">
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-1 col-form-label">อายุ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="age">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">บันทึกข้อมูล </button>
        <button type="reset" class="btn btn-danger">ยกเลิก </button>

    </form> 

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stdid = $_POST['stdid'];
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $classno = $_POST['classno'] ;
        $age = $_POST['age'];

        //    ทำการเพิ่มข้อมูล
        $sql = "INSERT INTO student (stdid, name, nickname, classno, age)
        VALUES ('$stdid', '$name', '$nickname', '$classno', '$age')";
        
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    ?>

 
    
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
