<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="/deposer-annonce">Déposer une annonce</a></li>
                    <li><a href="/offres">Offres</a></li>
                    <li><a href="/demandes">Demandes</a></li>
                    <li><a href="/crypto-monnaies">Crypto-monnaies</a></li>
                    <li><a href="/outils">Outils</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/cours">Cours des crypto-monnaies</a></li>
                    <li><a href="/conditions-generales-utilisations">Conditions générales d'utilisation</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="https://github.com/netwarp/rdv">Github</a></li>
                    <li><a href="/">Copyrights</a></li>
                    <li><a href="/a-propos">A propos</a></li>
                </ul>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-12">
                Copyright {{ date('Y') }} L'intégralité du contenu du site est en licence <a href="https://fr.wikipedia.org/wiki/WTFPL">WTFPL</a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ mix('/js/app.js') }}"></script>
@yield('js')
@if (session('error'))
    <script>
        swal('Erreur', 'Something went wrong!', 'error')
    </script>
@elseif(session('success'))
    <script>
        swal('Merci', "{{ session('success') }}", 'success')
    </script>
@endif