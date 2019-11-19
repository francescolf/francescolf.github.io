function get(nome) {
    nome = nome.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + nome + '=([^&#]*)');
    var r = regex.exec(location.search);
    return r === null ? '' : decodeURIComponent(r[1].replace(/\+/g, ' '));
}

function fw() {
    var cod = get("codice");
    var txt = get("testo");
    window.location.href("https://francescolf.altervista.org/notifiche?codice=" + cod + "&testo=" + txt);
}
