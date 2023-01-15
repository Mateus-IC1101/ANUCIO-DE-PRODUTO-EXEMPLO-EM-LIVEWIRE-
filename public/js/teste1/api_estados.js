const URL = 'http://www.geonames.org/childrenJSON?geonameId=3469034';

async function buscarEstados(){
    const response = await fetch(URL, {method: 'GET'});
    const data = await response.json();

    var __HTML__ = '<select id="paises" name="paises[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">';
    __HTML__ += '<option >Selecione um estado</option>';

    await data.geonames.forEach(element => {
        console.log(element);
        __HTML__ += `<option value="${element.geonameId}>${element.toponymName}</option>`;
    });

    __HTML__ += '</select>';
    document.querySelector('.selectApi').innerHTML = __HTML__;
}

buscarEstados();

window.addEventListener('notifyError', () => {
    buscarEstados();
})



