<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    * { box-sizing: border-box; }

    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f5f4f0;
        color: #2c2c2a;
        padding: 2rem 1.5rem;
        max-width: 560px;
        margin: 0 auto;
    }

    h1 {
        font-size: 13px;
        font-weight: 500;
        color: #888780;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 0.25rem;
    }

    a {
        font-size: 13px;
        color: #5f5e5a;
        text-underline-offset: 3px;
    }

    form {
        background: #ffffff;
        border: 0.5px solid #d3d1c7;
        border-radius: 12px;
        padding: 1.25rem 1.5rem;
        margin: 1.5rem 0;
    }

    label {
        display: block;
        font-size: 12px;
        font-weight: 500;
        color: #888780;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        margin-bottom: 0.6rem;
    }

    input[type="number"] {
        height: 36px;
        border: 0.5px solid #b4b2a9;
        border-radius: 8px;
        padding: 0 12px;
        font-size: 14px;
        background: #f5f4f0;
        color: #2c2c2a;
        outline: none;
        margin-right: 8px;
    }

    input[type="submit"] {
        height: 36px;
        padding: 0 18px;
        background: #2c2c2a;
        color: #f5f4f0;
        border: none;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
    }

    h2 {
        font-size: 12px;
        font-weight: 500;
        color: #888780;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }

    p.row-item {
        font-size: 13px;
        padding: 10px 1.25rem;
        border-bottom: 0.5px solid #e8e7e2;
        background: #ffffff;
        color: #2c2c2a;
    }
    p.row-item:first-of-type { border-radius: 12px 12px 0 0; }
    p.row-item:last-of-type  { border-bottom: none; border-radius: 0 0 12px 12px; }
    </style>


</head>
<body>
       <?php
        echo "<h1 style='color:red'>W1 - Tatthep Sangangam Bit.2/3 No.18</h1>";
    ?>

    <a href="index.php">index </a>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

<?php
        if (isset($_GET["num"])) {
            $num = $_GET["num"];
            echo "<h2>สูตรคูณแม่ " . $num . "</h2>";

            $i = 1;                          
            while ($i <= 12) {               
                echo "<span style='color:#888;font-size:14px;line-height:1.9'>"
                     . $num . "x" . $i . "=" . $num * $i
                     . "</span><br>";
                $i++;                      
            }
        }
    ?>

    
    
    
</body>
</html>