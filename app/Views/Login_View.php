<?= $this->extend('Layout/Template');?>

<?= $this->section('content');?>
    <div class="container">
    <div class="row justify-content-evenly">
    <div class="col-4">
    <h1 class="mt-5 text-center">Open Your Wardrobe</h1>
    </div>
    </div>
    <div class="row justify-content-evenly">
    <div class="col-4">
    <form action="<?= base_url("/login/loginUser");?>" method="post"><!--ISI ACTION TERLEBIH DAHULU -->
        <div class="mb-3 mt-5">
            <label class="form-label">Username</label>
            <input type="username" name="username" class="form-control">
        </div>
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    <div class="row justify-content-evenly">
    <div class="mt-5 col-2 text-center">
    <a href=<?php echo base_url("/Register"); ?>>Register Akun</a>
    </div>
    </div>
    </div>
    </div>
<?= $this->endSection('content');?>