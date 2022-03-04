<html>
    <head>
        <meta lang="zh">
        <meta charset="utf-8">
        <style>
            html{
                font-family: "細明體", "AR PL UMing TW", "Inconsolata", "LiSongPro", monospace;
                margin: 0px;
                padding: 0px;
            }
            
            a:hover{
                color: white;
                background-color: black;
            }
        </style>
    </head>
    <body>
        <h1>Blogxt</h1>
        <hr>
        <?php
        # Declare variables
        $dir = "./p";
        
        # Check if directory exists
        if(!file_exists($dir)){
            mkdir($dir);
        }

        # Get list of posts
        $posts = array_diff(scandir($dir), array('.', '..'));
        
        foreach($posts as $p){
            $link = $dir . "/" . $p;
            echo "<a href=\"$link\">$p</a>";
        }
        ?>
    </body>
</html>
