<html>
	<head>
		<title>Hello, World!</title>
		<style type="text/css" rel="stylesheet">
			/**
			 * Credits: https://codepen.io/cvan/pen/LYYXzWZ
			 */
			.success-checkmark{width:80px;height:115px;margin:0 auto}.success-checkmark .check-icon{width:80px;height:80px;position:relative;border-radius:50%;box-sizing:content-box;border:4px solid #4caf50}.success-checkmark .check-icon::before{top:3px;left:-2px;width:30px;transform-origin:100% 50%;border-radius:100px 0 0 100px}.success-checkmark .check-icon::after{top:0;left:30px;width:60px;transform-origin:0 50%;border-radius:0 100px 100px 0;animation:4.25s ease-in rotate-circle}.success-checkmark .check-icon::after,.success-checkmark .check-icon::before{content:'';height:100px;position:absolute;background:#fff;transform:rotate(-45deg)}.success-checkmark .check-icon .icon-line{height:5px;background-color:#4caf50;display:block;border-radius:2px;position:absolute;z-index:10}.success-checkmark .check-icon .icon-line.line-tip{top:46px;left:14px;width:25px;transform:rotate(45deg);animation:.75s icon-line-tip}.success-checkmark .check-icon .icon-line.line-long{top:38px;right:8px;width:47px;transform:rotate(-45deg);animation:.75s icon-line-long}.success-checkmark .check-icon .icon-circle{top:-4px;left:-4px;z-index:10;width:80px;height:80px;border-radius:50%;position:absolute;box-sizing:content-box;border:4px solid rgba(76,175,80,.5)}.success-checkmark .check-icon .icon-fix{top:8px;width:5px;left:26px;z-index:1;height:85px;position:absolute;transform:rotate(-45deg);background-color:#fff}@keyframes rotate-circle{0%,5%{transform:rotate(-45deg)}100%,12%{transform:rotate(-405deg)}}@keyframes icon-line-tip{0%,54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}100%{width:25px;left:14px;top:45px}}@keyframes icon-line-long{0%,65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}100%{width:47px;right:8px;top:38px}}

			/**
			 * Credits: https://codepen.io/fedeq/pen/ExPQLwY
			 */
			.circle,.circle-border{width:60px;height:60px;border-radius:50%}.circle{z-index:1;position:relative;background:#fff;transform:scale(1);animation:.7s success-anim}.circle-border{z-index:0;position:absolute;transform:scale(1.1);animation:.4s circle-anim;background:#f86}@keyframes success-anim{0%,30%{transform:scale(0)}100%{transform:scale(1)}}@keyframes circle-anim{from{transform:scale(0)}to{transform:scale(1.1)}}.error::after,.error::before{content:"";display:block;height:4px;background:#f86;position:absolute}.error::before{width:40px;top:48%;left:16%;transform:rotateZ(50deg)}.error::after{width:40px;top:48%;left:16%;transform:rotateZ(-50deg)}
		</style>
	</head>
	<body>
		<h1>Hello, World</h1>

		<p>
			Connecting to <strong><?= $_ENV['sql_host']; ?></strong> (db: <strong><?= $_ENV['sql_db']; ?></strong>) using user: <strong><?= $_ENV['sql_user']; ?></strong>
		</p>

		<div style="text-align: center;">
			<?php
				// We don't want any output.
				ob_start();

				$conn = @mysqli_connect($_ENV['sql_host'], $_ENV['sql_user'], $_ENV['sql_pass'], $_ENV['sql_db']);

				// Discard all output
				ob_end_clean();

				if($conn):
			?>
				<h2>SQL Connection success!</h2>
				<div class="success-checkmark">
				  <div class="check-icon">
				    <span class="icon-line line-tip"></span>
				    <span class="icon-line line-long"></span>
				    <div class="icon-circle"></div>
				    <div class="icon-fix"></div>
				  </div>
				</div>
			<?php
				else:
			?>
				<h2>Failed to connect to SQL Server</h2>
				<div class="circle-border"></div>
				<div class="circle">
					<div class="error"></div>
				</div>
			<?php
				endif;
			?>
		</div>
	</body>
</html>