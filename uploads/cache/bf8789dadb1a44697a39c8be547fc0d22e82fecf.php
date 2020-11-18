<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>

    <?php $__env->startComponent('components/hero'); ?>
    
    <?php $__env->slot('content'); ?>
    <div style="max-width: 900px; margin: 0 auto;">
      <h1 class="display-4 text-uppercase">Build your dreams with a solid foundation</h1>
      <p class="text-uppercase">We provide quality natural materials that exceed the industry standard</p>
      <a href="/contact" class="btn btn-primary">Contact Us</a>
      <a href="/products" class="btn btn-outline-light">View Products</a>
    </div>
    <?php $__env->endSlot(); ?>
  <?php echo $__env->renderComponent(); ?>


    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials.product-grid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php $__env->startComponent('components/banner'); ?>
      <?php $__env->slot('title'); ?>
        <h1 class="display-5 display-md-4 mb-4 text-uppercase">Browse our entire collection</h1>
      <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>