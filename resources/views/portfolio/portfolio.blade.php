@extends('layouts.portfolio')
@section('content')

    <div class="portfolio__container">
        <div id="moon"></div>
        <div class="pfLogo">
            <img src="/images/Mendo.gif" alt="logo"  width="40%">
        </div>
        <div class="examples">
            <div class="example">
                <div class="cardImg">
                    <a href="">
                        <img src="/images/greenconnect.png" id="img1" alt="greenconnect">
                    </a>
                </div>
                <div class="card" style="text-align: start; padding-left:5rem ;">
                    <h2>GreenConnect</h2>
                    <p class="titleCard"  style="padding: 1rem 0; "> Projet d'un site pour une entreprise partenaire du developpement durable. Dans une campagne d'installation de thermostats connectés</p>
                    <p class="titleCard"  style="padding: 1rem 0; "> Ici j'ai utilisé : <span class="languages">HTML</span> pour le balisage et <span class="languages">CSS</span> pour la disposition et le style.</p>
                    <p class="annee">Créé en 2024</p>
                </div>
            </div>
            <div class="example">
                <div class="card" style="text-align: end; padding-right:5rem ;">
                    <h2>Mendo Boutique</h2>
                    <p class="titleCard"  style="padding: 1rem 0; ">Exercice pour un site Ecommerce. Réalisé lors de ma formation Créateur Développeur d'Applications, ce site a pour but de présenter un site de vente en ligne fonctionnel.</p>
                    <p class="titleCard"  style="padding: 1rem 0; ">Ici j'ai utilisé : <span class="languages">LARAVEL 11</span> pour structurer mon projet , <span class="languages">HTML</span> pour le balisage , <span class="languages">CSS</span> et <span class="languages">TAILWIND CSS</span> pour la disposition et le style , <span class="languages">JavaScript</span> pour animer la page , <span class="languages">PHP</span> pour communiquer avec ma base de données <span class="languages">MySQL</span>.</p>
                    <p class="annee">Créé en 2024</p>
                </div>
                <div class="cardImg">
                    <a href="">
                        <img src="/images/store.png" id="img2" alt="store">
                    </a>
                </div>
            </div>
            <div class="example">
                <div class="cardImg">
                    <a href="">
                        <img src="/images/acon.png" id="img1" alt="acom">

                    </a>
                </div>
                <div class="card" style="text-align: start; padding-left:5rem ;">
                    <h2>A.C.O.M</h2>
                    <p class="titleCard"  style="padding: 1rem 0; "> Projet d'un site pour un club de tir. Ce site présente les activités du club ainsi que les reglemntations en vigueurs et des albums photos. Il contient également un système d'authentification permettant a certains utilisateurs d'accéder à des pages réservées, comme une section petites annonces et gestion des membres.</p>
                    <p class="titleCard"  style="padding: 1rem 0; ">Ici j'ai utilisé : <span class="languages">HTML</span> pour le balisage , <span class="languages">CSS</span> et <span class="languages">BOOTSTRAP</span> pour la disposition et le style , <span class="languages">JavaScript</span> pour animer la page , <span class="languages">PHP</span> pour communiquer avec ma base de données <span class="languages">MySQL</span>.</p>
                    <p class="annee">Créé en 2023</p>
                </div>
            </div>
            <div class="example">
                <div class="card" style="text-align: end; padding-right:5rem ;">
                    <h2>Apple</h2>
                    <p class="titleCard"  style="padding: 1rem 0; "> Exercice de clonage du site Apple. Cet exercice avait pour but de reproduire la page d'accueil du site d'Apple comme elle était ce jour là, de manière responsive.</p>
                    <p class="titleCard"  style="padding: 1rem 0; "> Ici j'ai utilisé : <span class="languages">HTML</span> pour le balisage , <span class="languages">CSS</span> et <span class="languages">BOOTSTRAP</span> pour la disposition et le style.</p>
                    <p class="annee">Créé en 2023</p>
                </div>
                <div class="cardImg">
                    <a href="">
                        <img src="/images/apple.png" id="img3" alt="apple">
                    </a>
                </div>
            </div>
            <div class="example">
                <div class="cardImg">
                    <a href="">
                        <img src="/images/pizza.png" id="img4" alt="pizza">
                    </a>
                </div>
                <div class="card" style="text-align: start; padding-left:5rem ;">
                    <h2>Perso Pizza</h2>
                    <p class="titleCard"  style="padding: 1rem 0; "> Exercice pour un site de pizzeria. Ici j'ai conçu une interface présentant toutes les pizzas proposées par une pizzeria, classées par catégorie. L'utilisateur ici pouvait composer de nouvelles recettes et connaitre son prix de revient ainsi que ses bénéfices.</p>
                    <p class="titleCard"  style="padding: 1rem 0; "> Ici j'ai utilisé : <span class="languages">HTML</span> pour le balisage , <span class="languages">CSS</span> pour la disposition et le style , <span class="languages">JavaScript</span> pour animer la page , <span class="languages">PHP</span> pour communiquer avec ma base de données <span class="languages">MySQL</span>.</p>
                    <p class="annee">Créé en 2023</p>
                </div>
            </div>
        </div>
        
    </div>

@endsection