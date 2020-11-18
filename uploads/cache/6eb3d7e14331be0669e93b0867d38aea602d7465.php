<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.content-page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
    <h1 class="text-white text-center p-4">Contact Us</h1>
    <div class="container pb-4">
      <form>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name">
          </div>
          <div class="col-12">
            <input type="text" class="form-control" placeholder="Email">
            <textarea rows="4" class="form-control" placeholder="Message" ></textarea>
            <button class="btn btn-primary w-100">Submit</button>
          </div>
        </div>

      </form>
    </div>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>