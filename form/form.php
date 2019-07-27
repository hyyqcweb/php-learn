<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>整体form提交实例</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php
        $nickname = $email = $website = $remark = $gender = ""; // 变量
        $nicknameErr = $emailErr = $websiteErr = $remarkErr = $genderErr = ""; // 错误提示
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // nickname
            if (empty($_POST['nickname'])) {
                $nicknameErr = "名字是必需的";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $nickname)) {
                    $nicknameErr = "只允许字母和空格";
                } else {
                    $nickname = get_data($_POST["nickname"]);
                }
            }
            // email
            if (empty($_POST['email'])) {
                $emailErr = "邮件是必需的";
            } else {
                $email = get_data($_POST['email']);
            }
            // website
            if (empty($_POST['website'])) {
                $websiteErr = "网址必需";
            } else {
                $website = get_data($_POST['website']);
            }
            // remark
            if (empty($_POST['remark'])) {
                $remarkErr = "备注必需";
            } else {
                $remark = get_data($_POST['remark']);
            }
            // gender
            if (empty($_POST['gender'])) {
                $genderErr = '性别必需';
            } else {
                $gender = get_data($_POST['gender']);
            }
        }

        function get_data($data) {
            $data = trim($data); // 删除空格
            $data = stripslashes($data); // 删除反斜杠 \
            $data = htmlspecialchars($data);
            echo $data .PHP_EOL;
            return $data;
        }
    ?>
    <h2>PHP 表单完整验证</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        名字: <input type="text" name="nickname" value="<?php echo $nickname; ?>">
        <span class="error">* <?php echo $nicknameErr; ?></span><br><br>
        邮箱: <input type="text" name="email" value="<?php echo $email ; ?>">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>
        网址: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error">* <?php echo $websiteErr; ?></span><br><br>
        备注: <input type="text" name="remark" value="<?php echo $remark; ?>">
        <span class="error">* <?php echo $remarkErr; ?></span><br><br>
        性别: <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">女
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">男
        <span class="error">* <?php echo $genderErr;?></span><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>