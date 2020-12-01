$(document).ready(function(){
  $.ajax({
    url: "http://localhost/metrics/piedata.php",
    method: "GET",
    success: function(data) {
      var item = [];
      var quantity = [];
      var colors = [];
      for(var i in data) {
        item.push(data[i].itemId);
        quantity.push(data[i].quantity);
        colors.push(color());
      }

      var chartdata = {
        labels: item,
        datasets : [
          {
            label: 'Food Item sales',
            backgroundColor: colors,
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: quantity
          }
        ]
      };

      var ctx = $("#mycanvas");

      var pieGraph = new Chart(ctx, {
        type: 'pie',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
  function color() {
        var r = Math.floor(Math.random()*256);
        var g = Math.floor(Math.random()*256);
        var b = Math.floor(Math.random()*256);
        var rgba = 'rgba('+r+','+g+','+b+',1.0)'
        return rgba;
      }
});