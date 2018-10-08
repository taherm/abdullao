@extends('layouts.master-ar')
@section('content')



<section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <img src="{{asset('/img/header.jpg')}}" float="left" class="img-responsive"/> 
          </div>
        </div>
      </div>
    </section>
  <br>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  {{--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


--}}
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
   
    
    <iframe width="100%" height="350" src="https://www.youtube.com/embed/fCTNCCbp3QQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>   
    
     
                    
              
      </div>
      
</div>
    <!-- Left and right controls -->
    
</div>
</div>

<div class="container text-center">
<br>
  <p style="text-align: center; font-size: 18px; color: black !important;"> نرحب بزيارتكم لموقع المدرب عبدالله العثمان ويسرنا أن نعرض لكم آخر الدورات والمؤلفات الخاصة بالمدرب. كما نرحب بتواصلكم معنا وإبداء </p>
    
     
      <p style="text-align: center; font-size: 18px; color: black !important;">اقتراحاتكم وآراءكم واستفساراتكم حول كل ما يخص مجال المشاريع الصغيرة و المتوسطة.</p>
  <br>
</div>




<div class="container">
<hr>
<p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong> الدورات و المؤلفات</strong>
          </p>
          
      
    	
      <div class="row row-bottom-margin">
      @foreach($ser as $s)
        <div class="col-sm-12 col-md-4">
          <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
            <div class="mainflip">
            <div class="frontside">
            <div class="card" style="width:20rem;">
            <img class="img-responsive card-img-top" height="auto" src="{{asset('uploads/'.$s->image)}}" alt="card image">
           
            </div>
            </div>
            <div class="backside">
            <div class="card" style="width:20rem;">
            <div class="card-body">
            <center><h5 class="text-center">{{$s->title}}</h5></center>
            <center><a href="{{ url('services/'.$s->id) }}" class="btn btn-info btn-md text-center">اضغط هنا</a></center>
            </div>
            
            </div>
            </div>
            </div>
            </div>
        </div>
        @endforeach
        
      </div>
    
     

    </div>
    <br><br>

<div class="container">
<hr>
        <p style="text-align: center; color: #5ea7da !important; font-size: 20px;">
            <strong>الانستقرام</strong>
          </p>
    
    <div id="instafeed"></div>
  </div>
  <br>
  <br><br>

@endsection