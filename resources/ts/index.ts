let map: google.maps.Map;
let marker: google.maps.Marker;
let geocoder: google.maps.Geocoder;

function initMap(): void {
  const map = new google.maps.Map(document.getElementById("map") as HTMLElement, {
    mapId: '516b33ebc391374e',
    zoom: 12,
    mapTypeControl: false,
    streetViewControl: false,
  });

  let dName = [], dAddress = [], it=0, srit=0;
  var dataName = document.getElementsByClassName('accordion-item');
  var dataAddress = document.getElementsByClassName('accordion-item');
  for (const item of dataName) {
    dName[it]=item.dataset.name;
    it++;
  }
  for (const item of dataAddress) {
    dAddress[srit]=item.dataset.address;
    srit++;
  }
 
  let locations = [];
  for(i=0; i<dAddress.length; i++) {
    locations[i]=[dName[i],dAddress[i]]
  }
  var infowindow = new google.maps.InfoWindow();
  var geocoder = new google.maps.Geocoder();

  var marker, i, id;
  for (i = 0; i < locations.length; i++) {
    geocodeAddress(locations[i], i);
  }

function geocodeAddress(location, id) {
geocoder.geocode( { 'address': location[1]}, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {

    map.setCenter(results[0].geometry.location);
    createMarker(results[0].geometry.location,location[0]+"<br>"+location[1], id);
  }
  else
  {
    alert("some problem in geocode" + status);
  }
}); 
}

function createMarker(latlng,html,id){
var marker = new google.maps.Marker({
  position: latlng,
  map: map,
  id: id
}); 

for (let i = 0; i < locations.length; i++) {
  google.maps.event.addListener(marker, 'mouseover', function() { 
    infowindow.setContent(html);
    infowindow.open(map, marker);
  });
  google.maps.event.addListener(marker, 'mouseout', function() { 
    infowindow.close();
  });
  marker.addListener("click", () => {
    map.setZoom(16);
    map.setCenter(marker.getPosition());
  });
}
}

let h = 0;
let accButtons = document.getElementsByClassName("accordion-button");
for (const item of accButtons) {
  item.addEventListener("click", function() {
    
    map.setZoom(16);
    geocoder.geocode( { 'address': item.dataset.address},function(results, status){
      if (status == google.maps.GeocoderStatus.OK) {

        map.setCenter(results[0].geometry.location);
      }
      else
      {
        alert("some problem in geocode" + status);
      }
    }); 
    h++;
  })
  }

}

declare global {
  interface Window {
    initMap: () => void;
  }
}
window.initMap = initMap;
export {};