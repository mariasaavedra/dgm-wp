<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
  <div style="background: #181A20; p-4 m-4">
    <div class="container">
      <h1 class="text-center text-white p-4">Medium Sand Concrete</h1>
      <div class="row pb-4">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="product-item shadow" style="height: 100%; background-image: url('/wp-content/themes/dgm/dist/images/products/thumbnail-1.png')"></div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="row">
            <div class="col-6 product-item product-item-thumbail shadow" style="background-image: url('/wp-content/themes/dgm/dist/images/products/thumbnail-2.png')"></div>
            <div class="col-6 product-item product-item-thumbnail shadow" style="background-image: url('/wp-content/themes/dgm/dist/images/products/thumbnail-3.png')"></div>
            <div class="col-6 product-item product-item-thumbnail shadow" style="background-image: url('/wp-content/themes/dgm/dist/images/products/thumbnail-4.png')"></div>
            <div class="col-6 product-item product-item-thumbnailshadow" style="background-image: url('/wp-content/themes/dgm/dist/images/products/thumbnail-5.png')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $__env->startComponent('components/banner'); ?>
  <?php $__env->slot('title'); ?>
    <h1 class="display-4 mb-4 text-uppercase">Browse our entire collection</h1>
  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>