<?php
    include('dl.php');
?>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
        <link href="../css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../css/table.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery.js"></script>

        <div class="short">
            <div class="short_title">
                <p>当前用户：<strong>&nbsp;<?php echo $_SESSION['username'];?></strong></p>
                <p>当前日期：<strong>
                    <?php
                        date_default_timezone_set('prc');
                        echo date('Y-m-d',time());
                    ?>
                </strong></p>
            </div>
        </div>
        
        <div class="short">
            <div class="short_title">
                <p>PHP版本：<strong>&nbsp;<?php echo "PHP".PHP_VERSION; ?></strong></p>
                <p>服务器名：<strong>
                    <?php
                        echo $_SERVER['SERVER_NAME'];
                    ?>
                </strong></p>
            </div>
        </div>


        <div class="short">
            <div class="short_title">
                <p>服务器端口：<strong><?php echo $_SERVER["SERVER_PORT"]; ?></strong></p>
        		<p>服务器操作系统：<strong>
        			<?php echo PHP_OS; ?>
        		</strong></p>
        	</div>
        </div>
