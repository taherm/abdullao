<?php $__env->startSection('content'); ?>
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <ul class="breadcrumb">

          <li class="active">
            <h2>
              خدمات الاستشارات

            </h2>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<br>

<div class="container">
  <div class="row">

    <div class="col-lg-6" style="padding-left: 40px;
padding-right: 40px;">
      <h5>المستشار ورجل الأعمال :عبدالله العثمان</h5>
      <br>
      <p>اساس العمل التجاري هو بنية تحتية قوية ومستقرة لنمو العمل تستمد قوتها من الإستشارات المستمرة لتكون على دراية
        دائمة بمجريات الأمور وعندما تمتلك هذه البنية، بلا شك سيكون لك وضعك الخاص بين المنافسين.
      </p>
      <p>
        نحرص على تقديم خدمات استشارية ذات قيمة عالية، ونساعدكم على تطبيق حلول متطورة ومبتكرة لتحسين أداء أعمالكم،
        وكشف المشكلات المعقدة التي قد تواجهها.
        <br>
      </p>


    </div>
    <div class="col-lg-6">
      <form action="<?php echo e(url('/consultancy')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
          <label for="example-text-input" class="col-2 col-form-label">الاسم</label>
          <input class="form-control" type="text" name="name" id="example-text-input">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1">البريد الإلكتروني</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <br>
        <div class="form-group">
          <label for="exampleSelect1">قم بإختيار الدورة التدريبية</label>
          <select class="form-control" id="exampleSelect1" name="select">
            <option>استشارة مرة واحدة</option>
            <option>استشارة 3 مرات</option>
            <option>اتساشرة 6 مرات</option>

          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="example-text-input" class="col-2 col-form-label">موبايل</label>
          <input class="form-control" type="text" name="mobile" id="example-text-input">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleTextarea">ملاحظات</label>
          <textarea class="form-control" name="notes" id="exampleTextarea" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">ارسال</button>
      </form>

      <br>
      يمكنكم الاتصال على الأرقام التالية :<br>
      موبايل : 98824010
      <p> كما يمكنكم ارسال رسالتكم الى البريد الألكتروني :<a href="mailto:Mubarak@ideasowners.net">Mubarak@ideasowners.net</a></p>
    </div>

  </div>
</div>

<br>
<br>
<br>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-ar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>