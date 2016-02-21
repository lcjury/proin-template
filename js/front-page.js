
$(document).ready(function() {
  $("#owl-demo").owlCarousel({
      autoPlay: 3000,
      items : 3,
      slideSpeed : 10,
      paginationSpeed: 1500,
      rewindSpeed: 2000,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3] 
  });
});

$(document).ready(function(){
$('.parallax-window').parallax({imageSrc: 'https://scontent-lax3-1.xx.fbcdn.net/hphotos-xlt1/t31.0-8/12615487_10205435002336812_2708854201665486228_o.jpg'});
});


$(document).ready(function(){
var data = {
    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
    datasets: [
        {
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [10, 22, 26, 32, 42, 52, 60]
        }
    ]
};
// Get context with jQuery - using jQuery's .get() method.
var ctx = $("#myChart").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
var myNewChart = new Chart(ctx).Line(data, {responsive: true,scaleShowVerticalLines: false,});
});

