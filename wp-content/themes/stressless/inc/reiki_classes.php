<?php
/**
 * @package stressless
 */

class ReikiClassDescriptions {
  public $classes;

  public function __construct() {
    $this->getClassDescriptions();
  }

  public function getClassDescriptions() {
    $this->classes = [];

    $args = array (
      'post_type'  => 'class_descriptions',
      'orderby' => 'title',
      'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $class = [];

        $class['title'] = get_the_title();
        $class['subtitle'] = get_field('class_descr_subtitle');
        $class['short_description'] = get_field('class_descr_short');
        $class['additional_description'] = get_the_content();

        $this->classes[] = $class;
      }
    }
    wp_reset_postdata();

    return $this->classes;
  }
}

/* Queries for classes */
class ReikiClasses {
  public $classes;

  public function __construct() {
    $this->getClasses();
  }

  public function getClasses() {
    $this->classes = [];

    $args = array (
      'post_type'  => 'classes',
      'meta_key' => 'class_date',
      'meta_value' => date('Ymd'),
      'meta_compare' => '>=',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
    );

    $query = new WP_Query($args);

    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        $class = [];

        $class_type_terms = get_the_terms(get_the_ID(), 'class_types');
        foreach($class_type_terms as $class_type) {
          $class['type'] = $class_type->name;
        }
        $class_location_terms = get_the_terms(get_the_ID(), 'class_locations');
        foreach($class_location_terms as $class_location) {
          $class['location'] = $class_location->name;
        }

        $class_date = new DateTime(get_field('class_date'));
        $class['date-raw'] = get_field('class_date');
        $class['date'] = $class_date->format('F j, Y');  
        $class['time'] = get_field('class_time');
        $class['link'] = get_field('class_link');

        $this->classes[] = $class;
      }
    }
    wp_reset_postdata();

    return $this->classes;

  }

}

class ReikiClassLocations {
  public $locations;

  public function __construct() {
    $this->getClassLocations();
  }

  public function getClassLocations() {
    $this->locations = [];



    return $this->locations;
  }
}
