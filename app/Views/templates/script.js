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
        'Germany': {
            title: 'Germany',
            text: 'Germany, in the heart of Europe, has Berlin as its capital. The main language is German, and the currency is the Euro. With impressive industrial efficiency, Germany also offers a rich history and diverse cultural events.'
        },
        'Italy': {
            title: 'Italy',
            text: 'Italy, with Rome as its capital, is famous for its Renaissance art, ancient architecture, and delicious cuisine. The official language is Italian, and the currency is the Euro. The Colosseum, the Vatican, and the beauty of Tuscany are standout tourist attractions.'
        },
        'United Kingdom': {
            title: 'United Kingdom',
            text: 'The United Kingdom, composed of England, Scotland, Wales, and Northern Ireland, has London as its capital. The main language is English, and the currency is the British Pound. This country offers a rich cultural diversity and a notable historical heritage.'
        },
        'Portugal': {
            title: 'Portugal',
            text: 'Portugal, with Lisbon as its capital, captivates with its beautiful beaches and landscapes. The official language is Portuguese, and the currency is the Euro. Lisbon is known for its picturesque hills and the melancholic traditional music called fado.'
        },
        'Netherlands': {
            title: 'Netherlands',
            text: 'The Netherlands, with Amsterdam as its capital, is famous for its picturesque canals and vibrant tulips. The main language is Dutch, and the currency is the Euro. The progressive attitude of this country is also notable.'
        },
        'Sweden': {
            title: 'Sweden',
            text: 'Sweden, with Stockholm as its capital, offers an exceptional quality of life and innovative design. The official language is Swedish, and the currency is the Swedish Krona. This Scandinavian country is known for its natural beauty and progressive approach.'
        },
        'Switzerland': {
            title: 'Switzerland',
            text: 'Switzerland, in the heart of Europe, has Bern as its capital. The official languages are German, French, Italian, and Romansh, and the currency is the Swiss Franc. Switzerland is famous for its stunning Alpine landscapes, precision watches, and its reputation in banking.'
        },
        'Norway': {
            title: 'Norway',
            text: 'Norway, with Oslo as its capital, is known for its majestic fjords and Northern Lights. The official language is Norwegian, and the currency is the Norwegian Krone. Norway offers high living standards and a deep connection with nature.'
        }
    };

    if (countryData[country]) {
        countryInfo.innerHTML = `<h1>${countryData[country].title}</h1><p>${countryData[country].text}</p>`;
    } else {
        countryInfo.innerHTML = '<h1>Select a country</h1><p>Select a country from the sidebar to view information.</p>';
    }
}