<div id="content">
   
        <p>Welcome to the members page</p>
        
        <p>You are now logged in</p>
        
        <?php
        
        echo "<pre>";
        print_r ($this->session->all_userdata());
        echo "</pre>";
        
        ?>
        
        <a href="<?php echo base_url().'site/logout' ?>">Logout</a>
</div> 
