<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Restaurant Moderne</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>kledjess_restau.</a>

    <nav class="navbar">
        <a class="active" href="#home">Acceuil</a>
        <a href="#dishes">Plats</a>
        <a href="#about">A Propos De Nous</a>
        <a href="#menu">Menu</a>
        <a href="#review">Avis Clients</a>
        <a href="#order">Commandez</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <!-- <a href="panier.php" class="fas fa-shopping-cart"></a> -->

        <a class="nav-link js-scroll-trigger" href="index.php?page=panier"><span> <span class="badge badge-danger item_count">0</span> <i class="fa fa-shopping-cart"></i>  </span>Cart</a>

    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Notre Plat Spécial</span>
                    <h3>Nouilles Epicées</h3>
                    <p>Nous laisons le choix aux clients de faire leurs choix.<br>Ce plat vous convient ? <b>si Oui Commandez. Sinon faites votre choix.</b></p>
                    <a href="#" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Notre Plat Spécial</span>
                    <h3>Poulet Frit</h3>
                    <p>Nous laisons le choix aux clients de faire leurs choix.<br>Ce plat vous convient ? <b>si Oui Commandez. Sinon faites votre choix.</b></p>
                    <a href="#" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="images/home-img-2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Notre Plat Spécial</span>
                    <h3>pizzas Chaudes</h3>
                    <p>Nous laisons le choix aux clients de faire leurs choix.<br>Ce plat vous convient ? <b>si Oui Commandez. Sinon faites votre choix.</b></p>
                    <a href="#" class="btn">Commandez maintenant</a>
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> Nos Plats </h3>
    <h1 class="heading"> Plats Populaires </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-1.png" alt="">
            <h3>Cheeseburger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>2500F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-2.png" alt="">
            <h3>Nugget de poulet</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>2000F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-3.png" alt="">
            <h3>Poulet rôti</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>5000F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-4.png" alt="">
            <h3>Pizzas</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>3000F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-5.png" alt="">
            <h3>Cookie aux pépites de chocolat</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>1000F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="images/dish-6.png" alt="">
            <h3>Poulet frit</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>3000F</span>
            <a href="#" class="btn">Ajouter Au Panier</a>
        </div>

    </div>

</section>

<!-- dishes section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h3 class="sub-heading"> À Propos De Nous </h3>
    <h1 class="heading"> Pourquoi Nous Choisir? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>Meilleure Nourriture Du Pays</h3>
            <p>Nous sommes une équipe d'espère dans la restauration! Ce retaurant est geré par un certifier de l'Hotelérie et est entouré de serveurs et des serveuses qualifiérs. </p>
            <p>En effet, nous travaillons en fonction du besoin de nos clients. Ce site est la vitrine de notre beau restaurant et qui donne l'opportunnité à nos clients de commander leur plat préferer partout  et à tous moment.
                La commande est très simple et le payement s'effectue à la Livraison.
            </p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>Livraison Gratuite</span>
                </div>
                <div class="icons">
                    <i class="fas fa-franc-sign"></i>
                    <span>Paiements Faciles</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Service</span>
                </div>
            </div>
            <a href="#" class="btn"> En Savoir Plus</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h3 class="sub-heading"> Notre Carte </h3>
    <h1 class="heading"> La Spécialité D'aujourd'hui </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/menu-1.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Pizzas</h3>
                <p>Les pâtes se classent peut-être plus haut sur la liste des exportations culturelles et gastronomiques dont les Italiens sont les plus fiers, mais on pourrait affirmer que la pizza est plus largement appréciée.

                .</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">3500Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-2.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>hamburger</h3>
                <p>Un cheeseburger ou hamburger au fromage est un hamburger dans lequel une tranche de fromage accompagne la viande..</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">2000Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-3.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3> Crêpe</h3>
                <p>La crêpe est un mets composé d'une couche plus ou moins fine de pâte, faite à base de farine et d'œufs agglomérés à un liquide. Elle est généralement de forme ronde.</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">1000Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-4.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Gaufre</h3>
                <p>Une gaufre est une pâtisserie confectionnée avec une pâte légère cuite dans un fer à gaufre constitué de deux plaques métalliques, articulées entre elles par une ou plusieurs charnières, ornées de motifs qui s'impriment dans la pâte et lui donnent sa forme caractéristique avec des petits carreaux en creux.</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">1500Ffca</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-5.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Torta alfajor </h3>
                <p>Alfajor Une super recette !! Trop trop bon !! Ingredients 150 g de margarine ramollie.</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">4000Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-6.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Cupcake Glace</h3>
                <p>Incontournable de la patisserie le citron-meringué se décline aussi en cupcake. Faites-vous plaisir avec notre recette riche en goûts.</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">3500Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-7.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jus
                    (Boisson)</h3>
                <p>Le jus est une boisson issue de l'extraction ou du pressage du liquide naturel contenu dans les fruits et légumes. Il peut également faire référence à des liquides aromatisés avec du concentré ou d'autres sources alimentaires biologiques, tel que le jus de viande</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">3300Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-8.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Açaí na tigela</h3>
                <p>L'Açaí na tigela est un dessert brésilien du Pará et de l'Amazonas, où les ribeirinhos le préparent régulièrement, les baies étant récoltées à la main à la cime des arbres de la forêt amazonienne. .</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">980Fcfa</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-9.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jus d'orange au citron</h3>
                <p>Le jus d'orange est une boisson préparée à partir d'oranges pressées. Il faut 2 à 3 kg d'oranges pour faire 1 litre de jus d'orange « 100 % pur jus »..</p>
                <a href="#" class="btn">Ajouter Au Panier</a>
                <span class="price">800Fcfa</span>
            </div>
        </div>

    </div>

