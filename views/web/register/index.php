<?php include_once('views/web/layouts/app.php') ?>

<?php startblock('content') ?>
    
<!-- Register Start -->
<div class="container-fluid pt-5 text-align">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">New User Signup!</span></h2>
    </div>
    
    <div class="row justify-content-md-center px-xl-5">
                        <?php if (Flash::has('signup_error')): ?>
							<div class="alert alert-danger" role="alert">
								<?php echo Flash::get('signup_error') ?>
							</div>
						<?php endif ?>
        <form class="col-md-6 col-12" action="<?php echo url('register/signup') ?>" method="POST">
        
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo isset($_POST['email'] )? $_POST['email'] : '' ?>" aria-describedby="emailHelp">
                <p class="text-danger"><?php echo isset($registerErrors['email']) ? $registerErrors['email'] : '' ?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name'] )? $_POST['name'] : '' ?>" id="exampleInputPassword1">
                <p class="text-danger"><?php echo isset($registerErrors['name']) ? $registerErrors['name'] : '' ?></p>
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                <p class="text-danger"><?php echo isset($registerErrors['password']) ? $registerErrors['password'] : '' ?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1">
                <p class="text-danger"><?php echo isset($registerErrors['confirm_password']) ? $registerErrors['confirm_password'] : '' ?></p>
            </div>


            

            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
</div>
<!-- Register End -->


<?php endblock() ?>