<header class="bg-primary text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Profile</h1>
            <p class="lead">Its quick and easy</p>
        </div>
    </header>

    <section>
    <form method="post" action="<?php echo base_url();?>profile">
        <div class="container py-5">
            <div class="card" >
                <div class="card-header bg-secondary">Profile Here</div>
                <div class="card-body">
        <div class="container text-start mt-2">
            <label for="fullname" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="nama" placeholder="Please enter your full name" value="<?=$nama ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Please enter your username" value="<?=$username ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Please enter your email" value="<?=$email ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Please enter your password" value="<?=$password ?>">
        </div>
        <div class="container text-start mt-5">
            <button class="btn btn-outline-dark" type="submit">Submit</button>
        </div>
</form>

    </section>