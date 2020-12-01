$(document).ready(function(){
  $.ajax({
    url: "http://localhost/metrics/data.php",
    method: "GET",
    success: function(data) {
      var date = [];
      var amount = [];
      for(var i in data) {
        date.push(data[i].date);
        amount.push(data[i].amount);
      }

      var chartdata = {
        labels: date,
        datasets : [
          {
            label: 'Earnings Amount',
            backgroundColor: 'rgba(255, 0, 132, 0.9)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: amount
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});