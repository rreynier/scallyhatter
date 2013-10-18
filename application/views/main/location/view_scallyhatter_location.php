<?php $this->site_model->set_title('Location - ' . $scallyhatter['address'] . ', ' . $scallyhatter['city'] . ', ' . $scallyhatter['state'] . ', ' . $scallyhatter['zip']); ?>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var geocoder;
        var map;

        geocoder = new google.maps.Geocoder();
        var myOptions = {
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);


        var address = $('#address').html();
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    });
</script>


<div id="maincontent">
    <h1>Location</h1>
    <h2 id="address"><?php echo $scallyhatter['address'] . ', ' . $scallyhatter['city'] . ', ' . $scallyhatter['state'] . ', ' . $scallyhatter['zip']; ?></h2>
    <div id="getdirections">
        <label for="id">Enter Your Location: </label>
        <input name="frominput" id="frominput" value="" />
        <input type="hidden" name="toinput" id="toinput" value="<?php echo $scallyhatter['address'] . ', ' . $scallyhatter['city'] . ', ' . $scallyhatter['state'] . ', ' . $scallyhatter['zip']; ?>" />
        <input onclick="Demo.getDirections();" type="submit" value="Get Directions" class="button"/>
    </div>
    <div id="mapcanvas">

    </div>

    <div id="directions">

    </div>
</div>



<script type="text/javascript">


    var Demo = {

        // HTML Nodes
        mapContainer: document.getElementById('mapcanvas'),
        dirContainer: document.getElementById('directions'),
        fromInput: document.getElementById('frominput'),
        toInput: document.getElementById('toinput'),

        // API Objects
        dirService: new google.maps.DirectionsService(),
        dirRenderer: new google.maps.DirectionsRenderer(),
        map: null,

        showDirections: function(dirResult, dirStatus) {
            if (dirStatus != google.maps.DirectionsStatus.OK) { 
                return;
            }

            // Show directions
            Demo.dirRenderer.setMap(Demo.map);
            Demo.dirRenderer.setPanel(Demo.dirContainer);
            Demo.dirRenderer.setDirections(dirResult);
        },

        getSelectedTravelMode: function() {

            return google.maps.DirectionsTravelMode.DRIVING;

        },

        getSelectedUnitSystem: function() {
            return google.maps.DirectionsUnitSystem.IMPERIAL;
        },

        getDirections: function() {

            var fromStr = Demo.fromInput.value;
            var toStr = Demo.toInput.value;
            var dirRequest = {
                origin: fromStr,
                destination: toStr,
                travelMode: Demo.getSelectedTravelMode(),
                unitSystem: Demo.getSelectedUnitSystem(),
                provideRouteAlternatives: true
            };
            Demo.dirService.route(dirRequest, Demo.showDirections);
        },

        init: function() {
            var geocoder;
            var map;

            geocoder = new google.maps.Geocoder();
            var myOptions = {
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            Demo.map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);


            var address = $('#toinput').val();
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    Demo.map.setCenter(results[0].geometry.location);    
                    var marker = new google.maps.Marker({
                        map: Demo.map,
                        position: results[0].geometry.location,
                        icon: '/assets/images/icons/skull.png'
                    });
                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }   
            });

            // Show directions onload
            //Demo.getDirections();
        }
    };

    // Onload handler to fire off the app.
    google.maps.event.addDomListener(window, 'load', Demo.init);
</script>
