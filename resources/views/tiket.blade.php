{{-- @use('Illuminate\Support\Facades\Vite') --}}
{{-- @vite(['resource/js/tiket.js']) --}}
<!doctype html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">
    <style> 
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body,
        html {
            height: 100vh;
            display: grid;
            font-family: "Staatliches", cursive;
            background: #ac6da8;
            color: black;
            font-size: 14px;
            letter-spacing: 0.1em;
        }
        
        .ticket {
            margin: auto;
            display: flex;
            background: white;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
        
        .left {
            display: flex;
        }
        
        .image {
            height: 260px;
            width: 250px;
            background-size: contain;
            opacity: 0.85;
        }
        
        .admit-one {
            position: absolute;
            color: rgb(78, 0, 85);
            font-size: medium;
            height: 260px;
            padding: 0 10px;
            letter-spacing: 0.15em;
            display: flex;
            text-align: center;
            justify-content: space-around;
            writing-mode: vertical-rl;
            background-color: #bd58ec;
            opacity: 0.5;
            transform: rotate(-180deg);
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
            color: #bd58ec;
            font-size: 20px;
        }
        
        .show-name {
            font-size: 32px;
            font-family: "Nanum Pen Script", cursive;
            color: #bd58ec;
        }
        
        .show-name h1 {
            font-size: 48px;
            font-weight: 700;
            letter-spacing: 0.1em;
            color: #4a437e;
        }
        
        .time {
            padding: 10px 0;
            color: #4a437e;
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
            border-left: 1px dashed #404040;
        }
        
        .right .admit-one {
            color: darkgray;
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
            color: gray;
        }
        </style>
</head>

<body>
    <div class="ticket created-by-anniedotexe">
        <div class="left">
            <div class="image" style="background-image: url('{{ asset('storage/' . $purchase->ticket->konser->image) }}');">
                <p class="admit-one">
                    <span>{{ $purchase->ticket->konser->title }}</span>
                    <span>{{ $purchase->ticket->konser->title }}</span>
                    <span>{{ $purchase->ticket->konser->title }}</span>
                </p>
                <div class="ticket-number">
                    <p>
                        #{{ Str::limit($purchase->snap_token, 8) }}
                    </p>
                </div>
            </div>
            <div class="ticket-info" style="background-image: url('http://127.0.0.1:8000/storage/images/bgkertas.jpg')">
                <p class="date">
                    <span>{{ \Carbon\Carbon::parse($purchase->ticket->konser->date_start)->format('d') }}</span>
                    <span class="june-29">{{ \Carbon\Carbon::parse($purchase->ticket->konser->date_start)->format('F') }}</span>
                    <span>{{ \Carbon\Carbon::parse($purchase->ticket->konser->date_start)->format('Y') }}</span>
                </p>
                <div class="show-name">
                    <h1>{{ $purchase->ticket->konser->title }}</h1>
                    <h2>{{ $purchase->user->name }}</h2>
                </div>
                <div class="time">
                    <p>Start <span>AT</span> {{ \Carbon\Carbon::parse($purchase->ticket->konser->time)->format('H:i') }}</p>
                </div>
                <p class="location"><span>KonserKita</span>
                    <span class="separator"><i class="far fa-smile"></i></span><span>{{ $purchase->ticket->konser->lokasi }}</span>
                </p>
            </div>
        </div>
        <div class="right">
            <p class="admit-one" style="background-color: #bd58ec; opacity: 0.5">
                <span>KK</span>
                <span>KK</span>
                <span>KK</span>
            </p>
            <div class="right-info-container">
                <div class="show-name">
                    <h1>{{ $purchase->ticket->konser->title }}</h1>
                </div>
                <div class="time">
                    <p>Start <span> AT </span>{{ \Carbon\Carbon::parse($purchase->ticket->konser->time)->format('H:i') }}</p>
                </div>
                <div class="visible-print text-center">
                    {!! QrCode::size(100)->generate($datastring); !!}
                </div>
                <p class="ticket-number">
                    #{{ Str::limit($purchase->snap_token, 8) }}
                </p>
            </div>
        </div>
    </div>
    
</body>