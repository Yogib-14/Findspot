async function GetKota() {
    const endPointURL = apiUrl();
    const address = endPoints("kota");
    await fetch(endPointURL + address)
        .then(response => response.json())
        .then(data => {
            LoadKota(data);
        })
        .catch(function(e) {
            console.log(e);
        });
}

function LoadKota(data) {
    const kota = document.getElementById("kota");
    // console.log(data); 
    
    for(var i = 0; i < data["kota"].length; i++) {
        const optionKota = document.createElement("option");
        optionKota.append(data["kota"][i].kota);
        kota.appendChild(optionKota);
    }
}


async function GetKategori() {
    const endPointURL = apiUrl();
    const address = endPoints("kategori_wisata");
    await fetch(endPointURL + address)
        .then(response => response.json())
        .then(data => {
            LoadKategori(data);
        })
        .catch(function(e) {
            console.log(e);
        });
}

function LoadKategori(data) {
    const kategori = document.getElementById("kategori_wisata");
     console.log(data); 
    
    for(var i = 0; i < data["kategori_wisata"].length; i++) {
        const optionKategori = document.createElement("option");
        optionKategori.append(data["kategori_wisata"][i].kategori);
        kategori.appendChild(optionKategori);
    }
}