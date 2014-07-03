<?php
/*
 * Template Name: Classes Page
 * Description: Loops through 'classes' post type
 *
 * @package stressless
 */

get_header(); ?>
<main role="main">
  <div class="container">
    <header class="section-header">
      <h2 class="classes-header">Reiki Classes in Atlanta, GA</h2>
      <aside id="classes-ceu">
        <p>Classes are approved for Continuing Education Credits through Atlanta School of Massage. Each class is 6 CEUs.</p>
      </aside>
    </header>
    <hr>
    <div class="container">  
<?php 
$class_descriptions_query = new ReikiClassDescriptions();
/* print_r($class_descriptions_query)->classes; */
foreach($class_descriptions_query->classes as $class):
?>
      <section class="class-info">
        <header class="class-header">
        <h1><?php echo $class['title']; ?></h1>
        <h2><?php echo $class['subtitle']; ?></h2>
        <?php echo $class['short_description']; ?>
<?php if ($class['additional_description']): ?>
        <a href="#" class="read-more lead-text" data-text-original="See more info" data-text-expanded="Hide additional info">See more info</a>
<?php endif; ?>
        </header>
<?php if ($class['additional_description']): ?>
        <div class="additional">
          <?php echo $class['additional_description']; ?>
        </div>
<?php endif; ?>
        </section>
        <hr>
<?php endforeach; ?>
            <section class="class-schedule">
              <h1>Upcoming Class Schedule</h1>
              <?php
                $classes_query = new ReikiClasses();
              ?>
              <table>
                <thead>
                  <tr>
                    <td>Date</td>
                    <td>Level</td>
                    <td>Location</td>
                    <td></td>
                  </tr> 
                </thead>
                <tbody>
                <?php
                  foreach($classes_query->classes as $class):
                    ?>
                    <tr>
                    <td><?php echo $class['date']; ?></td>
                    <td><?php echo $class['type']; ?></td>
                    <td><?php echo $class['location']; ?></td>
                    <td><a href="<?php echo $class['link']; ?>" class="button">Sign up</a></td>
                    </tr>
                    <?php
                    endforeach;
                ?>
              </tbody>
              </table>
            </section>
            <section class="class-locations">
              <h2>Class Locations</h2>
<?php
$locations = get_terms('class_locations');
foreach($locations as $location): 
?>
<h4><?php echo $location->name; ?></h4>
<?php echo wpautop($location->description); ?>
<?php
endforeach;
?>
            </section>

          </div>
        </main>


        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
