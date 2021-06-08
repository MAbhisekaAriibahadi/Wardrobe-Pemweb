<?= $this->extend('Layout/Template');?>

<?= $this->section('content');?>
<div class="container">
<?php $session = \Config\Services::session();?>
    <h1 class="mt-5 mb-3 text-center">hai <?php echo $session->get('username');?></h1>
    <h3 class="text-center">which clothes do you want to wear today</h3>
    <div class="row justify-content-evenly mt-5 text-center">
    <div class="col-5">
    <a href=<?php echo base_url("/Wear");?>><button type="button" class="btn btn-primary px-4">Wear</button></a>
    <a href=<?php echo base_url("/Pants");?>><button type="button" class="btn btn-primary px-4 ms-3">Pants</button></a>
    <a href=<?php echo base_url("/Accessories")?>><button type="button" class="btn btn-primary px-4 ms-3">Accessories</button></a>
    <table class="table table-striped mt-5">
        <tbody>
                <tr>
                    <th scope="row">Wear</th>
                    <td><?php echo $session->get('baju');?></td>
                    <td><a href=<?php echo base_url("/wear/delete");?>><button type="button" class="btn btn-danger px-4">Clear</button></a></td><!--button-->
                </tr>

                <tr>
                    <th scope="row">Pants</th>
                    <td><?php echo $session->get('celana');?></td>
                    <td><a href=<?php echo base_url("/pants/delete");?>><button type="button" class="btn btn-danger px-4">Clear</button></a></td><!--button-->
                </tr>

                <tr>
                    <th scope="row">Accessories</th>
                    <td><?php echo $session->get('aksesoris');?></td>
                    <td><a href=<?php echo base_url("/Accessories/delete");?>><button type="button" class="btn btn-danger px-4">Clear</button></a></td><!--button-->
                </tr>
        </tbody>
        </table>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-evenly text-center">
    <div class="col-5"><a href=<?php echo base_url("/login/logout"); ?>><button type="button" class="btn btn-danger px-5">close wardrobe</button></a><br><br></div>
    </div>
</div>

<?= $this->endSection('content');?>