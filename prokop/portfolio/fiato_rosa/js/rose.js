
// let month = 'januar'
let allMonth = [
    {month: 'január',
    index: 0},
    {month: 'február',
    index: 1},
    {month: 'marec',
    index: 2},
    {month: 'apríl',
    index: 3},
    {month: 'máj',
    index: 4},
    {month: 'jún',
    index: 5},
    {month: 'júl',
    index: 6},
    {month: 'august',
    index: 7},
    {month: 'september',
    index: 8},
    {month: 'október',
    index: 9},
    {month: 'november',
    index: 10},
    {month: 'december',
    index: 11},
]

let fiato = [
    {name:  'Veronika Nemcová',
    index: 0},
    {name:  'Róbert Chovanec',
    index: 1},
    {name:  'Daniela Mäsiarová',
    index: 2},
    {name:  'Jana Maďarová',
    index: 3},
    {name:  'Zuzana Maďarová',
    index: 4},
    {name:  'Nikola Kurtyová',
    index: 5},
    {name:  'Mária Kuchtová',
    index: 6},
    {name:  'Miriam Kažimirová',
    index: 7},
    {name:  'Daniela Maďarová',
    index: 8},
    {name:  'Martin Mika',
    index: 9},
    {name:  'volne 1',
    index: 10},
    {name:  'Marcel Kusenda',
    index: 11},
    {name:  'Gabriela Brehuvová',
    index: 12},
    {name:  'volne 2',
    index: 13},
    {name:  'Martin Brejčák',
    index: 14},
    {name:  'Stanislav Prokop',
    index: 15},
    {name:  'Zuzana Prokopová',
    index: 16},
    {name:  'Lukáš Ondeček',
    index: 17},
    {name:  'Nikola Mihalčinová',
    index: 18},
    {name:  'Antónia Labášová',
    index: 19},
    {name:  'Lucia Labášová',
    index: 20},
    {name:  'Martina Steranková',
    index: 21},
    {name:  'Denisa Patkaňová',
    index: 22},
    {name:  'Mária Stojkovičová',
    index: 23},
    {name:  'Stanislava Stojkovičová',
    index: 24},
]

let rose = [
    
    // SLAVNOSTNY
    {name: 'Ježiš, ktorý slávne vstal z mŕtvych',
    index: 0},
    {name: 'Ježiš, ktorý slávne vystúpil do neba',
    index: 1},
    {name: 'Ježiš, ktorý nám zoslal Ducha Svätého',
    index: 2},
    {name: 'Ježiš, ktorý ťa, Panna, vzal do neba',
    index: 3},
    {name: 'Ježiš, ktorý ťa, Panna, v nebi korunoval',
    index: 4},

    // RADOSTNY  
    {name: 'Ježiš, ktorého si, Panna, z Ducha Svätého počala',
    index: 5},
    {name: 'Ježiš, ktorého si, Panna, pri návšteve Alžbety v živote nosila',
    index: 6},
    {name: 'Ježiš, ktorého si, Panna, v Betleheme porodila',
    index: 7},
    {name: 'Ježiš, ktorého si, Panna, so svätým Jozefom v chráme obetovala',
    index: 8},
    {name: 'Ježiš, ktorého si, Panna, so svätým Jozefom v chráme našla',
    index: 9},

    // SVETLA
    {name: 'Ježiš, ktorý bol pokrstený v Jordáne a začal svoje verejné účinkovanie',
    index: 10},
    {name: 'Ježiš, ktorý zázrakom v Káne Galilejskej otvoril srdcia učeníkov pre vieru',
    index: 11},
    {name: 'Ježiš, ktorý ohlasoval Božie kráľovstvo a vyzýval ľud na pokánie',
    index: 12},
    {name: 'Ježiš, ktorý sa ukázal v božskej sláve na vrchu premenenia',
    index: 13},
    {name: 'Ježiš, ktorý nám dal seba samého za pokrm a nápoj v Oltárnej sviatosti',
    index: 14},

    // BOLESTNY
    {name: 'Ježiš, ktorý sa pre nás krvou potil',
    index: 15},
    {name: 'Ježiš, ktorý bol pre nás bičovaný',
    index: 16},
    {name: 'Ježiš, ktorý bol pre nás tŕním korunovaný',
    index: 17},
    {name: 'Ježiš, ktorý pre nás kríž niesol',
    index: 18},
    {name: 'Ježiš, ktorý bol pre nás ukrižovaný',
    index: 19},
    
    // MILOSRDENSTVA
    {name: 'Prvý desiatok Ruženca milosrdenstva',
    index: 20},
    {name: 'Druhý desiatok Ruženca milosrdenstva',
    index: 21},
    {name: 'Tretí desiatok Ruženca milosrdenstva',
    index: 22},
    {name: 'Štvrtý desiatok Ruženca milosrdenstva',
    index: 23},
    {name: 'Piaty desiatok Ruženca milosrdenstva',
    index: 24},
]



