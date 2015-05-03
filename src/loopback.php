<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>GET/POST Data</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $postStr = '{"Type":"[POST]", "parameters":';
        $postArr = json_encode($_POST, JSON_FORCE_OBJECT);
        if ($postArr == '{}')
        {
            echo $postStr . 'null}';
        }
        else
        {
            echo $postStr . str_replace('""', '"undefined"', $postArr) . '}';
        }
    }
    elseif ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $getStr = '{"Type":"[GET]", "parameters":';
        $getArr = json_encode($_GET, JSON_FORCE_OBJECT);
        if ($getArr == '{}')
        {
            echo $getStr . 'null}';
        }
        else
        {
            echo $getStr . str_replace('""', '"undefined"', $getArr) . '}';
        }
    }
?>
</body>
</html>
