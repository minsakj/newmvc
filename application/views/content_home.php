<div class="clear"></div>
<div id="container_16">
    <div id="content">

        <?php
        foreach($results as $row){
            $title = $row->title;
            $text1 = $row->text1;
            $text2 = $row->text2;
        }

        echo heading($title, 1); 
        ?>

        <p><?php echo $text1; ?></p>
        <p><?php echo $text2; ?></p>
    </div> 
</div>