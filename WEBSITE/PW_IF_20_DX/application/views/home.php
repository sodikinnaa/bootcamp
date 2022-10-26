<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="index.css">

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
    <title>Home</title>
</head>
<body>
<header>
            <a href="<?php echo site_url('Tugas/flex_1') ?>" class="home">HOME > *</a>
        </header>

        <div class="container">
            <div id="content">
                <h1>Kultum </h1>
                <p>Kultum adalah sebuah agenda yang dilakukan dengan tujuan untukm menyampaikna kepada orang yang berada di suatu tempat.</p>
            </div>
            <img src="<?php echo base_url(); ?>logo_montirku.png" />
            
        </div>

        <footer>
            <ul>
                <li>
                    <span>Kultum singkat berbuat kebaikan</span>
                    
                    Di zaman modern ini, di mana teknologi meningkat dan maju, orang kehilangan arah. Dengan perkembangan teknologi saat ini, kita semua perlu menggunakannya untuk pengejaran yang lebih baik dan lebih baik. Dengan pesatnya perkembangan teknologi, seharusnya mudah bagi kita semua untuk meningkatkan ketaatan kita kepada Tuhan.
                    <br>
                <a href="<?php echo site_url('Kultum/berbuat_kebaikan') ?>">Read More ...</a> 
                </li>
                <li>
                    <span>Kultum singkat kiamat</span>
                    Pada saat ini, saya akan berbicara tentang hari terakhir atau hari penghakiman. Dalam Al-Qur'an, khususnya dalam surat Al Qoriah, dijelaskan bahwa semua manusia pada hari kiamat akan seperti nyamuk yang bertebaran. Sedangkan gunung diibaratkan seperti bulu yang bertebara
                    <br>
                    <a href="https://www.gramedia.com/best-seller/kultum-singkat/">Read More ...</a> 
                </li>
                <li>
                    <span> Kultum singkat tentang sholat</span>
                    Rukun agama ini seperti sebuah rumah atau bangunan, jika sebuah rumah atau bangunan memiliki tiang atau pondasi yang kuat, pastilah rumah atau bangunan tersebut akan kokoh dan tidak mudah roboh. Sebaliknya, jika sebuah rumah atau bangunan dibangun tanpa tiang yang kuat, maka bangunan tersebut akan mudah runtuh dan runtuh.
                    <br>
                    <a href="https://www.gramedia.com/best-seller/kultum-singkat/">Read More ...</a> 
                </li>

                <li>
                    <span>Kultum tentang menuntut ilmu</span>
                    Pendidikan adalah cara bagi setiap orang untuk mendapatkan apa yang mereka inginkan dan untuk memutus kemiskinan yang tak berkesudahan. Kemiskinan seringkali berarti kebodohan, maka salah satu cara untuk mencegah kebodohan adalah dengan belajar dan menuntut ilmu.
                    <br>
                    <a href="https://www.gramedia.com/best-seller/kultum-singkat/">Read More ...</a> 
                    <br>
                </li>

                <li>
                    <span> Kultum tentang kesabaran</span>
                    Orang yang berusaha bersabar akan mendapat pahala, sesuai firman Allah dalam Surah Al Baqarah ayat 153. Dalam surat ini Allah menjelaskan bahwa Allah akan menolong orang yang bersabar.
                <br>
                <a href="https://www.gramedia.com/best-seller/kultum-singkat/">Read More ...</a> 
                </li>
                <li>
                    <span>So, what you're saying is...?</span>
                    Libertarians want to live in a world where gay couples can protect their poppy fields with fully automatic weapons.

A world where voluntaryism and property rights are treated with the highest respect.
                </li>
            </ul>
        </footer>
</body>
</html>