</section>

<!-- menu section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h3 class="sub-heading"> Avis Clients </h3>
    <h1 class="heading"> Ce Qu'ils Disent </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/profil.jpg" alt="">
                    <div class="user-info">
                        <h3>kledjess</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Il y'à longtempt de ce cela que j'ai decouvert ce Restaurant de qualité. Ils sont accueillants,respectués et les plats sont bien faits.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/amani.jpg" alt="">
                    <div class="user-info">
                        <h3>Amani sammuel</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>J'ai l'habitude de passer mes commandes sur cette plateforme. Sans me deplacé, je mets toute ma famille à laise.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/photo.jpg" alt="">
                    <div class="user-info">
                        <h3>Klêdjéni Arouna</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>J'ai voulue fêté mon anniversaire dans dans un restaurant moderne, achalandé et mon choix est porté sur Kledjess_Restau. C'est le meilleur Restaurant.</p>
            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/loukou.jpg" alt="">
                    <div class="user-info">
                        <h3>Kouakou Loukou</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Je me suis abonné depuis ma première commande. Mais le livraire est un peut arrivé en retard. Mes invités etaient obligé d'attendre le Gateau d'annivarsaire. </p>
            </div>

        </div>

    </div>
    
</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h3 class="sub-heading">Commandez Maintenant </h3>
    <h1 class="heading"> Gratuit Et Rapide </h1>

    <form action="">

        <div class="inputBox">
            <div class="input">
                <span>Votre Nom</span>
                <input type="text" placeholder="Entrez Votre Nom">
            </div>
            <div class="input">
                <span>Votre Numéro</span>
                <input type="number" placeholder="Entrez Votre Numéro">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Votre Commande</span>
                <input type="text" placeholder="Entrez le Nom de l'Aliment">
            </div>
            <div class="input">
                <span>Nourriture Supplémentaire</span>
                <input type="test" placeholder="Ajoutez de la Nourriture aussi">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Combien</span>
                <input type="number" placeholder="Nombre de Commande">
            </div>
            <div class="input">
                <span>Date Et L'heure</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Votre Adresse</span>
                <textarea name="" placeholder="Entrez Votre Addresse" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>Votre Message</span>
                <textarea name="" placeholder="Entrez Votre Message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="Commandez Maintenant" class="btn">

    </form>

</section>

<!-- order section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">N'dotré (Parris Baguette)</a>
            <a href="#">Yopougon(Maroc)</a>
            <a href="#">Angré (8eme Tranche)</a>
            <a href="#">Koumassi</a>
            <a href="#">Marcory</a>
        </div>

        <div class="box">
            <h3>Liens Rapides</h3>
            <a href="#">Domicille</a>
            <a href="#">Vaisselle</a>
            <a href="#">Sur</a>
            <a href="#">Menus</a>
            <a href="#">Revoir</a>
            <a href="#">Commande</a>
        </div>

        <div class="box">
            <h3>Informations De Contact</h3>
            <a href="#">225 05 54 87 64 16</a>
            <a href="#">225 07 59 68 31 91 </a>
            <a href="mailto:kledjeniarouna.1995@gmail.com">kledjeniarouna.1995@gmail.com</a>
            <a href="mailto:kledjeniaej21@gmail.com">kledjeniaej21@gmail.com</a>
            <a href="#">Côte d'Ivoire, Abidjan - N'dotré</a>
        </div>

        <div class="box">
            <h3>Suivez-Nous</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright@2022 by <span>kledjess@binary</span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>