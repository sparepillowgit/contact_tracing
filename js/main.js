let map;

function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: { lat: -27.4812533, lng: 152.9930054 },
		zoom: 9,
		mapId: '32211735dce2670a',
		mapTypeControl: false,
		fullscreenControl: false,
		streetViewControl: false
	});

	const iconBase = "images/";

	const icons = {
		site: {
		  icon: iconBase + "site.png",
		}
	  };
	
	const markers = locations.map((location, i) => {
	  marker = new google.maps.Marker({
		position: location,
		icon: icons["site"].icon
	  });
	  marker.addListener("click", () => {
		document.getElementById("contact-popup").style.display = "block";
		document.getElementById("place").innerHTML = "<i class=\"fas fa-map-marker-alt\"></i> " + contacts[i].place;
		document.getElementById("risk").innerHTML = contacts[i].risk;
		document.getElementById("address").innerHTML = contacts[i].address;
		document.getElementById("suburb").innerHTML = contacts[i].suburb;
		document.getElementById("date").innerHTML = "<i class=\"far fa-calendar\"></i> " + contacts[i].date;
		document.getElementById("arrival-time").innerHTML = "Arrival: " + contacts[i].arrival_time;
		document.getElementById("departure-time").innerHTML = "Departure: " + contacts[i].departure_time;
	  });
	  
	  return marker;
	});
	new MarkerClusterer(map, markers, {
	  imagePath:
		"images/m",
	});
}

const locations = [];
  
for (const entry of contacts) {
	locations.push({lat: parseFloat(entry.latitude), lng: parseFloat(entry.longitude)});
}

window.onload = function() {
	document.getElementById("close-popup").addEventListener("click", function() {
		document.getElementById("contact-popup").style.display = "none";
	});

	blinkStatus();
}

function blinkStatus() {
	setInterval(() => {
		document.getElementsByClassName("blink")[0].style.color = "#fff";
		setTimeout(() => {
			document.getElementsByClassName("blink")[0].style.color = "rgb(25, 187, 25)";
		}, 500);
	}, 1000);
}