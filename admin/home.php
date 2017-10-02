<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin home</title>
<link rel="stylesheet" type="text/css" href="css/newstyle.css">
</head>
<body>
<div id="wrapper">
	<div id="header"></div>
    <div id="menu">
    	<ul>
        	<a href="home.php"><li>Trang chủ</li></a>
            <a href="home.php?function=sach"><li>Quản lý sách</li></a>
            <a href="home.php?function=tacgia"><li>Quản lý tác giả</li></a>
            <a href="home.php?function=donhang"><li>Quản lý đơn hàng</li></a>
            <a href="home.php?function=tintuc"><li>Quản lý tin tức</li></a>
            <a href="home.php?function=khachhang"><li>Quản lý khách hàng</li></a>
        </ul>
  </div>
	<div id="content">
    	<?php
			$function = '';
			
			if(isset($_GET['function']))
				$function = $_GET['function'];
				
			switch($function) {
				case 'sach': {
					echo 'Quản lý sách';
					break;	
				}
				case 'tacgia': {
					echo 'Quản lý tác giả';
					break;	
				}
				case 'donhang': {
					echo 'Quản lý đơn hàng';
					break;	
				}
				case 'tintuc': {
					echo 'Quản lý tin tức';
					break;	
				}
				default:
					echo 'Quản lý sách';
			}
		
		?>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>