
<?php $__env->startSection('content'); ?>
<div class="home-page">
    <div class="banner">
        <div class="container">
            <h1 class="logo-font">conduit</h1>
            <p>A place to share your knowledge.</p>
        </div>
    </div>

    <div class="container page">
        <div class="row">
            <div class="col-md-9">
                <div class="feed-toggle">
                    <ul class="nav nav-pills outline-active">
                        <li class="nav-item">
                            <a class="nav-link" href="">Your Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Global Feed</a>
                        </li>
                    </ul>
                </div>
                <?php $__currentLoopData = $conduits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conduit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="article-preview">


                    <div class="article-meta">
                        <!-- <a href="/profile/eric-simons"><img src="http://i.imgur.com/Qr71crq.jpg" /></a> -->
                        <a href="<?php echo e(route('conduit.article', ['id'=>$conduit->id])); ?>"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
                        <div class="info">
                            <a href="/profile/eric-simons" class="author"><?php echo e($conduit->name); ?></a>
                            <span class="date"><?php echo e($conduit->created_at->format('F j\t\h')); ?></span>
                        </div>
                        <button class="btn btn-outline-primary btn-sm pull-xs-right">
                            <i class="ion-heart"></i> 29
                        </button>
                    </div>
                    <!-- <a href="/article/how-to-build-webapps-that-scale" class="preview-link"> -->
                    <a href="<?php echo e(route('conduit.article', ['id'=>$conduit->id])); ?>" class="preview-link">
                        <h1><?php echo e($conduit->title); ?></h1>
                        <p><?php echo e($conduit->about); ?></p>
                        <span>Read more...</span>
                        <ul class="tag-list">
                            <li class="tag-default tag-pill tag-outline"><?php echo e($conduit->tag); ?></li>
                        </ul>
                    </a>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <ul class="pagination">
                    <!-- <li class="page-item active">
                        <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">2</a>
                    </li> -->
                    <?php echo e($conduits->links()); ?>

                </ul>
            </div>

            <div class="col-md-3">
                <div class="sidebar">
                    <p>Popular Tags</p>

                    <div class="tag-list">
                        <a href="" class="tag-pill tag-default">programming</a>
                        <a href="" class="tag-pill tag-default">javascript</a>
                        <a href="" class="tag-pill tag-default">emberjs</a>
                        <a href="" class="tag-pill tag-default">angularjs</a>
                        <a href="" class="tag-pill tag-default">react</a>
                        <a href="" class="tag-pill tag-default">mean</a>
                        <a href="" class="tag-pill tag-default">node</a>
                        <a href="" class="tag-pill tag-default">rails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('conduit.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shihoin2/apprentice/laravel/conduit/resources/views/conduit/home.blade.php ENDPATH**/ ?>