{{-- @use('Illuminate\Support\Facades\Vite') --}}
{{-- @vite(['resource/js/tiket.js']) --}}
<!doctype html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- <link rel="stylesheet" href="{{ asset('css/tiket.css') }}"> --}}
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">
    {{-- <title>{{ $user->name }}KonserKita Tiket</title> --}}
    <style>
        /* {!! Vite::content('resources/css/tiket.css') !!} */
    </style>
    <script>
        // {!! Vite::content('resources/js/tiket.js') !!}
    </script>
</head>

<body>
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate($datastring); !!}
        <p>Scan</p>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <div class="ticket" style="margin: auto; display: flex; background: white; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; ">
        <div class="left" style="display: flex; ">
            <div class="image" style="height: 250px; width: 250px; background-image: url(&quot;https://media.pitchfork.com/photos/60db53e71dfc7ddc9f5086f9/1:1/w_1656,h_1656,c_limit/Olivia-Rodrigo-Sour-Prom.jpg&quot;); background-size: contain; opacity: 0.85; ">
                <p class="admit-one" style="position: absolute; color: darkgray; height: 250px; padding: 0 10px; letter-spacing: 0.15em; display: flex; text-align: center; justify-content: space-around; writing-mode: vertical-rl; transform: rotate(-180deg); ">
                    <span style="margin: 0; padding: 0; box-sizing: border-box; ">ADMIT ONE</span>
                    <span style="color: white; font-weight: 700; ">ADMIT ONE</span>
                    <span style="margin: 0; padding: 0; box-sizing: border-box; ">ADMIT ONE</span>
                </p>
                <div class="ticket-number" style="height: 250px; width: 250px; display: flex; justify-content: flex-end; align-items: flex-end; padding: 5px; ">
                    <p style="margin: 0; padding: 0; box-sizing: border-box; ">
                        #20030220
                    </p>
                </div>
            </div>
            <div class="ticket-info" style="padding: 10px 30px; display: flex; flex-direction: column; text-align: center; justify-content: space-between; align-items: center; ">
                <p class="date" style="border-top: 1px solid gray; border-bottom: 1px solid gray; padding: 5px 0; font-weight: 700; display: flex; align-items: center; justify-content: space-around; ">
                    <span style="text-align: left; ">TUESDAY</span>
                    <span class="june-29" style="color: #d83565; font-size: 20px; ">JUNE 29TH</span>
                    <span style="text-align: right; ">2021</span>
                </p>
                <div class="show-name" style="font-size: 32px; font-family: &quot;Nanum Pen Script&quot;, cursive; color: #d83565; ">
                    <h1 style="font-size: 48px; font-weight: 700; letter-spacing: 0.1em; color: #4a437e; ">SOUR Prom</h1>
                    <h2 style="margin: 0; padding: 0; box-sizing: border-box; ">Olivia Rodrigo</h2>
                </div>
                <div class="time" style="font-size: 16px; ">
                    <p style="margin: 0; padding: 0; box-sizing: border-box; ">8:00 PM <span style="font-weight: 400; color: gray; ">TO</span> 11:00 PM</p>
                    <p style="margin: 0; padding: 0; box-sizing: border-box; ">DOORS <span style="font-weight: 400; color: gray; ">@</span> 7:00 PM</p>
                </div>
                <p class="location" style="display: flex; justify-content: space-around; align-items: center; width: 100%; padding-top: 8px; border-top: 1px solid gray; "><span style="margin: 0; padding: 0; box-sizing: border-box; ">East High School</span>
                    <span class="separator" style="font-size: 20px; "><i class="far fa-smile" style="margin: 0; padding: 0; box-sizing: border-box; "></i></span><span style="margin: 0; padding: 0; box-sizing: border-box; ">Salt Lake City, Utah</span>
                </p>
            </div>
        </div>
        <div class="right" style="width: 180px; border-left: 1px dashed #404040; ">
            <p class="admit-one" style="color: darkgray; ">
                <span style="margin: 0; padding: 0; box-sizing: border-box; ">ADMIT ONE</span>
                <span style="color: gray; ">ADMIT ONE</span>
                <span style="margin: 0; padding: 0; box-sizing: border-box; ">ADMIT ONE</span>
            </p>
            <div class="right-info-container" style="height: 250px; padding: 10px 10px 10px 35px; display: flex; flex-direction: column; justify-content: space-around; align-items: center; ">
                <div class="show-name" style="font-size: 32px; font-family: &quot;Nanum Pen Script&quot;, cursive; color: #d83565; ">
                    <h1 style="font-size: 18px; ">SOUR Prom</h1>
                </div>
                <div class="time" style="padding: 10px 0; color: #4a437e; text-align: center; display: flex; flex-direction: column; gap: 10px; font-weight: 700; ">
                    <p style="margin: 0; padding: 0; box-sizing: border-box; ">8:00 PM <span style="font-weight: 400; color: gray; ">TO</span> 11:00 PM</p>
                    <p style="margin: 0; padding: 0; box-sizing: border-box; ">DOORS <span style="font-weight: 400; color: gray; ">@</span> 7:00 PM</p>
                </div>
                <div class="barcode" style="height: 100px; ">
                    <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&amp;s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code" style="height: 100%; ">
                </div>
                <p class="ticket-number" style="color: gray; ">
                    #20030220
                </p>
            </div>
        </div>
    </div>
    
</body>