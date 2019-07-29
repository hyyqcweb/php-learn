<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>全部列表</title>
</head>
<body>
<h1>留言列表</h1>
<a href="./index.php">新增数据</a>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th class="content">Content</th>
        <th>操作</th>
    </tr>
    <?php foreach($data as $v){?>
        <tr>
            <td><?=$v['id']?></td>
            <td><?=$v['username']?></td>
            <td><?=$v['password']?></td>
            <td><?=$v['content']?></td>
            <td>
                <a href="./update.php?id=<?=$v['id']?>">修改</a>
                <a href="./del.php?id=<?=$v['id']?>">删除</a>
            </td>
        </tr>
    <?php }?>
    <table>
</body>
</html>