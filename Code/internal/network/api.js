function apiUrl() {
    return "http://localhost:8120";
}

function endPoints(x) {
    switch(x) {
        case "kota":
            return "/dssbe/getdata/kota";
        case "kategori_wisata":
            return "/dssbe/getdata/kategori_wisata";
        default:
            return "invalid";
    }
}
