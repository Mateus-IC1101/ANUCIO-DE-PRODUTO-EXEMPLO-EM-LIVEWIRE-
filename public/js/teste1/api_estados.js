async function buscarEstados(){
    const URL = 'http://www.geonames.org/childrenJSON?geonameId=3469034';
    const response = await fetch(URL, {method: 'GET'});
    const data = await response.json();
    localStorage.setItem('estados_api', JSON.stringify(data));
    console.log('set local storage!');
}

buscarEstados();



