function  getStorageEstados(){

    var __HTML__ = '<select id="estados" wire:model=estados name="estados" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">';
    __HTML__ += '<option >Selecione um estado</option>';

    const data_storage = JSON.parse(localStorage.getItem('estados_api'));
    data_storage.geonames.forEach(element => {
        // console.log(element);
        __HTML__ += `<option  value="${element.toponymName}">${element.toponymName}</option>`;
    });

    __HTML__ += '</select>';
    document.querySelector('.selectApi').innerHTML = __HTML__;
}

getStorageEstados();
