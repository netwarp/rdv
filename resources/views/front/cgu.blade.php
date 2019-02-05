@extends('front._layout')

@section('css')
    <style>
        h3, h4 {
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3">Conditions générales d'utilisation</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Définitions</h2>
                        <p>
                            Chacun des termes mentionnés ci-dessous aura dans les présentes Conditions Générales d'Utilisation du Service « {{ env('APP_NAME') }} » (ci-après dénommées les " CGU ") la signification suivante :
                            <br><br>

                            <strong>Annonce</strong> : désigne l'ensemble des éléments et données, déposé par un Annonceur sous sa responsabilité éditoriale, en vue d’acheter (« Demande »), ou de vendre

                            (« Offre ») une Monnaie. <br><br>

                            <strong>Annonceur</strong> : désigne toute personne Physique majeure ou personne Morale établie en France ou à l’étranger, ayant déposé et mis en ligne une Annonce via le Service « {{ env('APP_NAME') }} ».
                            <br><br>

                            <strong>Monnaie</strong> : désigne notamment : les bitcoins, ether, monero, litecoin, dodgecoin, bytecoin, zero-coin, z-cash, ainsi que toute monnaie électronique n’étant pas émise par une banque centrale.
                            <br><br>

                            <strong>Service "{{ env('APP_NAME') }}"</strong> : désigne les services "{{ env('APP_NAME') }}" mis à la disposition des Utilisateurs et des Annonceurs sur le Site Internet et les Applications tels que décrits à l'article 3.1 des présentes CGU.
                            <br><br>

                            <strong>Site Internet</strong> : désigne le site internet accessible principalement depuis l’URL {{ env('APP_URL') }} et permettant aux Utilisateurs et aux Annonceurs d'accéder via internet au Service "{{ env('APP_NAME') }}" décrit à l'article 3.1 des présentes CGU.
                            <br><br>

                            <strong>Utilisateur</strong> : désigne tout visiteur, ayant accès au Service "{{ env('APP_NAME') }}" via le Site Internet et consultant le Service "{{ env('APP_NAME') }}".
                        </p>
                        <h3>ARTICLE 1 : OBJET</h3>
                        <p>
                            Les CGU ont pour objet de déterminer les conditions d'utilisation du Service "{{ env('APP_NAME') }}" mis à disposition des Utilisateurs et des Annonceurs via le Site Internet.
                        </p>
                        <h3>ARTICLE 2 : ACCEPTATION</h3>
                        <p>
                            Tout Utilisateur - Tout Annonceur déclare en accédant et utilisant le service "{{ env('APP_NAME') }}", depuis le Site Internet, avoir pris connaissance des présentes Conditions Générales d’Utilisation et les accepter expressément sans réserve et/ou modification de quelque nature que ce soit. Les présentes CGU sont donc pleinement opposables aux Utilisateurs et aux Annonceurs.
                        </p>
                        <h3>ARTICLE 3 : UTILISATION DU SERVICE</h3>
                        <p>
                            3.1Description du Service "{{ env('APP_NAME') }}" 3.1.1 Règles générales <br>
                            Tout Utilisateur – tout Annonceur déclare être informé qu’il devra, pour accéder au Service "{{ env('APP_NAME') }}", disposer d’un accès à l’Internet souscrit auprès du fournisseur de son choix, dont le coût est à sa charge, et reconnaît que :
                            <br><br>
                            •La faisabilité des transmissions est aléatoire en raison, notamment, du caractère hétérogène des infrastructures et réseaux sur lesquelles elles circulent et que, en particulier, des pannes ou saturations peuvent intervenir ;
                            <br><br>
                            •Il appartient à l’Annonceur de prendre toute mesure qu’il jugera appropriée pour assurer la sécurité de son équipement et de ses propres données, logiciels ou autres, notamment contre la contamination par tout virus et/ou de tentative d’intrusion dont il pourrait être victime ;
                            <br><br>
                            •Tout équipement connecté au Site Internet est et reste sous l’entière responsabilité de l’Annonceur, la responsabilité de « {{ env('APP_NAME') }} » ne pourra pas être recherchée pour tout dommage direct ou indirect qui pourrait subvenir du fait de leur connexion au Site Internet.
                            <br><br>
                            L'Annonceur est informé et accepte que pour des raisons d'ordre technique, son Annonce pourra ne pas être diffusée instantanément après son dépôt sur le Site Internet et les Applications.
                            <br><br>
                            Toute Annonce publiée sera diffusée sur le Site Internet.
                            <br><br>
                            3.2 Description du service <br>
                            1) Fonctionnalités accessibles aux Annonceurs et aux Utilisateurs depuis le Site Internet et les Applications
                            <br><br>
                            La consultation de toutes les Annonces diﬀusées
                            <br><br>
                            2) Fonctionnalités accessibles depuis le Site Internet
                            <br><br>
                            Le dépôt d'Annonce
                            <br>
                            Le choix des établissements points de rencontre pour procéder à la transaction avec l’acheteur.
                            <br><br>
                            3) Informations fournies par l’Annonceur
                        </p>
                        <div>
                            L’Annonceur fournit les informations suivantes pour déposer son Annonce :
                        </div>
                        <ul>
                            <li>Monnaie</li>
                            <li>Qualité - professionnel ou particulier</li>
                            <li>Type - Oﬀre ou Demande</li>
                            <li>Titre de l’Annonce</li>
                            <li>Prix</li>
                            <li>Localisation</li>
                            <li>Pseudo</li>
                            <li>E-mail</li>
                        </ul>
                        <div>
                            L’Annonceur peut aussi déposer un message lié à son Annonce.
                        </div>
                        <h3>ARTICLE 4 : MODERATION DES ANNONCES</h3>
                        <p>
                            « {{ env('APP_NAME') }} » se réserve le droit de supprimer, sans préavis ni indemnité ni droit à remboursement, toute Annonce qui ne serait pas conforme aux règles de diffusion du Service « {{ env('APP_NAME') }} » et/ou qui serait susceptible de porter atteinte aux droits d'un tiers.
                        </p>
                        <h3>ARTICLE 5 : RESPONSABILITÉS</h3>
                        <h4>5.1 Engagements de l’annonceur</h4>
                        <p>
                            L’Annonceur garantit détenir tous les droits ou avoir obtenu toutes les autorisations nécessaires à la publication de son Annonce.
                            <br><br>
                            L’Annonceur garantit que l’Annonce ne contrevient à aucune réglementation en vigueur (notamment relatives à la publicité, à la concurrence, à la promotion des ventes, à l’utilisation de la langue française, à l’utilisation des données personnelles, à la prohibition de la commercialisation de certains biens ou services), ni aucun droit de tiers et qu’il ne comporte aucun message diﬀamatoire ou dommageable à l’égard de tiers.
                        </p>
                        <div>
                            Ainsi, l’Annonceur s’engage notamment à ce que l’Annonce ne contienne :
                        </div>
                        <ul>
                            <li>Aucun lien hypertexte redirigeant les Utilisateurs</li>
                            <li>Aucune information fausse, mensongère ou de nature à induire en erreur les Utilisateurs</li>
                            <li>Aucune mention diﬀamatoire ou de nature à nuire aux intérêts et/ou à l’image de {{ env('APP_NAME') }} et de tout tiers</li>
                            <li>Aucun contenu portant atteinte aux droits de propriété intellectuelle de tiers</li>
                            <li>Aucun contenu à caractère promotionnel ou publicitaire en lien avec l’activité de l’Annonceur.</li>
                        </ul>
                        <p>
                            L’Annonceur s’engage à ne proposer dans les Annonces que des biens disponibles dont il dispose. L’Annonceur s’engage, en cas d’indisponibilité du bien, à procéder au retrait de l’Annonce de « {{ env('APP_NAME') }} » dans les plus brefs délais.
                            <br><br>
                            L’Annonceur déclare connaître l’étendue de diﬀusion du Site Internet, avoir pris toutes précautions pour respecter la législation en vigueur des lieux de réception et décharger « {{ env('APP_NAME') }} » de toutes responsabilités à cet égard.
                            <br><br>
                            Dans ce cadre, l’Annonceur reconnaît qu’il est seul responsable du contenu des Annonces qu’il publie et rend accessibles aux Utilisateurs, ainsi que de tout document ou information qu’il transmet aux Utilisateurs. L’Annonceur assume l’entière responsabilité éditoriale du contenu des Annonces qu’il publie.
                            <br><br>
                            En conséquence, l’Annonceur relève « {{ env('APP_NAME') }} » de toutes responsabilités, les garantit contre tout recours ou action en relation avec l’Annonce qui pourrait être intenté contre ces derniers par tout tiers, et prendra à sa charge tous les dommages et intérêts ainsi que les frais et aux dépens auxquels ils pourraient être condamnés ou qui seraient prévus à leur encontre par un accord transactionnel signé par ces derniers avec ce tiers, nonobstant tout dommages et intérêts dont « {{ env('APP_NAME') }} » pourraient réclamer à raison des faits dommageables de l’Annonceur.
                            <br><br>
                            En déposant toute Annonce, chaque Annonceur reconnaît et accepte qu’ « {{ env('APP_NAME') }} » puisse supprimer, ou refuser, à tout moment, sans indemnité ni droit à remboursement des sommes engagées par l’Annonceur aux fins de son dépôt, une Annonce qui serait contraire notamment à la loi française.
                            <br><br>
                            De manière générale, il est de la responsabilité des Annonceurs de vérifier leur statut de particulier ou de professionnel, notamment au regard des articles L 121-1 et L 110-1 du Code de commerce.
                            <br><br>
                            Les annonces sont supprimées automatiquement par « {{ env('APP_NAME') }} » dans un délai de trois semaines.
                        </p>
                        <h4>5.2 Responsabilité et obligations de {{ env('APP_NAME') }}</h4>
                        <p>
                            En raison du régime de responsabilité atténuée des articles 6.I.2 et suivants de la loi n°2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, {{ env('APP_NAME') }} ne peut en aucun cas être tenu responsable du contenu des Annonces publiées par les Annonceurs et ne donne aucune garantie, expresse ou implicite à cet égard.
                            <br><br>
                            « {{ env('APP_NAME') }} » est un tiers aux correspondances et relations entre les Annonceurs et les Utilisateurs, et exclut de ce fait toute responsabilité à cet égard.
                        </p>
                        <h4>5.3 Limitation de responsabilité</h4>
                        <p>
                            « {{ env('APP_NAME') }} » s’engage à mettre en œuvre tous les moyens nécessaires afin d’assurer au mieux la fourniture des services proposés aux Utilisateurs et aux Annonceurs.
                        </p>
                        <div>
                            Cependant, « {{ env('APP_NAME') }} » décline toute responsabilité en cas de :
                        </div>
                        <ul>
                            <li>interruptions, de pannes, de modification et de dysfonctionnement d’aaa quel que soit le support de communication utilisé et ce quelles qu’en soient l’origine et la provenance,</li>
                            <li>la perte de données ou d’informations stockées par « {{ env('APP_NAME') }} » . Il incombe aux Annonceurs de prendre toutes précautions nécessaires pour conserver les Annonces publiées.</li>
                            <li>impossibilité momentanée d’accès au Site internet en raison de problèmes techniques et ce quelles qu’en soient l’origine et la provenance,</li>
                            <li>dommages directs ou indirects causés à l’Utilisateur ou l’Annonceur quelle qu’en soit la nature, résultant du contenu des Annonces et/ou de l’accès, de la gestion de l’Utilisation, de l’exploitation, du dysfonctionnement et/ou de l’interruption du Site Internet.</li>
                            <li>Utilisation anormale ou d’une exploitation illicite d’ « {{ env('APP_NAME') }} » par tout Utilisateur, Annonceur, ou tiers.</li>
                            <li>Attaque ou piratage informatique, privation, suppression ou interdiction, temporaire ou définitive, et pour quelque cause que ce soit, de l’accès au réseau internet.</li>
                        </ul>
                        <p>
                            La responsabilité d’ « {{ env('APP_NAME') }} » ne pourra être engagée que pour les dommages directs subis par l’Annonceur résultant d’un manquement à ses obligations contractuelles telles que définies aux présentes. L’Utilisateur/ l’Annonceur renonce donc à demander réparation à {{ env('APP_NAME') }} à quelque titre que ce soit, de dommages indirects tels que le manque à gagner, la perte de chance, le préjudice commercial ou financier, l’augmentation de frais généraux ou les pertes trouvant leur origine ou étant la conséquence de l’exécution des présentes.
                            <br><br>
                            Tout Utilisateur et Annonceur est alors seul responsable des dommages causés aux tiers et des conséquences des réclamations ou actions qui pourraient en découler.
                            <br><br>
                            L’Utilisateur renonce également à exercer tout recours contre « {{ env('APP_NAME') }} » dans le cas de poursuites diligentées par un tiers à son encontre du fait de l’Utilisation et/ou de l’exploitation illicite du « {{ env('APP_NAME') }} », ou en cas d’usurpation de son identité.
                        </p>
                        <h3>ARTICLE 7 : MODIFICATION D’ « {{ env('APP_NAME') }} » ET DES CGU</h3>
                        <p>
                            « {{ env('APP_NAME') }} » se réserve le droit, à tout moment, de modifier ou interrompre l’accessibilité de tout ou partie du Site Internet.
                            <br><br>
                            « {{ env('APP_NAME') }} » se réserve la possibilité de modifier, à tout moment, en tout ou partie des CGU. Les Utilisateurs et les Annonceurs sont invités à consulter régulièrement les présentes CGU afin de prendre connaissance de changements éventuels eﬀectués. L’Utilisation du Site par les Utilisateurs et les Annonceurs constitue l’acceptation par ces derniers des modification apportées aux CGU.
                        </p>
                        <h3>ARTICLE 8 : CLAUSE DE CONCILIATION PRÉALABLE</h3>
                        <p>
                            En cas de diﬀérend entre les parties, quelle qu'en soit la nature ou l'objet, les parties conviennent, avant même de saisir toute juridiction, de rechercher impérativement une solution amiable à leur différend. Toute violation de cette obligation exposera à une fin de non-recevoir.
                            <br><br>
                            La partie initiatrice qui entend mettre en oeuvre la présente clause devra adresser à l'autre une lettre recommandée avec accusé de réception, ainsi qu'un courriel et/ou une télécopie, qui devra exposer succinctement l'objet du diﬀérend et suggérer trois dates de réunion possibles, afin de favoriser un rapprochement des points de vue. La partie destinataire devra répondre selon les mêmes formes, dans un délai de soixante-douze heures à compter de la réception du premier des documents (lettre recommandée, courriel, télécopie) qui matérialisera la demande de la partie initiatrice, et devra indiquer si elle est disposée à rechercher une solution amiable. Dans ce cas, elle dira si elle accepte l'une des dates suggérées par la partie initiatrice ou formulera une proposition alternative en suggérant à son tour trois dates de réunion possibles. 
                            <br><br>
                            Les discussions qui interviendront entre les parties seront dirigées par les représentants légaux des parties ou toute personne que ces derniers désigneront. 
                            <br><br>
                            L'ensemble des diligences que les parties devront accomplir afin de parvenir le cas échéant à une solution pacifiée devra intervenir dans un délai de trente jours à compter de la date d'envoi du premier des documents (lettre recommandée, courriel, télécopie) de la partie initiatrice. 
                            <br><br>
                            À défaut de conciliation intervenue entre les parties dans le délai de trente (30) jours évoqué ci-dessus, chacune des parties retrouvera toute latitude pour introduire toute procédure judiciaire.
                        </p>
                        <h3>ARTICLE 9 : AUTONOMIE</h3>
                        <p>
                            Si une partie des CGU devait s’avérer illégale, invalide ou inapplicable, pour quelle que raison que ce soit, les dispositions en question seraient réputées non écrites, sans remettre en cause la validité des autres dispositions qui continueront de s’appliquer entre les Utilisateurs ou les Annonceurs et {{ env('APP_NAME') }}.
                            <br><br>
                            Les présentes CGU sont soumises au droit français.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection