<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">
    {{-- <title>{{ $user->name }}KonserKita Tiket</title> --}}
    </head>
    <style> @import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap");
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body,
        html {
            height: 1000px;
            display: grid;
            font-family: "Staatliches", cursive;
            background: #ffffff;
            color: black;
            font-size: 14px;
            letter-spacing: 0.1em;
        }
        
        .ticket {
            margin: auto;
            display: flex;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
        
        .left {
            display: flex;
            position: relative;
            background-image: url("{{ asset('storage/images/bigu.png') }}");
            background-size: contain;
            opacity: 0.85;
        }

        .left::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgb(159, 125, 228); /* Warna keunguan dengan opasitas */
        mix-blend-mode: multiply; /* Menggabungkan lapisan warna dengan gambar */
    }
        
        .image {
            height: 299px;
            width: 614,91px;
            background-size: contain;
            opacity: 0.85;
        }
        
        .admit-one {
            position: absolute;
            color: rgb(0, 0, 0);
            height: 299px;
            padding: 0 10px;
            letter-spacing: 0.15em;
            display: flex;
            text-align: center;
            justify-content: space-around;
            writing-mode: vertical-rl;
            transform: rotate(-180deg);
            background-color: rgba(128, 71, 240, 0.5);
        }
        
        .admit-one span:nth-child(2) {
            color: white;
            font-weight: 700;
        }
        
        .left .ticket-number {
            height: 250px;
            width: 250px;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            padding: 5px;
        }
        
        .ticket-info {
            padding: 10px 30px;
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: space-between;
            align-items: center;
        }
        
        .date {
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
            padding: 5px 0;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        
        .date span {
            width: 100px;
        }
        
        .date span:first-child {
            text-align: left;
        }
        
        .date span:last-child {
            text-align: right;
        }
        
        .date .june-29 {
            color: #d83565;
            font-size: 20px;
        }
        
        .show-name {
            font-size: 32px;
            font-family: "Nanum Pen Script", cursive;
            color: #000000;
            z-index: 99999;
        }
        
        .show-name h1 {
            font-size: 48px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #ffffff;
        }
        
        .time {
            padding: 10px 0;
            color: #000000;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 10px;
            font-weight: 700;
        }
        
        .time span {
            font-weight: 400;
            color: gray;
        }
        
        .left .time {
            font-size: 16px;
        }
        
        
        .location {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            padding-top: 8px;
            border-top: 1px solid gray;
        }
        
        .location .separator {
            font-size: 20px;
        }
        
        .right {
            width: 180px;
            background-color: rgb(97, 23, 146);
            border-left: 2px dashed #ffffff;
        }
        
        .right .admit-one {
            color: white;
        }
        
        .right .admit-one span:nth-child(2) {
            color: gray;
        }
        
        .right .right-info-container {
            height: 250px;
            padding: 10px 10px 10px 35px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }
        
        .right .show-name h1 {
            font-size: 18px;
        }
        
        .barcode {
            height: 100px;
        }
        
        .barcode img {
            height: 100%;
        }
        
        .right .ticket-number {
            color: rgb(255, 255, 255);
        }

        .leftsk {
            display: flex;
            position: relative;
            width: 180px;
            background-color: rgb(97, 23, 146);
            border-right: 2px dashed #ffffff;
        }

        .rightsk {
            background-image: url("{{ asset('storage/images/bigu.png') }}");
            background-size: contain;
            opacity: 0.85;
        }
    </style>
    </head>
        <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <div class="ticket created-by-anniedotexe">
            <div class="left">
                <div class="image">
                    <p class="admit-one">
                        <span>KONSERKITA KONSERKITA</span>
                        <span>KONSERKITA KONSERKITA</span>
                        <span>KONSERKITA KONSERKITA</span>
                    </p>
                    <div class="ticket-number">
                        <span class=" bg-white">
                            #20030220
                        </span>
                    </div>
                </div>
                <div class="ticket-info">
                    <p class="date">
                        <span class="bg-white z-10">SUNDAY</span>
                        <span class="bg-white z-10">13 Juli</span>
                        <span class="bg-white z-10">2024</span>
                    </p>
                    <div class="show-name">
                        <span class="bg-white z-50">BIGU FESTIVAL</span> <br>
                        <span class="bg-white z-50">Amarramitha</span>
                    </div>
                    <div class="time">
                        <p class="bg-white z-10">10:00 AM <span>TO</span> 11:59 PM</p>
                        <p class="bg-white z-10">DOORS <span>@</span> 09:00 AM</p>
                    </div>
                    <p class="location bg-white z-10"><span>KonserKita</span>
                        <span class="separator"><i class="far fa-smile"></i></span><span>Lap. Aldiron, Pancoran</span>
                    </p>
                </div>
            </div>
            <div class="right">
                <p class="admit-one">
                    <span>KONSERKITA</span>
                    <span>KONSERKITA</span>
                    <span>KONSERKITA</span>
                </p>
                <div class="right-info-container">
                    <div class="show-name">
                        {{-- <h1>{{ $purchase->ticket->konser->title }}</h1> --}}
                    </div>
                    <div class="time">
                        <p>10:00 AM <span>TO</span> 11:59 PM</p>
                        <p>DOORS <span>@</span> 09:00 AM</p>
                    </div>
                    <div class="barcode">
                        <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb"
                            alt="QR code">
                    </div>
                    <p class="ticket-number">
                        #20030220
                    </p>
                </div>
            </div>
        </div>
        </body>
</html>