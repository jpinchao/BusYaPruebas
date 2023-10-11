mapboxgl.accessToken = 'pk.eyJ1IjoiZ3J1cG81IiwiYSI6ImNsZnIwaGN4YzAzcnIzeG54ZzJ1OHB3a3MifQ.HXBNrlQ69ukj5D6ewH2ijg';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v12',
    center: [-75.49134672, 5.06607618], // Coordenadas del centro del mapa longitud, latitud
    zoom: 15 // Nivel de zoom
});

// an arbitrary start will always be the same
// only the end or destination will change
const start = [-75.49134672, 5.06607618];

// this is where the code for the next step will go
// create a function to make a directions request
async function getRoute(end) {
    // make a directions request using driving profile
    // an arbitrary start will always be the same
    // only the end or destination will change
    const query = await fetch(
        `https://api.mapbox.com/directions/v5/mapbox/driving/${start[0]},${start[1]};${end[0]},${end[1]}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`,
        { method: 'GET' }
    );
    const json = await query.json();
    const data = json.routes[0];
    const route = data.geometry.coordinates;
    const geojson = {
        type: 'Feature',
        properties: {},
        geometry: {
            type: 'LineString',
            coordinates: route
        }
    };
    // if the route already exists on the map, we'll reset it using setData
    if (map.getSource('route')) {
        map.getSource('route').setData(geojson);
    }
    // otherwise, we'll make a new request
    else {
        map.addLayer({
            id: 'route',
            type: 'line',
            source: {
                type: 'geojson',
                data: geojson
            },
            layout: {
                'line-join': 'round',
                'line-cap': 'round'
            },
            paint: {
                'line-color': '#3887be',
                'line-width': 5,
                'line-opacity': 0.75
            }
        });
        map.addLayer({
            id: 'end',
            type: 'circle',
            source: {
                type: 'geojson',
                data: {
                    type: 'FeatureCollection',
                    features: [
                        {
                            type: 'Feature',
                            properties: {},
                            geometry: {
                                type: 'Point',
                                coordinates: [-75.48752725,5.06567008]
                            }
                        }
                    ]
                }
            },
            paint: {
                'circle-radius': 10,
                'circle-color': '#f30'
            }
        });
    }
    // add turn instructions here at the end
}

map.on('load', () => {
    // make an initial directions request that
    // starts and ends at the same location
    getRoute([-75.48752725,5.06567008]);

    // Add starting point to the map
    map.addLayer({
        id: 'point',
        type: 'circle',
        source: {
            type: 'geojson',
            data: {
                type: 'FeatureCollection',
                features: [
                    {
                        type: 'Feature',
                        properties: {},
                        geometry: {
                            type: 'Point',
                            coordinates: start
                        }
                    }
                ]
            }
        },
        paint: {
            'circle-radius': 10,
            'circle-color': '#3887be'
        }
    });

    
    // this is where the code from the next step will go
});












// var directions = new MapboxDirections({
//     accessToken: mapboxgl.accessToken
// });

// map.addControl(directions, 'top-left');
// directions.setOrigin([-73.9876, 40.7661]); // Coordenadas del punto de origen
// directions.setDestination([-74.0204, 40.7209]); // Coordenadas del punto de destino



