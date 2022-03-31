
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        Dashboard Login
    </a>
    </nav><br>
    <form action="postLogin" method="POST" >
        <?=csrf_field()?>
        <div class="container col-lg-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
