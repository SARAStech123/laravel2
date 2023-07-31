<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
    @include('header')
<div class="row row-no-padding">
  <div class="col-md-6">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"  >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpg" class="d-block w-100" alt="img1">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" class="d-block w-100" alt="img2">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.jpg" class="d-block w-100" alt="img3">
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="container">
     <h2>Department of School Education and Sports</h2>
     <p>No one can really teach anyone. Removing natural obstacles, and awakening its powers, as a plant develops automatically. Proper fertilization, light and ventilation, fencing around the plant will ensure that the plant is safe and will develop properly. So are children. Therefore, the task of the teacher is to create the right conditions for development. In this sense, education has to be said to be lacking.<br>
      <i style="margin-left: 490px;">- Swami Vivekananda</i></p>
     <div class="card" style="width:400px; height: 520px;">
       <img class="card-img-top" src="img/Swami.jpg" alt="Card image" style="width:60%; margin-left: 50px; padding-top: 9px;">
       <div class="card-body">
         <h4 class="card-title">Swami Vivekananda</h4>
         <p class="card-text">Swami Vivekananda (January 12, 1863 – July 4, 1902, Narendranath Dutt) was an Indian monk and philosopher.</p>
         <a href="https://mr.wikipedia.org/wiki/%E0%A4%B8%E0%A5%8D%E0%A4%B5%E0%A4%BE%E0%A4%AE%E0%A5%80_%E0%A4%B5%E0%A4%BF%E0%A4%B5%E0%A5%87%E0%A4%95%E0%A4%BE%E0%A4%A8%E0%A4%82%E0%A4%A6" class="btn btn-primary stretched-link">More info</a>
       </div>
     </div>
     
   </div>
 </div>
 <div class="col-md-6">
       <div class="container">
         <iframe src="/notices" width="500px" height="200px"></iframe>
       </div>
     </div>
</div><br><br>
<!--
<footer>
  <div>
   <a href="https://education.maharashtra.gov.in/" class="btn btn-primary">Maharashtra Goverment</a> 
 </div>
</footer>
-->

</body>
<footer>@include('footer')</footer>
</html>
