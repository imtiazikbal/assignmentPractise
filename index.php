<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <input type="number" name="num1" placeholder="Enter Number">
    <input type="number" name="num2" placeholder="Enter Number">

    <select name="option" id="">
        <option selected disabled value="">Select</option>
        <option value="add">Addition(+)</option>
        <option value="sub">Subtraction(-)</option>
        <option value="div">Division(/)</option>
        <option value="mul">Multiply(*)</option>
    </select>

    <button type="submit">Submit</button>
    </form>
    <div>
        <?php

            if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                $operation = $_POST['option'];
                if ( $operation === "add" ) {
                    $result = $num1 + $num2;
                    echo $result;

                } elseif ( $operation === "sub" ) {
                    $result = $num1 - $num2;
                    echo $result;
                } elseif ( $operation === "div" ) {
                    $result = $num1 / $num2;
                    echo $result;
                } elseif ( $operation === "mul" ) {
                    $result = $num1 * $num2;
                    echo $result;
                }
            }
        ?>
    </div>
</body>
</html>