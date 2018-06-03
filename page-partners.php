<?php
/**
 * 
 * Template Name: Partners
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Notes for Peace
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>


<!-- Partners Page Head -->
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="container pt-4">
            <div class="row">
                <div class="col">
                    <h1><?php the_title(); ?></h1>   
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<!-- Content -->
<div class="container py-4">

    <!--Organizations -->
    <div class="row py-3">
        <div class="col">
            <h2>ORGANIZATIONS</h2>
        </div>
    </div>
    
    <!--Purpose Over Pain -->
    <div class="row py-3">
        <div class="col">
            <p><strong><a href="http://purposeoverpain.net/">Purpose Over Pain</a></strong> is a support group for parents of murdered children and an advocacy group which works for stricter gun control legislation. Members of Purpose Over Pain have written the songs featured in this project.</p>
        </div>
    </div>

    <!--Faith Community of St. Sabina -->
    <div class="row py-3">
        <div class="col">
            <p>The <strong><a href="https://saintsabina.org">Faith Community of St. Sabina</a></strong> is a Catholic church in Chicago's Auburn Gresham neighborhood. Led by Pastor Michael Pfleger, St. Sabina Church is also home to numerous programs that serve the community, including an employment resource center, a school, and an elder’s home.</p>
        </div>
    </div>

    <!--Strong Futures Jobs Program -->
    <div class="row py-3">
        <div class="col">
            <p>The <strong><a href="https://saintsabinapeacemakers.org/strong-futures/">Strong Futures Jobs Program</a></strong> connects justice-involved, disconnected youth and young adults to full-time employment. The St. Sabina community provides mentoring and raises funding to support this jobs program. Proceeds from the Concerts for Peace go to expanding the Strong Futures program.</p>
        </div>
    </div>

    <br />
    <br />

    <!--Collaborators -->
    <div class="row py-3">
        <div class="col">
            <h2>COLLABORATORS</h2>
        </div>
    </div>

    <!--Yo Yo Ma -->
    <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/05/Yo-Yo-Ma-and-Father-Pfleger.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p><strong><a href="http://www.yo-yoma.com/about-2/">Yo-Yo Ma’s</a></strong> multi-faceted career is testament to his enduring belief in culture’s power to generate trust and understanding. Whether performing new or familiar works from the cello repertoire, collaborating with communities and institutions to explore culture’s social impact, or engaging unexpected musical forms, Mr. Ma strives to foster connections that stimulate the imagination and reinforce humanity.</p>
        </div>
    </div>

    <!-- Sara Lee and Rex Horan-->
    <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/05/Sara-and-Rex.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p><strong>Sara Lee</strong> is artistic director of the Irene Taylor Trust, a London, England-based organization that works collaboratively with people to create original music. For over thirty years, Sara has led musical projects that have engaged young people, ex-prisoners who are rebuilding their lives on release and people of all ages in prisons.</p>
            <p><strong><a href="https://irenetaylortrust.com/what-we-do/meet-the-team/office-staff-and-project-team/">Rex Horan</a></strong> is a multi-faceted musician and Project Leader for the Irene Taylor Trust. In this capacity has led over 150 musical projects for current and ex-prisoners throughout Great Britain and Wales.</p>
        </div>
    </div>

    <!-- Josh Fink -->
    <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/06/josh-and-jonathan.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p><a href="http://josh--fink.tumblr.com/bio"><strong>Josh Fink</strong></a> is a composer, teacher, and bassist living in Montreal, Canada. Josh currently splits his time between Montreal and Chicago, where he is a teaching artist and composer for the Chicago Symphony Orchestra.</p>
        </div>
    </div>

    <!-- Sarah Ponder Takesha Mishé Kizart -->
    <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/05/Sarah-and-Allison-and-Takesha.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p>Mezzo-soprano<a href="https://www.sarahpondermezzo.com/bio-1/"><strong> Sarah Ponder </strong></a>enjoys a busy career as a soloist and ensemble singer with Lyric Opera Chicago, Chicago Symphony Chorus, Grant Park Chorus, Chicago a cappella, and many others. She has been a teaching artist for the Chicago Symphony Orchestra since 2010.</p>
            <p>Soprano<a href="http://takeshameshekizart.com/web/bio.aspx"><strong> Takesha Mishé Kizart </strong></a>has performed in opera houses and with major symphony orchestras across the world. A performer since the age of two, she is a grand-niece of Muddy Waters on her mother’s side and a distant relative of Tina Turner.</p>
        </div>
    </div>

    <!-- Musicians -->
    <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
           <?php masterslider("musicians"); ?>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p>Under the visionary leadership of Zell Music Director Riccardo Muti and Judson and Joyce Green Consultant Yo-Yo Ma, the<a href="https://cso.org/institute/"><strong> Chicago Symphony Orchestra’s Negaunee Music Institute </strong></a>produces programs that educate audiences, train young musicians and serve the city of Chicago and the world through music.</p>
            <p>Members of the Civic Orchestra of Chicago (and <em>former members</em>) included Carmen Abelson, Joy Vucekovich, <em>Tara Lynn Ramsey</em>, Liaht Slobodkin, Joy Vucekovich (violins); Roslyn Green, Seth Pae (violas); Denielle Wilson (cello); <em>James Hall</em> (bass); Christy Kim, <em>Patrick Tsuji</em> (flutes); Siyoon Park (oboe); <em>Zachary Good</em> (clarinet)</p>
        </div>
    </div>

   <!-- NfP Design and Development -->
   <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/05/website-team.jpg" alt="" width="500" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p>A team of designers and developers based in Chicago came together on nights and weekends in 2018 to build this website. The team includes Ben Callanta, Kate Guarna, Lindsey Jones, Ross Kelly, Gracelyn Newhouse, Patrice Payne, Vinithra Rajagopalan, Rick Ridgway, Brian Wandawa, Sheena Wang, and Paul Wiggin.</p>
        </div>
    </div>

   <!-- Todd Rosenberg -->
   <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/06/todd-r.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p><a href="http://toddrphoto.com/"><strong>Todd Rosenberg</strong></a> is a Chicago-based photographer whose clients include the Chicago Symphony Orchestra, the National Football League, Hubbard Street Dance, Sports Illustrated and many others.</p>
        </div>
    </div>

   <!-- Todd Rosenberg -->
   <div class="row py-3">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img class="img-fluid" src="/wp-content/uploads/2018/06/mat-lejeune.jpg" alt="" width="500" height="300" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8">
            <p><a href="http://www.chicagorecording.com/mat-lejeune/"><strong>Mat Lejeune</strong></a> is a recording engineer with the Chicago Recording Company and an invaluable collaborator on this project.</p>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>