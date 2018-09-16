<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Table Barang
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hovered" id="default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Sisa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0 ;
                                $sisa = 1;
                            ?>
                            <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $no++ ?>
                            <tr>
                                <td><?php echo e($no); ?></td>
                                <td><?php echo e($row->bara_name); ?></td>
                                <td class="right"><?php echo e($row->bara_jumlah); ?></td>
                                <td class="right"><?php echo e($sisa); ?></td>
                                <td class="center">
                                    <a href="" class="btn btn-warning">Detail</a>
                                    <a href="<?php echo e(route('barang.edit', ['id' => $row->bara_id])); ?>" class="btn btn-success">Edit</a>
                                    <a href="<?php echo e(route('barang.hapus', ['id' => $row->bara_id])); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>