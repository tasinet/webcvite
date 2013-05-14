<?php function tpl_header($data) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $data['meta']['title'] ?></title>
    
    <meta name="description" content="<?= $data["meta"]["description"] ?>">
    <meta name="keywords" content="<?= $data["meta"]["keywords"] ?>">
    
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet" href="style-print.css" type="text/css" media="print">
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div id="block-top"></div>
            <div id="personal-info" class="fixed">
                <div id="picture-of-me">
                    <img src="photo.png" width="100" height="100" alt="That&#39;s me">
                </div>
                <h1 id="name"><?= $data['title'] ?></h1>
                <h2 id="what-you-do"><?= $data['subtitle'] ?></h2>
                
            </div>
            
            <div class="divider"></div>
        </div>
        
        <div id="content" class="fixed">
            <div id="cv">

<?php } ?>
