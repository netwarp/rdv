@extends('front._layout')

@php
    $currencies = [
        [
            'name' => 'Bitcoin',
            'description' => "Bitcoin is decentralized digital currency that enables instant payments to anyone, anywhere in the world. Bitcoin uses peer-to-peer technology to operate with no central authority: managing transactions and issuing money are carried out collectively by the network. The original Bitcoin software by Satoshi Nakamoto was released under the MIT license. Most client software, derived or \"from scratch\", also use open source licensing.",
            'wallets' => [
                [
                    'name' => 'Ledger',
                    'link' => '#',
                ],
                [
                    'name' => 'Trezor',
                    'link' => '#',
                ],
                [
                    'name' => 'KeepKey',
                    'link' => '#',
                ],
                [
                    'name' => 'OpenDime',
                    'link' => '#',
                ],
                [
                    'name' => 'Armory',
                    'link' => '#',
                ],
                [
                    'name' => 'Jaxx',
                    'link' => '#',
                ],
                [
                    'name' => 'Electrum',
                    'link' => '#',
                ],
            ]
        ],
        [
            'name' => 'Litecoin',
            'description' => 'Litecoin is a peer-to-peer Internet currency that enables instant payments to anyone in the world. It is based on the Bitcoin protocol but differs from Bitcoin in that it can be efficiently mined with consumer-grade hardware. Litecoin provides faster transaction confirmations (2.5 minutes on average) and uses a memory-hard, scrypt-based mining proof-of-work algorithm to target the regular computers with GPUs most people already have. The Litecoin network is scheduled to produce 84 million currency units. One of the aims of Litecoin was to provide a mining algorithm that could run at the same time, on the same hardware used to mine Bitcoins. With the rise of specialized ASICs for Bitcoin, Litecoin continues to satisfy these goals. It is unlikely for ASIC mining to be developed for Litecoin until the currency becomes more widely used.',
            'wallets' => [
                [
                    'name' => 'Ledger',
                    'link' => '#',
                ],
            ]
        ],
        [
            'name' => 'Monero',
            'description' => 'Monero is a new coin using the CryptoNote protocol. It\'s based on Bytecoin, which was coded from scratch and is not a descendent of Bitcoin. XMR was launched on April 18, 2014.,',
            'wallets' => [
                [
                    'name' => 'Ledger',
                    'link' => '#',
                ],
            ],
        ],
        [
            'name' => 'Ethereum',
            'description' => 'Ethereum or Ether is a cryptocurrency designed to pay for the computational purposes of the Ethereum network. The name of the coin comes from the name of the platform intended to allow a network of peers to administer their own stateful user-created smart contracts in the absence of central authority.',
            'wallets' => [
                [
                    'name' => 'Ledger',
                    'link' => '#',
                ],
                [
                    'name' => 'Trezor',
                    'link' => '#',
                ],
                [
                    'name' => 'KeepKey',
                    'link' => '#',
                ]
            ]
        ]
    ];
@endphp

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3">Monnaies</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            @foreach($currencies as $currency)
                                <li><a href="#{{ $currency['name'] }}">{{ $currency['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @foreach($currencies as $currency)
                    <div class="panel panel-default" id="{{ $currency['name'] }}">
                        <div class="panel-heading">
                            <h2 class="h3">{{ $currency['name'] }}</h2>
                        </div>
                        <div class="panel-body">
                            <p>{{ $currency['description'] }}</p>
                            <h3 class="h4">Wallets :</h3>
                            <ul>
                                @foreach($currency['wallets'] as $wallet)
                                    <li><a href="{{ $wallet['link'] }}">{{ $wallet['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection