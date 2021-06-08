<?= $this->extend('Layout/Template');?>

<?= $this->section('content');?>
    <div class="container">
        <div class="alert alert-success mt-5" role="alert">
        your registration is successful - now you have your own wardrobe <br>
        click login to access your wardrobe. <a href=<?php echo base_url("/login");?>>login here</a>
        </div>
    </div>
<?= $this->endSection('content');?>