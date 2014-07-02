<?php
/**
 * Queries classes
 *
 * @package stressless
 */

class ReikiClasses {
  public $classes;

  public function __construct($class_type) {
    $this->getClasses($class_type);
  }

  public function getClasses($class_type) {
    $this->classes = [];

    $args = array (
      'post_type'  => 'classes',
      'class_type' => $class_type
    );

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $class = [];
        $class_date = new DateTime(get_field('class_date'));
        $class['date'] = $class_date->format('F j');  
        $class['year'] = $class_date->format('Y');
        $class['day'] = $class_date->format('l');
        $class['time'] = get_field('class_time');
        $class['link'] = get_field('class_link');

        $this->classes[] = $class;
      }
    }
    wp_reset_postdata();

    return $this->classes;

  }

}

class classData {
  public $data;
  public function show($class, $field) {
    switch ($field) {
    case 'datetime':
      return '<h3>' . $class['day'] . ', ' . $class['date'] . ', ' . $class['year'] . ' from ' . $class['time'] . '</h3>';
      break;
    case 'button':
      echo '<a href="' . $class['link'] . '" class="button">Sign up for ' . $class['date'] . '</a>';
      break;
    }
  }
}
