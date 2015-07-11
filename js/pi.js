function drawChart(marker) {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'Pizza sold @ '+
                               marker.getPosition().toString(),
                       'width':400,
                       'height':150};
                       
        var node        = document.createElement('div'),
            infoWindow  = new google.maps.InfoWindow(),
            chart       = new google.visualization.PieChart(node);
            
            chart.draw(data, options);
            infoWindow.setContent(node);
            infoWindow.open(marker.getMap(),marker);
      }


function initialize() {

    var mapOptions = {
      center: new google.maps.LatLng(-33.891044,151.275537),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        mapOptions);

    var marker1 = new google.maps.Marker({
        position: mapOptions.center,
        map: map
    });
    
    google.maps.event.addListener(marker1, 'click', function() {
      drawChart(this);
    });
         
  } 
google.load('visualization', '1.0', {'packages':['corechart']});