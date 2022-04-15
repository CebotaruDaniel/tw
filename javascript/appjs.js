
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

const getBtcData = async () => {
    fetch('https://min-api.cryptocompare.com/data/price?fsym=BNB&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-bnb").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
    fetch('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-eth").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
    fetch('https://min-api.cryptocompare.com/data/price?fsym=SOL&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-sol").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
    fetch('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-btc").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
    fetch('https://min-api.cryptocompare.com/data/price?fsym=LTC&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-ltc").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
    fetch('https://min-api.cryptocompare.com/data/price?fsym=DOGE&tsyms=USD')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById("pret-doge").innerHTML = '<b class="coin">' + data.USD + ' USD</b>'
        });
}
getBtcData();


icon = document.getElementById()
