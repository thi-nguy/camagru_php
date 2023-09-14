<?php require "partials/header.php"; ?>
<?php require "partials/navbar.php"; ?>

<div>This is Test page</div>

<form>
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
        <input type="username" class="form-control" id="username" placeholder="name">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="passwordRepeat" placeholder="Repeat password">
        <label for="floatingPassword">Repeat Password</label>
    </div>

    <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Remember me
        </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
</form>

<?php require "partials/footer.php"; ?>