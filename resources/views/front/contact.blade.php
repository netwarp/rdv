@extends('front._layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="h3">Contact</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="#" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom Complet</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" rows="4">{{ old('message') }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Envoie</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Clé publique</div>
                    <div class="panel-body">
                        <p>Si vous le souhaitez vous pouvez nous envoyer des messages chiffrés avec notre clé PGP.</p>
                        <!--googleoff: index-->
                        <div class="well">
                            -----BEGIN PGP PUBLIC KEY BLOCK----- <br>
                            Version: GnuPG v2 <br> <br>

                            mQGNBFl92gEBDADgTGuMeC5gjl4IO2yTzAAzaYyI2qRc0xwkGE0HNvjVhyNl6XlW <br>
                            xqFxF8NFyvcQ3WNsh5XKETrt9wW/50+qbECjpOq5RDouEvmvysZcGM+znXixUkL9 <br>
                            KlQp6nOaDnCcoT/PoGnwPjIlXh6uiLSkO/2tVvYxfZ4m4j3BUl0a8w7UaCTCUfT/ <br>
                            BnqA2+y724fB/+FwwiOHb6xNiuUz5rBDL513drqONFy227tpZuPTh/Ak1YUbSWyX <br>
                            qyrzRMPH/wpIC9hXY6SJxi7FD11CUb3PXLMU03hAuwpn2/ArMIMilyLB7fYyyu/O <br>
                            03B/Fcay2uGYrWVkGYlMz1uIN88C+lfenKICmFAN8tpqr0zPogoyv9DlhzoZBzfb <br>
                            IQsHXus7ZNJwtC/mKVHjlUb1KUakOdJ+WUBe1PAapyWPN8jfoM+mV9fY2TLh3AZK <br>
                            M5rv257h2EnDwCF5UcsIVipnBajnO5GtqbuZTzPvfgEm2Q2PF4wqrxXTyxu7y4st <br>
                            ULSVbcYxvs4dEPUAEQEAAbQZdGVzdCB0ZXN0IDx0ZXN0QHRlc3QuY29tPokBuQQT <br>
                            AQgAIwUCWX3aAQIbAwcLCQgHAwIBBhUIAgkKCwQWAgMBAh4BAheAAAoJEEJYYGoJ <br>
                            ajw4IscL/iMIDD2vkS0WYefJ4It6vliPeFdC5P/bwxFrXu9jvaj3E0QRsOwOLkFX <br>
                            66kkOdPNt1eiDwac1wWgDZW3bypsX7RiSD4gTyQPPrrcxEw+M+Fib8E5RClbr2BX <br>
                            PVOlaYZ+sk4Yk42+Zp6X5Bp4K9ijGkCixzllANIVIVvATaOeEzzILrEQrAM7AKYf <br>
                            gSk/hoSL7zhf8eK5TltTtS08rBqbQkHjpLcvqjQa3/Or5Vcz+f4HZDdqpSVvjx3E <br>
                            zGLycPSRtMq1I4WwIEJwLiId30gzm0BSho5OENSGmledhgZRxlNuvZacsRKIH9ps <br>
                            Swxt/lc7T0VOAefQfiDjSgVNvQTJRze7yoDpuE7Ofse3/2ycgw0a/OZcoI5Ye9Kl <br>
                            XtcCGkm9bwe1jr9Fnm/cot3Qbcs6H1D8vSvE5ZfruqoNW9n9X7iyCBvOEFk7gHkm <br>
                            xedR5og8/YyY7notI2CtS3pc6IidL/rVYXuHxQY6BMpb7DgGIm3HrmzzDBEasBqC <br>
                            qbhZTYheV7kBDQRZfdoBAQgAx1h1qWillK6F393hpcKSRXY/k9O3A1WXvrvFAeZM <br>
                            +URmVL1w7Xmbfo0VRmVIHS/BUu9rbsFoGzQbFypXGM+ELyISUtquzEa6dU26gl/7 <br>
                            T74z8f0ELMyKd44TLRc/l4I2qBsOBEEybegn0lGlTheCgEEv7opsPJKB81rLtGy1 <br>
                            ELIWDvOf8pHcAsNnOk9xjlGHLjuW75Z0ZvBUaMw4qOOXFPEP6vikPiC2G8c0pu8P <br>
                            g+wXqkAWRdZR0ljFPythjiorTtVsodXG25VM3T31E1Mr7XrNPkSOC+WOi2q7/bXE <br>
                            yCFj9DLn+N8Gds3Ej7jGgrLLecIa/C5Ae8lspA1Uo7VC3wARAQABiQGfBBgBCAAJ <br>
                            BQJZfdoBAhsMAAoJEEJYYGoJajw46n0L/1t4ue0oPur2vVmb57Mxn2laVE1UdeW1 <br>
                            wG13bmQ/DZMeq0Ce7tSV0Xp1KTzUL/ZJRjyhfjwdhIy9OQ+olZiOJZ4zppmQipmh <br>
                            2XKSR+fzvGthwD731D03m1F/4aBrdKCcoQo5XEyO9UQLlFIysNGXt+DhHpPvN/gf <br>
                            SvN8gmD2ZWdG2fHsWiNDzcHXOESHpHvbvElnPue0C5559osNA8708whJIxUhIvdt <br>
                            +VfGl2m1tT4ujJ6taxjUdj5IAXnfgp6sbIJdzjiw1Biu5Bu9OxV5HJUv7ukQbjLf <br>
                            GZBkBw1TcUrp5F961K+VqOoYHjKlA1vO3tbMiMHkHrbymmm6krCTXyjs5hn1KBjs <br>
                            3XXERMmJMo6sEfJax1IWwcK2mRzRAqSpcZ/3675Ic4B6EWd+WzqogfFsPPfLPyio <br>
                            PnRKxbFOxU3w1/5swN8SqAVV6S8jHoGotkdvMplR/VUy7d0cPSKTa2YnxfSjPr/5 <br>
                            Q0Fr1K876BhwUqACV0sDxjpN10ykF78Tmg== <br>
                            =s/Sm <br>
                            -----END PGP PUBLIC KEY BLOCK-----
                        </div>
                        <!--googleon: index-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection