<?= $this->extend('Layout/Template');?>

<?= $this->section('content');?>
<div class="container">
    <div class="row justify-content-evenly">
    <div class="col-8">
    <h1 class="mb-3 mt-5 text-center">choose your accessories</h1>
        <table class="table table-striped mt-3">
        <thead>
            <tr>
            <th scope="col">Number</th>
            <th scope="col">Model</th>
            <th scope="col">Size</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Accessories as $Accessoriess): ?>
                <tr>
                    <th scope="row"><?php echo $Accessoriess['id'];?></th><!--id -->
                    <td><?php echo $Accessoriess['model'];?></td><!--model-->
                    <td><?php echo $Accessoriess['size'];?></td><!--size-->
                    <td><a href="<?php echo base_url("/Accessories/use/".$Accessoriess['id']);?>"><button type="button" class="btn btn-primary px-4">Use</button></a></td><!--button-->
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    </div>
    <div class="row justify-content-evenly text-center">
    <div class="col-5"><a href=<?php echo base_url("/login/Dashboard"); ?>><button type="button" class="btn btn-danger px-5">back</button></a><br><br></div>
</div>
<?= $this->endSection('content');?>
