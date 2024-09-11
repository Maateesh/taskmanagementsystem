<header class="bg-primary text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Sign Up</h1>
            <p class="lead">Its quick and easy</p>
        </div>
    </header>

    <section>
        <div class="container py-5">
            <div class="card" >
                <div class="card-header bg-secondary">Register Here</div>
                <div class="card-body">
        <div class="container text-start mt-2">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your full name" value="<?=$nama ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your username" value="<?=$username ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your email" value="<?=$email ?>">
        </div>
        <div class="container text-start mt-5">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your password" value="<?=$password ?>">
        </div>
        <div class="container text-start mt-5">
            <button class="btn btn-outline-dark" type="submit">Submit</button>
        </div>

    </section>