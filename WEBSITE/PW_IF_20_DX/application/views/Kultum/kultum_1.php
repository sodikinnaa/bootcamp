<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berbuat Kebaikan</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
    font-family: 'Source Sans Pro';
    background:red;
    margin:0;
    color:white;
    display:grid;
    grid-template-columns: auto;
    grid-template-rows: auto 60% 40%;
    grid-template-areas: 
    "header"
    "body"
    "footer";
}

a {
    text-decoration:none;
    color:red;
    font-size:1.8em;
    font-weight:700;
}
img { 
    width:150px;
    justify-self:center;
}
header {
    background:#FFFFFF;
    padding: 1em;
}

.container {
    display:grid;
    grid-template-columns: 66% auto;
    padding: 4em 1em;
}

footer {
    background:#571212;
}

ul {
    display:grid;
    list-style-type:none;
    margin:0;padding:0;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: repeat(2, auto);
}
ul li {
    padding: 2em;
    color:#E98A8A;
}
ul li span {
    display:block;
    font-size:1.4em;
    margin-bottom:1em;
    color: white;
}

header {
    grid-area: header;
    /* Properti lain tidak ditulis agar lebih singkat */
}

.container {
    grid-area: body;
    /* Properti lain tidak ditulis agar lebih singkat */
}

footer {
    grid-area: footer;
    /* Properti lain tidak ditulis agar lebih singkat */
}

.next{
    margin-left: auto;
}

@media only screen and (max-width: 500px) {

body {
    grid-template-areas: 
        "header"
        "footer"
        "body";
}

}
    </style>
</head>
<body>
<header>
        <a href="<?php echo site_url('Tugas') ?>" class="home">HOME</a>
</header>
<div class="container">
            <div id="content">
                <h1>Kultum singkat berbuat kebaikan </h1>
                <p>Assalamualaikum Warahmatullahi Wabarakatuh.
                Pertama-tama marilah kita panjatkan puja dan puji syukur hanya kepada Allah Subhanahu Wata'ala yang masih memberikan kita semua banyak nikmat kesehatan, nikmat waktu luang, berkah iman dan berkah Islam, sehingga kita semua dapat mengikuti acara tersebut. Semoga Tuhan menjadikan ini indah.

                <br><br>

                Sesungguhnya janganlah kita lupa sholawat dan salam kepada junjungan kita Nabi Muhammad Shallallahu Alaihi Wasallam, karena beliau telah membawa kita semua dari zaman jahiliyah, masa jahiliyah hingga masa indah seperti kita semua dan - tunggulah sekarang. Semoga kita semua termasuk orang-orang yang menerima permintaannya di hari terakhir, di hari penghakiman terakhir. Amin. Di zaman modern ini, di mana teknologi meningkat dan maju, orang kehilangan arah. Dengan perkembangan teknologi saat ini, kita semua perlu menggunakannya untuk pengejaran yang lebih baik dan lebih baik. Dengan perkembangan teknologi yang semakin pesat ini, seharusnya mudah bagi kita semua untuk meningkatkan ketaatan kita kepada Allah.

                <br><br>
                Namun sayangnya, kebanyakan dari kita menjadi orang lain yang terlalu sibuk dengan pekerjaan kita yang baik dan perkembangan teknologi benar-benar membuat kita lupa untuk mendekatkan diri kepada Allah.
                <br><br>
                Sebagai manusia yang telah diberi akal oleh Allah, kita semua harus saling bersaing dalam menyebarkan kebaikan dengan akal sehat dan kecanggihan teknologi modern. Karena, seperti yang kita ketahui, kita semua dapat dengan cepat dan mudah menyebarkan banyak hal baik melalui media sosial, internet, di mana saja di dunia.
                <br><br>
                Ketika kita menebar kebaikan, maka kebaikan yang kita sebarkan bisa menjadi sedekah. Di sisi lain, jika kita menyebarkan kejahatan, maka kita akan memiliki dosa jariyah yang berlanjut bahkan setelah kematian kita dan merupakan contoh yang buruk bagi orang-orang.
                <br><br>
                
            </p>
            </div>
            
        </div>
</body>
</html>