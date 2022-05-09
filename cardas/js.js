
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'broadway-wine.p.rapidapi.com',
		'X-RapidAPI-Key': '320b952ed2mshed3e2c79675775ap16a756jsne61967693110'
	}
};

fetch('https://broadway-wine.p.rapidapi.com/', options)
	.then(response => response.json())
	.then(response => console.log(response))
	.catch(err => console.error(err));