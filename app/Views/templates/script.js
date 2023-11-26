function showCountry(country) {
    var countryInfo = document.getElementById('country-info');

    // Contenido para cada país
    var countryData = {
        'Spain': {
            title: 'Spain',
            text: 'Spain, located on the Iberian Peninsula, is known for its rich history and diverse culture. The capital is Madrid, and the official language is Spanish. The currency used is the Euro. In addition to its sunny beaches, Spain is famous for its lively festivals and delicious cuisine.'
        },
        'France': {
            title: 'France',
            text: 'France, with Paris as its elegant capital, is famous for its art, fashion, and exquisite cuisine. The official language is French, and the currency is the Euro. The Eiffel Tower and the Louvre are just some of the iconic attractions this country offers.'
        },
    };

    if (countryData[country]) {
        countryInfo.innerHTML = `<h1>${countryData[country].title}</h1><p>${countryData[country].text}</p>`;
    } else {
        countryInfo.innerHTML = '<h1>Select a country</h1><p>Select a country from the sidebar to view information.</p>';
    }
}