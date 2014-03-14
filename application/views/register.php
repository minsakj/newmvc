 <div id="main" class="grid_12">
                
              <?php
                if(isset($_GET['error']))
                echo $_GET['error'];
              ?>
                <form action="regproc.php" enctype="multipart/form-data" method="post" class="grid_5 prefix_1">
                    <label>Username:<input name="username" type="text" style="margin-left: 55px;"/></label>
                    <label>Password:<input name="password" type="password" style="margin-left: 55px;" /></label>
                    <label>Re-Type Password:<input name="repassword" type="password" /></label>
                    <label>E-mail:<input name="email" type="email" style="margin-left: 78px;"/></label>
                    <input name="reg" type="submit" value="register" />
                </form>
            
            </div>
