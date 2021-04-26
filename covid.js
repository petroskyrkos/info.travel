document.querySelector('#submitBtn').addEventListener('click', loadCorona);

function loadCorona(){

	const countryName = document.getElementById('countryName').value;

	let url= "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?";
	url += `country=${countryName}`;

	const data = null;

	const xhr = new XMLHttpRequest();
	xhr.withCredentials = true;

	xhr.addEventListener("readystatechange", function () {
		if (this.readyState === this.DONE) {
				console.log(this.responseText);
		}
	});

	xhr.open("GET", url, true);
	xhr.setRequestHeader("x-rapidapi-key", "b4cd37087dmsha5958e3d81fa6c3p1e30d8jsna07e779f0a1a");
	xhr.setRequestHeader("x-rapidapi-host", "covid-19-coronavirus-statistics.p.rapidapi.com");

	xhr.onload = function(){

		

		if(this.status === 200){
			const response = JSON.parse(this.responseText);
			const covidList = response.data.covid19Stats;
			console.log(covidList)

			if(countryName !==''){
				let output = "";

				covidList.forEach(covidInfo => {
					output +=`
						<div class="col-sm-4 pb-2">
							<div class="card">
								<div class="card-body">
									<div class="card-text">
										<h2 class="text-center card-title">${covidInfo.country} </h2>
										<div>Province: <span style="float: right; color : green">${covidInfo.province}</span></div>
										<div>Confirmed: <span style="float: right; color : orange">${covidInfo.confirmed}</span></div>
										<div>Recovered: <span style="float: right; color : lightgreen">${covidInfo.recovered}</span></div>
										<div>Deaths: <span style="float: right; color : red">${covidInfo.deaths}</span></div>
										<div>Date: <span style="float: right; color : red">${covidInfo.lastUpdate}</span></div>
									</div>
								</div>
							</div>
						</div> 
					`
	
				});
	
				document.querySelector('#result').innerHTML = output;
			}else{
				printMessage('Please type a Country');
			}
			
			


		}
	}


	xhr.send(data);
}

function printMessage(message, className){
	const div= document.createElement('div');
	div.className = className;

	div.appendChild(document.createTextNode(message));
	const searchDiv = document.querySelector('.card-body');
	searchDiv.appendChild(div);

	setTimeout(()=>(
		this.removeMessage()
	), 3000);
}

function removeMessage(){
	const alert = document.querySelector('.alert');
	if(alert){
		alert.remove;
	}
}