let filters = {
    searchText: ''
}
let members = document.querySelector('#members')
let myMonth = document.querySelector('#month')
let myName = document.querySelector('#name')
let myMember = document.querySelector('#full-name')



// funkcia na vratenie poloziek podla dlzky pola - nepouzite nikde
// function getOption() {
//     for (let i = 0; i < allMonth.length; i++) {
//         const element = allMonth[i];
//         return(element.index)
//     }
//   }

// getOption()



// 
// VYTVORENIE ZOZNAMU CLENOV AKO <p><a>MENO</a></p> + PRIRADENIE VALUE
// 
fiato.forEach(member => {
});
for (let i = 0; i < fiato.length; i++) {
    const index = i;
    let oneMember = document.createElement('p')
    let oneMemberLink = document.createElement('a')
    
    oneMember.setAttribute('class', 'member')
    oneMemberLink.textContent = fiato[i].name
    oneMemberLink.setAttribute('href', '#')
    
    members.appendChild(oneMember)
    oneMember.appendChild(oneMemberLink)
    oneMemberLink.setAttribute('value', index)
}



// 
// VYHLADAVANIE CLENOV PODLA MENA
// 
const renderMembers = function(ourMembers, tryToFind) {
    let arrayResult = ourMembers.filter(function(oneSuspect) {
        return oneSuspect.name.toLowerCase().includes(tryToFind.searchText.toLowerCase())
    })

    document.querySelector('.result').innerHTML = ''

    arrayResult.forEach(function(oneMember) {
        let paragraph = document.createElement('p')
        paragraph.innerHTML = `${oneMember.name}`
        document.querySelector('.result').appendChild(paragraph)
        
        paragraphValue = paragraph.textContent
        console.log(paragraphValue)
    })
}

myMember.addEventListener('input', function(event) {
    filters.searchText = event.target.value
    renderMembers(fiato, filters)
})
    
    


// 
// VYTVORENIE SELECT ZOZNAMU MIEN
// 

fiato.forEach(member => {
    let nameOption = document.createElement('option')

    nameOption.textContent = member.name
    nameOption.setAttribute('class', 'actual-name')
    nameOption.setAttribute('value', member.index)

    myName.appendChild(nameOption)    
})


// 
// AKTUALNY DATUM
// 

var today = new Date();
var dd = String(today.getDate()).padStart(1, '0');
var mm = String(today.getMonth() + 1).padStart(1, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '.' + mm + '.' + yyyy;
document.querySelector('#date').textContent = today;




// 
// PO POTVRDENI MENA CEZ VYHLADAJ MI VYPISE DESIATOK NA AKTUALNY MESIAC PRE DANE MENO
// 
let myForm = document.querySelector('#my-form')
let resultSection = document.querySelector('.result-section')

myForm.addEventListener('submit', function(event) {
    event.preventDefault()

    // odchytim index mena zo select zoznamu vo formulari
    i = event.target[0].value
    
    yyyy = Number(yyyy)
    mm = Number(mm)
    i = Number(i) 

    let actualYearTens = (yyyy - 2022)*12 + i + mm - 1 // aktualny desiatok od zaciatku ratania (januar 2022) => pocet mesiacov od zaciatku pocitania (januar 2022) + index mena(ratany od 0) + aktualny mesiac(ratany od 1) -1 (pretoze mesiac je ratany od 1)
    let number = Number(actualYearTens)
    let resultName = fiato[i].name                  // hladane meno

    if (actualYearTens > 24) {
        number = (actualYearTens % 25)
        
        let resultTens = rose[number].name
        let paragraph = document.createElement('p')
        
        // tento console.log si nechavam pre buducu kontrolu
        // console.log(`hladany rok ${yyyy}`)
        // console.log(`Index desiatku v tento mesiac v hladanom roku: ${number} - ${rose[number].name}`)
        // console.log(`aktualny index desiatku od zaciatku ${actualYearTens}`)
        
        resultSection.innerHTML = ''
        paragraph.innerHTML = `<strong>${resultName}</strong>, tvoj desiatok na aktuálny mesiac je: <strong>... ${resultTens}</strong>.`
        resultSection.appendChild(paragraph)
        
    } else {
        let resultTens = rose[number].name
        let paragraph = document.createElement('p')

        // tento console.log si nechavam pre buducu kontrolu
        // console.log(`hladany rok ${yyyy}`)
        // console.log(`Index desiatku v tento mesiac v hladanom roku: ${number} - ${rose[number].name}`)
        // console.log(`aktualny index desiatku od zaciatku ${actualYearTens}`)
        
        resultSection.innerHTML = ''
        paragraph.innerHTML = `<strong>${resultName}</strong>, tvoj desiatok na aktuálny mesiac je: <strong>... ${resultTens}</strong>.`
        resultSection.appendChild(paragraph)
        
    }
})
