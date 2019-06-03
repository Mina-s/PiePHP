

        <div class="container">
                <br />
                <h3 align="center">Register </a></h3><br/>
                <br />
                <div class="panel panel-default">
                  
                    <div class="panel-body">
                    
                        

                        <div class="container">
               <br />
          <div class="container">
               <br />
   
          <h3 align="center">Piephp </a></h3><br />
          <br />
          

          <form action="<?php echo BASE_URI;?>/user/register" method="POST">

               <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"  />
               </div>
               <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="lastname" class="form-control"  />
               </div>

               
               <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" /> 
               </div>   


               <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
               </div>

               <div class="form-group">
                    <input type="submit" name="register" class="btn btn-info" value="Register" />
               </div>

               <div align="center">
                                <a href="<?php echo BASE_URI;?>/user/login">Login</a>
                            </div>

                        </form>
                    </div>
                </div>
        </div>
                           
