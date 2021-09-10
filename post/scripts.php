 <!-- js section -->
 <script src="../../../js/jquery.min.js"></script>
 <script src="../../../js/bootstrap.min.js"></script>
 <!-- menu js -->
 <script src="../../../js/menumaker.js"></script>
 <!-- wow animation -->
 <script src="../../../js/wow.js"></script>
 <!-- custom js -->
 <script src="../../../js/custom.js"></script>
 <!-- revolution js files -->
 <script src="../../../revolution/js/jquery.themepunch.tools.min.js"></script>
 <script src="../../../revolution/js/jquery.themepunch.revolution.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.actions.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.carousel.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.migration.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.navigation.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.parallax.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script src="../../../revolution/js/extensions/revolution.extension.video.min.js"></script>
 <!-- map js -->
 <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             styles: [
             {
              elementType: 'geometry',
              stylers: [{color: '#fefefe'}]
            },
            {
              elementType: 'labels.icon',
              stylers: [{visibility: 'off'}]
            },
            {
              elementType: 'labels.text.fill',
              stylers: [{color: '#616161'}]
            },
            {
              elementType: 'labels.text.stroke',
              stylers: [{color: '#f5f5f5'}]
            },
            {
              featureType: 'administrative.land_parcel',
              elementType: 'labels.text.fill',
              stylers: [{color: '#bdbdbd'}]
            },
            {
              featureType: 'poi',
              elementType: 'geometry',
              stylers: [{color: '#eeeeee'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#757575'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#e5e5e5'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9e9e9e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#eee'}]
            },
            {
              featureType: 'road.arterial',
              elementType: 'labels.text.fill',
              stylers: [{color: '#3d3523'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#eee'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#616161'}]
            },
            {
              featureType: 'road.local',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9e9e9e'}]
            },
            {
              featureType: 'transit.line',
              elementType: 'geometry',
              stylers: [{color: '#e5e5e5'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'geometry',
              stylers: [{color: '#000'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#c8d7d4'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#b1a481'}]
            }
            ]
          });
           
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
       </script>
       <!-- google map js -->
       <script src="../../../https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
       <!-- end google map js -->


       <!-- Modal -->
       <div class="modal fade" id="search_bar" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
                  <div class="navbar-search">
                    <form action="#" method="get" id="search-global-form" class="search-global">
                      <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                      <button class="search-global__btn"><i class="fa fa-search"></i></button>
                      <div class="search-global__note">Begin typing your search above and press return to search.</div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Model search bar -->


      <script type="text/javascript">
        $(window).load(function(){
          setTimeout(function(){
            $('#myModal').modal('show');
          }, 5000);
        });
      </script>
     <!--  <script type="text/javascript">
        $(window).on('load', function() {
          $('#myModal').modal('show');
        });
      </script> -->

       <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-success" style="">
              <h2 class="modal-title" style="text-align: center; color: white">Call for Paper!!!</h2><br>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">

              <div class="text-center">
                <a href="submit_publications"><h2 style="text-decoration: none">Volume 3 Number 2</h2><p></p></a>
                <h3>Submit Your manuscripts for on-line publication at lojaspapersubmit@gmail.com.</h3>
                <h3>Deadline for submission: September 14, 2021</h3>
                <h3>For more enquiries click below</h3>
              </div>
              <div class="text-center"><img src="../../../images/call_for_paper.jpeg" width="50%">

              </div>
              <div class="text-center"><a href="../../../call_for_paper" class="btn btn-success">View More</a></div>
              
              

            </div>
          </div>
        </div>
      </div>