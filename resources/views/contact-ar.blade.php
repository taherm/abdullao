@extends('layouts.master-ar')
@section('content')

<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <ul class="breadcrumb">

          <li class="active">
            <h2>

              اتصل بنا

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
    <div class="col-lg-6">
      <ul class="list list-icons list-icons-style-3 mt-4">
        <li><i class="fa fa-map-marker"></i> <strong>العنوان:</strong> <br> الكويت - الشعب، ق ٤، ش ٤٠، م ٢٦</li>
        <hr>
        <li><i class="fa fa-whatsapp"></i> <strong>موبايل:</strong><br><a href="{{url('https://api.whatsapp.com/send?phone=99746600')}}">99746600(+965)</a></li>
        <hr>



        <li><i class="fa fa-envelope"></i> <strong>البريد الإلكتروني:</strong> <br><a href="mailto:Planner1@gmail.com">Planner1@gmail.com</a></li>
      </ul>

      <hr>


      
      <br>
    </div>
    <div class="col-lg-6">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27821.97628056004!2d48.00309303955079!3d29.348408500000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c954bc134bf%3A0xd61dc71d2af95114!2sDar+AlOthman!5e0!3m2!1sen!2skw!4v1525588741096"
          width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <br>
    </div>
  </div>

</div>

@endsection