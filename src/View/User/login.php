<div class="container">
                <br />
                <h3 align="center">Login </a></h3><br/>
                <br />
                <div class="panel panel-default">
                  
                    <div class="panel-body">
                    
                        <form action="<?php echo BASE_URI;?>/user/login" method="POST">

                        <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                                </div>
                                <div class="form-group row">
                                <div class="offset-sm-2 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                                </div>
                            </form>
                            <div align="center">
                                <a href="<?php echo BASE_URI;?>/user/register">Register</a>
                            </div>

                        </form>
                    </div>
                </div>
        </div>
                 
       