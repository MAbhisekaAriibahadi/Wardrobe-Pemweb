<?= $this->extend('Layout/Template');?>

<?= $this->section('content');?>
    <div class="container">
    <div class="row justify-content-evenly">
    <div class="col-4">
    <h1 class="mt-5 text-center">have your own wardrobe</h1>
    </div>
    </div>
    <div class="row justify-content-evenly">
    <div class="col-4">
    <form action="<?= base_url("/Register/daftar");?>" method="post">
        <div class="mb-3 mt-5">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="username" name="username" class="form-control" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
        <p>select your gender</p>
            <input class="form-check-input" type="radio" name="gender" value="Male" required>
            <label class="form-check-label">
                Male
            </label>

            <input class="form-check-input ms-5" type="radio" name="gender" value="Female" required>
            <label class="form-check-label">
                Female
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
    <div class="row justify-content-evenly">
    <div class="mt-5 col-2 text-center">
    <a href=<?php echo base_url("/login");?>>Login Akun</a>
    </div>
    </div>
    </div>
    </div>
<?= $this->endSection('content');?>