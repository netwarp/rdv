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
                            Version: OpenPGP v2.0.8 <br>
                            Comment: https://sela.io/pgp/ <br>

                            xsFNBFyuJOgBEADv+kvFJ+GZ90G+a/2lbPSO3iQMXZLvpFf4FGxufLOKq938PHOg <br>
                            n78gJrFvpvzbMaPCWElbJ9mKicExneioVCvRlv2NkEW2W+16U4eTEY5Snl9CnoqB <br>
                            QJ7Ba2cru9evYHiPIMJQXeHS7ckyTGsicl6/EADV2rcMxVzmcRijgYf2uNzoX0/G <br>
                            BmxlXJEppcZy1GUZ3/wjoSz5eRZqW0olItIYlRkJjrMWMB2Z3yuAv33vPtwhWLTE <br>
                            0oJckSXmNwWhvAIxzcF3y58NpLTZ2k7y8GvknSrxROqjcHBokEsf+SqOJyanfjO1 <br>
                            m5Pi+u/6AbIR9zOvWGYps9vHjSunsLfy+v0CH7Niped98PUGx7cAuTbX+F1yFefZ <br>
                            D5YZ0szuLWStqyFb3dvRX+S2fqQHoZk1OeX1n4UnBrpyqVojHkoW99d4K8UTt4bV <br>
                            Nn9czcOpDEPDOFrPEkx00I+EN0QGnbJOpEqkSXA+V6KepJAf30g6aYre8nEmd1kJ <br>
                            GPNiISeqO+cG78ObP9peixExqvjV7s2ftK9dIagMaVltMN+Wpj501UwmcRaLsBEe <br>
                            zxYvNBRim9kItlUyLFerx/7QHlqoyRHHcnMmJjqGLqDQI+tbETpwqxukWf1kjK6H <br>
                            zBoIENGduCjZr41rqvX49j2ymtV8BObSMII6Tw8EkurYaHF8OaaHYdvmVQARAQAB <br>
                            zQ10b3RvQHRvdG8uY29twsFwBBMBCgAaBQJcriToAhsvAwsJBwMVCggCHgECF4AC <br>
                            GQEACgkQ1Aawd17pDPkRow//XBF7HOdsO7+CzHLccrvwkVXsSILdhLuC1uuIDx65 <br>
                            dEhtHNLGTeUAARu8Q6DsgXH1Vvapo2FXe+M69D5vrtUWjZQtrp3ywDeJmTEqcagQ <br>
                            DKXn3TXAvLfkeo/EKnBeBeDDkEJiwGfX5SgBNYEO8FNn6o4hJumxc2IO+QX4Kxj+ <br>
                            f6ZCKYsK0lCGnPADH+hirI4cR/+3VOBunqpwprIF4kXbf/dDaapaxyMa0QAsTtjk <br>
                            toWuyEHI4vCTabMsEpOesCN1OGDAoLc8p2LLJIIs3elNFCEqNPeI3qLk6vQpDWfJ <br>
                            dNOMCF08iIFlFYyHnInkfGr+wD+wqSy+i30kHjeAuiFqbWoDQK15rdo6B15zoxLm <br>
                            UOlgifjGJjjGJJz+gjmV7D3cjA59cMQu/9pZMODA8s1BBG1BbkK0DJr8bByW5e5S <br>
                            vREUtSuOCX9fad6qiSjbFkWYdX281ZBxatCJxcz6lB/6lu9qqjPpB5fKgbJlt/iR <br>
                            hDAJDHjhmUSuvurRTMVM8LYUMku8G9qY58JsSWgSFTylRG/5uZVY9DBjaup4iB8c <br>
                            yDyri8GHiHk0HYcICPHX+SKkLgc5ILzsLTEV7PivYSnNWxXyV1dwaejQoCzhjVXd <br>
                            hrseenYwflQY9jIiE0Z+61Cn3u9UehGYiuQm4Cy0D1sdpqbaAwCOBPQMgM/oPpYl <br>
                            uYbOwE0EXK4k6AEIANYg6ydh0EgoY9qXltOFuuskPiPEYSc1v4RIfo4AqSfXrI0s <br>
                            52HyMr5lxNan8hte55E/wXMiCUKYtlQAag5orFGhAwf2vR6MO5rNHZ/MkS4jpgUc <br>
                            j+owvvtHV6A7lXPdzyDjNTMkb8c2FSmSb5l2Y2hYsyLtaKVog9seXmbtcEUjAe6k <br>
                            Q78DGt4Kuz3epvcKKctt1tyYLCRBoahBNSoBZqqe2kBFvTyJ0U5K9ooPTKshfcOC <br>
                            SiSx4WrBANZPDBORpkoO24eSA2O3CibwkNojukURdtWRY7UZBpPj0DmAV1TojJsy <br>
                            mTJ0JawkEwT9KLAG9iJtXkQnFJw2Z+y/UqAb1YcAEQEAAcLChAQYAQoADwUCXK4k <br>
                            6AUJDwmcAAIbLgEpCRDUBrB3XukM+cBdIAQZAQoABgUCXK4k6AAKCRASRvJ8Cbvz <br>
                            7JcZCACsdJr+hDmHGCVYbyPSBGRVL2O0qVD7w8OT/x9q+wnm0HUbSuff5FQcPSMm <br>
                            t+EjxAwEGzPec3bcorS2g5YUX/M0gp/OHqEjijnpeO5gly8l6JC7L6i3HusH/Cz8 <br>
                            Uhz4Hhy2Ql3tWO09/mMo3zrUfzYo/oqDnpNr0OI5AcF9VK2rDWmGIFHW96e1kzmB <br>
                            mrrbvpKcfKG2UfOKWQ6IeTshvJjF7Sr0MmVU6wB4kdvSqA6j0p7Z6EUjN68iXaDZ <br>
                            5c9C48cFuGDBLlIfADgJmAlstsaHqpTngGFyYxxAO4LP3zpijDUi5lUuO9UU+wOy <br>
                            didh6I/R6Q5WgSI+n9RZjBpo8HgXH8EP/R2di7W7o1xbCZ4uio85eB57ojRV/qKi <br>
                            oFH6txgMfcgARhDcBU74SggjskjqTXxEPzFQLVnHwUoxdCvHiPdt8Fcmcy9G0Xtz <br>
                            K3kVOGTXb1nn5QbenE3T56dU66vjIuZKS5EwMChFjChcNwvdDYeoGDLnwTdyRHdP <br>
                            070Sx732i0HKU1rxdNMlcYcGZKf9lfTmxkA5J/lAuSoPQzVKZSZ92e+s9tJumXxw <br>
                            455ZYApkjhrTAWvhs9Gn900WGVtGkEdxWwfOyzNDyXjCClsyY8v4cMejEyCv1Qba <br>
                            BXLmyoO2BTmHDcEy9L4JFM9Mr9kMEHURoHrvRWeBssCTrfXuV30YlUK2BuVPeSkL <br>
                            Y1MhqttEht/bTIPgDK/7bZJMj5TuddkWi0JMkSM+it+CAH5JH8Qx7sb9z/r5NyZM <br>
                            q9I0hFnFMYW1JbaAjWfLOSay6HC05wciU5JzgRAN0iNKnuiK5iOpzHuhifETqc/4 <br>
                            ShegzY+9hswuZkKresJ5q3SFzJQvGOTOo2NeiSP8OBatSE/iKW/eWysCg68Zvrf2 <br>
                            qs36QYwP3IkoNntvwzD64N2pfyKZRRY4vyMxiOQicm03buytxcb8zonh1ZxFbvIW <br>
                            FnzvbzFm1+jYAsYpBFQRRzuHPGqV5zaCwmYokTTOXt9nRUSuecwboi/36S0LnG6H <br>
                            kqEtdh/Mnir7zsBNBFyuJOgBCAC67fCKgNkGEi36LvsqvCkxoWIRdJ3APc7wTINC <br>
                            HdwbpfbLQRhhUpOAhfRH/r770jvRkd/eCK6q5rp1JEHuu+U2rmOVtf2tcz+7TJLX <br>
                            sq+st1tCZdXr8U4qHUdL5AuK1/1ZRKRO8+QoODW6FCJXtvTq8K8lv2o15+HluF0P <br>
                            m6eD799NiILAOnO64vnQxjgy5/slSCKq9VBU3k3axtILNO9K73YLtvI+Qify+ZLI <br>
                            wfP4jF1oYDOluBoqiz+8dZSohE9nS5fCzvjnw1kMHFueyfROWID/M1TGGKPMa9W0 <br>
                            MOZGqB5x726YuoVtTRVv8JZf3Isx605LD799MTSg5q9GWPZNABEBAAHCwoQEGAEK <br>
                            AA8FAlyuJOgFCQ8JnAACGy4BKQkQ1Aawd17pDPnAXSAEGQEKAAYFAlyuJOgACgkQ <br>
                            lJVz+A82SdzQhQf+IdB+VFZ4t8i/gV22MtZVONFh/cdn0HahfgxuNp437Tnm9iom <br>
                            bI+s1BexCjv/+Y+3nZ0eNMVOvmoMTZdzI5E+qj3lM719XBhqhrsO+TrUHG8LQ0iW <br>
                            PU/AM3gyuDb/VqYVRmve9h3z9YH3qMkBpWFIa0g1naxE3xDhu+ZkfZ2lno3DFNop <br>
                            MMT7BlmdwHVV442TQzaQefkqf2XwVUx0gzgp+3pF3AAwTdOTKGwzjosncdBau1C8 <br>
                            FpqWVYVPmEEVmURW/QMP41T1mZiKw74km1MgKksjJsqHmHHpNaDm6iDMoZvy9JBJ <br>
                            gz5nStz8XX2nRpUd/34NjSN29KN8l/O+jUrfo20DEACXfEtn9XYwPXgdmXlIbQXj <br>
                            kwi3Q1A55Hfv/Er/IHMq/mkp0GVTpIkEENpiCw31pngqMu7bH9L6Oc5uEp3V+6A/ <br>
                            89nBMao7re+vkys9unIZOUa8zUjDgoOzcnJhKhwSUBitYPu3DAyWZhydvllUswS5 <br>
                            5/m0n0pckNhAac5e9VVAPNRPDp6oVs6+pyqKbrMeRnZx1LT3kQ58zsvA5li9dK+F <br>
                            pPvn3HEQ4/J8/Gpuc0CuyH/V5eOqVSMdizW+7yh4NAC1agbhXpz55hGr2r5ybTq5 <br>
                            BWp8uDFsoYj46Yonpd6verHm1m7LzVe98xEvXxxkqQv4Di4VeWAKhRTQR4ltdZu+ <br>
                            UE3Yw+R9ZCHT7OBTvgm2UOlYFE+ZLzXU6d4INEtnjbXX3A+jBS6qqHJ0FeDt8b6q <br>
                            bpMBg7Ew+OFCA6hKOQ/lH0KvaS7g+1L+SDxqxdag+hwluwE+Q5aTyeGQdC17o3Gj <br>
                            Y6/HVyr1UngVE4E1CtvpcZFA8WsqARBTszjvF74E6umQ9Zq+sLs1ltHbsufWgbqt <br>
                            M35g09TZWbQwF9ZG5Rd5Q56WMZmGkLr7ENMdWpG2np01MO31MZeexbVytT5frFYd <br>
                            n3AVgZ2RStmWTSw05M7upFS3lmqmUBAGU1DQW/Shi9WJthaNQvfEE9EkfBCH2L2O <br>
                            WrMx+zhOmfNARxcaO3kkWw== <br>
                            =/xqr <br>
                            -----END PGP PUBLIC KEY BLOCK-----
                        </div>
                        <!--googleon: index-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection