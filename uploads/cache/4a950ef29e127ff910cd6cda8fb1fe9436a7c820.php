<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
     
    <?php $__env->startComponent('components/header'); ?>
      <?php $__env->slot('title'); ?>
        <h1 class="text-uppercase">Products</h1>
      <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    
    <?php echo $__env->make('partials.product-grid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->startComponent('components/banner'); ?>
      <?php $__env->slot('title'); ?>
        <h1 class="text-uppercase">Browse our entire collection</h1>
      <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>