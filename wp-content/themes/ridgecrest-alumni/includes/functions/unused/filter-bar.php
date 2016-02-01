<?php
	/**
	 * Quick example of adding a custom filter
	 * A simple copy and paste of the existing Category filter
	 * Refer to the last line for how it adds itself to the interface
	 * Find this new filter in: WP Admin > Events > Settings > Filterbar
	 * Docs for TribeEventsFilter: http://docs.tri.be/Filter-Bar/class-TribeEventsFilter.html
	 */
class TribeEventsFilter_Custom extends TribeEventsFilter {
        public $type = 'select';
 
        public function get_admin_form() {
                $title = $this->get_title_field();
                $type = $this->get_type_field();
                return $title.$type;
        }
 
        protected function get_type_field() {
                $name = $this->get_admin_field_name('type');
                $field = sprintf( __( 'Type: %s %s', 'tribe-events-filter-view' ),
                        sprintf( '<label><input type="radio" name="%s" value="select" %s /> %s</label>',
                                $name,
                                checked( $this->type, 'select', false ),
                                __( 'Dropdown', 'tribe-events-filter-view' )
                        ),
                        sprintf( '<label><input type="radio" name="%s" value="checkbox" %s /> %s</label>',
                                $name,
                                checked( $this->type, 'checkbox', false ),
                                __( 'Checkboxes', 'tribe-events-filter-view' )
                        )
                );
                return '<div class="tribe_events_active_filter_type_options">'.$field.'</div>';
        }
 
        protected function get_values() {
                $event_categories = array();
                $event_categories_term = get_terms( TribeEvents::TAXONOMY, array( 'orderby' => 'name', 'order' => 'DESC' ) );
                $event_categories_by_id = array();
                foreach( $event_categories_term as $term ) {
                        $event_categories_by_id[$term->term_id] = $term;
                }
                $event_categories_by_id_reverse = array_reverse( $event_categories_by_id );
                $parents = array( '0' );
                while ( !empty( $parents ) ) {
                        $parents_copy = $parents;
                        foreach ( $event_categories_by_id_reverse as $term ) {
                                if ( in_array( $term->parent, $parents_copy ) ) {
                                        $parents[] = $term->term_id;
                                        unset( $event_categories_by_id[$term->term_id] );
                                        $event_categories_by_id = TribeEvents::array_insert_after_key( $term->parent, $event_categories_by_id, array( $term->term_id => $term ) );
                                }
                        }
                        $parents = array_diff( $parents, $parents_copy );
                }
                $child_spacer = '&nbsp;&nbsp;';
                foreach( $event_categories_by_id as $cat ) {
                        $child_depth = 0;
                        $parent_id = $cat->parent;
                        while ( $parent_id != 0 ) {
                                $child_depth++;
                                $parent_id = $event_categories_by_id[$parent_id]->parent;
                        }
                        $child_indent = str_repeat($child_spacer, $child_depth);
                        $event_categories[] = array(
                                'name' => $child_indent . $cat->name,
                                'value' => $cat->term_id,
                                'data' => array(
                                        'slug' => $cat->slug,
                                ),
                        );
                }
                return $event_categories;
        }
 
        protected function setup_query_args() {
                $this->queryArgs = array( 'tax_query' => array( array(
                        'taxonomy' => TribeEvents::TAXONOMY,
                        'field' => 'id',
                        'terms' => $this->currentValue,
                        'include_children' => false,
                ) ) );
        }
 
}
 
// This adds our new filter to the Filterbar options
// Invokes TribeEventsFilter::__construct($name, $slug);
$taxonomy_example = new TribeEventsFilter_Custom('Teams', 'team-event');

?>