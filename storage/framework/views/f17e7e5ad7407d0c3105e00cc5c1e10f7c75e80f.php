<!DOCTYPE html>
<html lang="en">
<head>
  <title>Abdullao</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-rtl.min.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
  <link href="https://fonts.googleapis.com/css?family=Cairo:600" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/js/instafeed.min.js')); ?>"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="container">
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
      <li class="">
														<a class="nav-link" href="/">
                            الصفحة الرئيسية
														</a>
													
													</li>
													<li class="">
														<a class="nav-link" href="/about-ar">
														عن المدرب
														</a>
													
													</li>

<li class="">
														<a class="nav-link" href="/reserve-consultant">
                            خدمات الاستشارات

														</a>
													
													</li>


      <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                <?php if($item->services->count()): ?>
							<li class="dropdown">
								<a href=""onclick="return false" class="dropdown-toggle disabled" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false"><?php echo e($item->title); ?> <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								<?php $__currentLoopData = $item->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><a href="<?php echo e(url('services'.'/'.$submenu->id)); ?>"><?php echo e($submenu->title); ?></a></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</li>
							
							
					
				<?php else: ?>
				<li><a href=""><?php echo e($item->title); ?></a></li>
				<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li class="">
														<a class="nav-link" href="/reserve-courses">
                            لحجز الدورات
														</a>
													
													</li>

 

                          <li class="">
														<a class="nav-link" href="/album">
                            البوم الصور
														</a>
													
                          </li>
                          <li class="">
														<a class="nav-link" href="/youtube">
                            يوتيوب 
														</a>
													
													</li>
        <li class="">
														<a class="nav-link" href="/contact-ar">
                            اتصل بنا
														</a>
													
													</li>
        		</ul>
						
    </div>
  </div>
</nav>
<hr>


<?php echo $__env->yieldContent('content'); ?>

<!-- Footer -->
<footer class="text-center">
          <div>
              <p class="pull-left" style="padding:10px">Abdulla Alothman    
              
								<a href="https://www.instagram.com/alothmanabdulla/" target="_blank" title="Instagram">
									<i class="fa fa-instagram"></i>
								</a>
              </p> 
              
								
              
            <a class="up-arrow pull-right" href="#myPage" style="padding:10px" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  
  </div>
</footer>
</div>
<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      userId: '14927392',
      limit:'8',
      resolution:'low_resolution',
      accessToken: '14927392.8f4c5bf.cafc2df6c80d43769a6e49372ca010b1',
      template: '  <div class="col-sm-3"><a href="{{link}}"><img src="{{image}}" class="img-thumbnail img-responsive"/></a> </div>'
            });
    feed.run();
</script>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>