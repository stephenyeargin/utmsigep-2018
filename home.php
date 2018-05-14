<?php
/**
 * Template Name: Home Page
 */
?>

<html lang="en">
  <head>
    <?php require_once(get_template_directory() . '/includes/meta.php'); ?>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php get_header(); ?>

    <div class="home-header">
      <div class="container p-5 text-center">
        <div class="home-header-content">
          <h1 class="display-4 pt-5">
            Welcome to <span>Sigma Phi Epsilon</span> at<br />
            The University of Tennessee at Martin.
          </h1>
          <ul class="list-inline display-2 pt-5 pb-5">
            <li class="list-inline-item"><a href="https://twitter.com/utmsigep"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/sigeptnkappa/"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/utm_sigep/"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container home-facts mt-5">
      <div class="card-columns">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/family-day-group.jpg" alt="Group Photo">
          <div class="card-body">
            <h5 class="card-title h3">Leaders on campus and in the community</h5>
            <p class="card-text">Our brothers are proud to volunteer with, and often have leadership roles, in other organizations at UT Martin. Each may have its own mission, but all are about improving the communities of those the organization serves.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/founders.jpg" alt="Founders">
          <div class="card-body">
            <h5 class="card-title h3">Founded nationally in 1901</h5>
            <p class="card-text">Our fraternity was founded at the University of Richmond quickly became one of the fastest growing fraternities in the nation. Today we have more than 15,000 undergraduate members and chapters on more than 228 campuses.</p>
            <p class="card-text text-right"><a href="http://sigep.org/about/history-and-facts/" class="btn btn-link" target="_blank">Learn More</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title h2">Colonized on the UT Martin campus in 1993</h5>
            <p class="card-text">Sigma Phi Epsilon granted UT Martin an expansion colony on March 7, 1993. They were the seventh national fraternity on campus at the time.</p>
          </div>
          <img class="card-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/charter-group-photo.jpg" alt="Chartering">
          <div class="card-body">
            <h5 class="card-title h2">Chartered in 1995</h5>
            <p class="card-text">After two years on campus, we were awarded the Tennessee Kappa designation as a chapter of Sigma Phi Epsilon.</p>
            <p class="card-text text-right"><a href="/chapter" class="btn btn-link" target="_blank">Learn More</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title h3">Different backgrounds, different majors</h5>
            <p class="card-text">Our brothers come from all over the country &ndash; small towns and big cities &ndash; and can be found in every academic building on campus.</p>
            <p class="card-text">Our member development program emphasizes a shared responsibility of the chapter to strive for academic excellence, no matter the area of study.</p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rope-pull-group-flag.jpg" alt="Flag">
          <div class="card-body">
            <h5 class="card-title h3">A Sound Mind supported by a Sound Body</h5>
            <p class="card-text">We encourage each other to stay phsyically active through participation in Intramural Sports as well as training for campus activities during Greek Week and Homecoming. We believe that a commitment to physical health will serve our brothers during their time in collee and beyond.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title h3">No pledging, no hazing</h5>
            <p class="card-text">Every brother has equal rights and responsibilities from the day they join, from the newest member to the chapter president. We extend invitations throughout the year to prospective members.</p>
            <p class="card-text">Hazing of any kind has no place in our fraternity, and is dishonorable to the principles upon which the Fraternity was founded.</p>
            <p class="card-text text-right"><a href="http://sigep.org/resources/member-safety/education-and-resources/hazing/" class="btn btn-link" target="_blank">Learn More</a></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top p-4" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/balanced-man.svg" alt="">
          <div class="card-body">
            <h5 class="card-title h4">The Balanced Man Program</h5>
            <p class="card-text">SigEp implements a comprehensive, four-year program that helps our brothers be successful in college and for the professional world afterward.</p>
            <p class="card-text">It is an award-winning program that has become the envy of other fraternities for its forward-thinking approach to building balanced leaders.</p>
            <p class="card-text text-right"><a href="http://sigep.org/bmp" class="btn btn-link" target="_blank">Learn More</a></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/group-conclave.jpg" alt="Group Photo">
          <div class="card-body">
            <h5 class="card-title h3">Grand Chapter Conclave</h5>
            <p class="card-text">Members of our chapter travel every two years to the Grand Chapter Conclave, a four-day event where the fraternity shapes its future. Conclave was in Nashville in 2005 and 2015.</p>
            <p class="card-text text-right"><a href="http://sigep.org/conclave" class="btn btn-link" target="_blank">Learn More</a></p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title h3">Carlson Leadership Academy</h5>
            <p class="card-text">Our undergraduate leaders attend regional conferences each year for training relevant to their role in the fraternity and how to run a more effective chapter.</p>
            <p class="card-text text-right"><a href="http://sigep.org/carlson" class="btn btn-link" target="_blank">Learn More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container home-officers mt-5 text-center">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <h3 class="mb-3">{{ site.data.officers.title }}</h3>
          <div class="row">
          {% for officer in site.data.officers.items %}
            <div class="col-md-3 mb-3">
              <img src="{{ officer.photo_url }}" alt="{{ officer.name }}" class="img-fluid img-thumbnail mb-3" /><br />
              <strong>{{ officer.name }}</strong><br />
              {{ officer.title }}
            </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
    
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
