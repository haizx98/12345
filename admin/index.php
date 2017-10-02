<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Trang quản trị</title>
</head>
<body>
<div id="wrapper">
	<div id="header"></div>
    <div id="menu">
    	<ul>
        	<a href="index.php"><li>Trang chủ</li></a>
            <a href="index.php?function=tintuc"><li>Quản lý tin tức</li></a>
            <a href="index.php?function=phanhoi"><li>Quản lý phản hồi</li></a>
            <a href="index.php?function=taikhoan"><li>Quản lý tài khoản</li></a>
            <a href="index.php?function=thongke"><li>Thống kê</li></a>
        </ul>
    </div>
    <div id="content">
    
    <?php
		$function = '';
		
		//lay gia tri cua bien function
		if(isset($_GET['function']))
			$function = $_GET['function'];
			
		switch($function) {
			case 'tintuc': {
				echo 'Quản lý tin tức';
				break;	
			}
			case 'phanhoi': {
				echo 'Quản lý phản hồi';
				break;	
			}
			case 'taikhoan': {
				echo 'Quản lý tài khoản';
				break;	
			}
			case 'thongke': {
				echo 'Quản lý thống kê';
				break;	
			}
			default:
				echo 'Quản lý tin tức';
		}
	
	?>
    
    </div>
    <div id="footer"></div>
</div>
</body>
</html>