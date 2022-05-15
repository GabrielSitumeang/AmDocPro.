

<?php $__env->startSection('container'); ?>

        <div class="garis">
        <h2 >Review Dokumen</h2>
        <hr align="left" width="90%" size="4" color="gray" noshade >
        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: #7CFC00; border-color:antiquewhite ; color: black"><a href="/upload">Upload</a></button>
        <button style= "margin-top:10px; margin-left:14px ;width: 75px; height: 25px; background-color: gray; border-color:antiquewhite ; color: black"><a href="/prodi">Return</a></button>       </div>
        <center> <br>
        <embed src="assets/file/" width="800px" height="2100px" />
        </center> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LARAVEL\kelompok-03\resources\views/review.blade.php ENDPATH**/ ?>