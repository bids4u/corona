
<!-- top cursor button -->
<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onCLick="topFunction()" id="myBtn"></i>
</div>
<script>myButton = document.getElementById("myBtn");
window.onscroll = function(){scrollFunction()};
function scrollFunction(){
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    myButton.style.display= "block";
  }else{
    myButton.style.display= "none";
  }
}</script>