<?php
/*
 * Template Name: Classes Page
 * Description: Loops through 'classes' post type
 *
 * @package stressless
 */

get_header(); ?>

	<main role="main">
    <?php
    // WP_Query arguments
    $args = array (
      'post_type'              => 'classes',
    );

    // The Query
    $query = new WP_Query( $args );

    // The Loop
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $class_date = new DateTime(get_field('class_date'));
        echo $class_date->format('l, F j, Y') . ' from ' . get_field('class_time');
      }
    } else {
      // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>

 <div class="container">
  <header class="section-header">
    <h2 class="classes-header">Reiki Classes in Atlanta, GA</h2>
    <aside id="classes-ceu">
      <p>Classes are approved for Continuing Education Credits through Atlanta School of Massage. Each class is 6 CEUs.</p>
    </aside>
  </header>
  <hr>
<div class="container">  
<section class="class-info">
       <header class="class-header">
           <h1>Level 1: Reiki for Beginners</h1>
           <h2 class="double-trailer">Learn the healing art of Reiki in just six hours</h2>
           <h3 class="no-trailer">Sunday, July 20, 2014 from 11:00 am to 5:00 pm</h3>
           <h3>Sunday, August 3, 2014 from 11:00 am to 5:00 pm</h3>
           
       </header>

       <article>
           <p class="lead-text">Here’s your opportunity to begin incorporating this life-changing tool into your daily routine. In just six hours, you will learn how to bring harmony and a sense of calm into your life and the lives of your family, friends, clients and pets.</p>
           <p>Classes are taught by Atlanta’s leading Reiki Master, Michal (pronounced Mee-hal’) Spiegelman.  Michal is an expert in balanced living, a Certified Professional Life Coach, popular keynote speaker and the founder of Balanced Moments.</p>
           <p>With 16 years of experience as a Reiki Master, Michal has certified hundreds of Reiki practitioners worldwide and has created a cohesive Reiki community in Atlanta.  Michal has a special talent for helping people realize their full potential and lead fulfilling lives.</p>
           <p>At the end of your Reiki Level 1 training, you will be certified to give Reiki to yourself and others.  You will also be encouraged to practice self-Reiki every day.</p>
           <p>To live a balanced and rewarding life, it’s essential to take good care of yourself before taking care of others.  Many of us give so much to other people that little energy is left for ourselves.  This is the value of Reiki’s potential to heal, relax and center you, day after day.</p>
           <section class="call-to-action">
            <h4>$150, or three payments of $60</h4>
            <h3 class="no-trailer">Sunday, July 20, 2014 from 11:00 am to 5:00 pm</h3>
            <h3>Sunday, August 3, 2014 from 11:00 am to 5:00 pm</h3>
            <a href="https://wg117.infusionsoft.com/app/orderForms/b3922992-cbc4-4ca2-95a2-c1713e346e88" class="button tight">Sign up for July 20</a>  
            <a href="https://wg117.infusionsoft.com/app/orderForms/2cfdd2fe-fae1-4617-bfa5-3bb84ded1f11" class="button">Sign up for August 3</a>
            <p>If you need Continuing Education Credits, <a href="http://www.atlantaschoolofmassagecommunity.com/2/workshops.asp">please register through Atlanta School of Massage.</a></p>
       </article>
       <aside>
        <img src="/images/reikiclass-2.jpg" alt="Reiki Class with Michal Spiegelman">
        <section class="class-features">
         <header><h4>You will learn:</h4></header>
        <ul>
            <li>The history of the ancient art of Reiki which began in Japan</li> 
            <li>Your first attunement (or initiation to this new skill). Once attuned, Reiki becomes available to you forever</li>
            <li>Correct hand positions for self-Reiki</li>
            <li>Correct hand positions for giving Reiki to others – family, friends, clients and pets </li>
            <li>Official certification to give Reiki to yourself and others</li>
        </ul>
        </section>
            <address>
                <h4>Location:</h4> 
                <p>Atlanta School of Massage<br />   
                2 Dunwoody Park Atlanta, GA 30338<br />
                (770) 454-7167<br />
                <a href="http://www.atlantaschoolofmassage.com/contact/" target="_blank">Directions</a>
            </p>
        </address>
        <p>To ensure quality teaching and hands-on learning, classes are limited to 20 students.</p>
        

</aside>
       </section>
       <hr>
           <section class="class-info">
              <header>
                  <h1>Level 2: Intermediate Reiki</h1>
                  <h2>Develop a deeper understanding and learn to send long distance Reiki</h2>
                  <h3>Sunday, July 27, 2014 from 9:00 am to 6:00 pm</h3>
              </header>
              <article>
                 <p class="lead-text">Our Level 2 Training teaches students how to send Reiki to people who are not present and to address specific emotional and physical conditions. This class is open to Reiki students who have taken the Level 1 class and have been practicing daily self-Reiki for a minimum of 4 weeks.</p>
                 <p>In addition to elevating the energy of the physical body, which you learned in Reiki Level 1, this class will focus on the mental, emotional and spiritual aspect of healing that will make you a more effective healer.</p>
                 <p>You will be able to:</p>
                 <ul>
                     <li>Conduct a stronger form of mental, emotional and spiritual healing</li> 
                     <li>Easily access your intuition so you can make choices and decisions supported by your own inner wisdom and connect better to people</li>
                     <li>Use Long Distance Reiki to help friends, family and pets no matter where they are.</li>
                     <li>Use a new powerful tool to protect your energy so you don’t pick up negative energy from others</li>
                     <li>Use Reiki as a tool to guide you on your spiritual path</li>
                 </ul>
                  <section class="call-to-action">
                   <h3>Sunday, July 27, 2014 from 9:00 am to 6:00 pm</h3>
                   <h4>$250, or three payments of $99</h4>
                   <a href="https://wg117.infusionsoft.com/app/orderForms/5df1b7d8-a300-4f33-af0e-2081a49fa65c" class="button">Sign up for July 27</a>
                   <p>If you need Continuing Education Credits, <a href="http://www.atlantaschoolofmassagecommunity.com/2/workshops.asp">please register through Atlanta School of Massage.</a></p>
              </article>
              <aside>
               <img src="/images/classroom.jpg" alt="Reiki Class with Michal Spiegelman">
               <section class="class-features">
                <header><h4>You will learn:</h4></header>
                    <ul>
                        <li>The Power Technique – Allows you to make the energy flow stronger when needed.</li>
                        <li>The Mental/Emotional Technique – Allows you to tap into the cause rather than just the symptom of any situation.</li>
                        <li>The Long-Distance Reiki Technique – Allows you to send Reiki to people and situations when they are not present.</li>
                    </ul>
               </section>
                   <address>
                       <h4>Location:</h4> 
                       <p>Atlanta School of Massage<br />   
                       2 Dunwoody Park Atlanta, GA 30338<br />
                       (770) 454-7167<br />
                       <a href="http://www.atlantaschoolofmassage.com/contact/" target="_blank">Directions</a>
                   </p>
               </address>
       </aside>
              </section>
              <hr>
                  <section class="class-info">
                     <header>
                         <h1>Master Level: Advanced Reiki</h1>
                         <h2>Become certified as a Reiki Master, authorized to teach</h2>
                         <h3 class="no-trailer">Sunday, August 24, 2014 from 9:00 am to 6:00 pm</h3>
                         <h3>Sunday, November 16, 2014 from 9:00 am to 6:00 pm</h3>
                     </header>
                     <article>
                       <p class="lead-text"> Becoming a Reiki Master is an empowering process of self-development, the final step in your Reiki Training. Reiki Level 2 practitioners can benefit from completing the training whether or not they plan to teach. Our focus when teaching the Master Level is to provide our students with knowledge, skills and an increased level of vibration to deepen their connection and understanding of Reiki.</p>
                       <p>Class includes:</p>
                       <ul>
                          <li>Learning and practicing the Master Technique.</li>
                          <li> The Master Attunement Process which allows you to tap into the Master Level energetic vibration.</li>
                          <li>Learning and practicing other modalities to expand your healing skills.</li>
                          <li>   Learning and practicing the Attunement Processes for each level, so you can attune other people to Reiki.</li>
                          <li>Hands-on guided practice of a full treatment, integrating all modalities that have been presented.</li>
                          <li>The basics of teaching Reiki</li>
                          <li> Learning how to integrate Reiki fully into your family and personal life.</li>
                          <li>Michal’s comprehensive Reiki Teaching Manual for all levels.</li>
                      </ul>
                         <section class="call-to-action">
                          <h3 class="no-trailer">Sunday, August 24, 2014 from 9:00 am to 6:00 pm</h3>
                          <h3>Sunday, November 16, 2014 from 9:00 am to 6:00 pm</h3>
                          <h4>$650, or three payments of $240</h4>
                          <a href="https://wg117.infusionsoft.com/app/orderForms/f69a670b-fc78-48e2-a11e-35c36e54d256" class="button">Sign up</a>
                          <p>If you need Continuing Education Credits, <a href="http://www.atlantaschoolofmassagecommunity.com/2/workshops.asp">please register through Atlanta School of Massage.</a></p>
                     </article>
                     <aside>
                      <section class="class-features">
                       <p>The Master Certification Training is open to our Level 2 graduates. If you have taken your Levels 1 &amp; 2 training with another teacher, please contact us to schedule a private meeting so we can see if we’re a good fit and to help you prepare for the class.</p>
                      </section>
                          <address>
                              <h4>Location:</h4> 
                              <p>Atlanta School of Massage<br />   
                              2 Dunwoody Park Atlanta, GA 30338<br />
                              (770) 454-7167<br />
                              <a href="http://www.atlantaschoolofmassage.com/contact/" target="_blank">Directions</a>
                          </p>
                      </address>
              </aside>
                     </section>
       </div>
	</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
