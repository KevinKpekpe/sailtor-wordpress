<?php

/**
 * Bootstrap 5 Walker Menu 
 */
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $classes = array('dropdown-menu'); 
        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));

        $output .= "{$n}{$indent}<ul class=\"{$class_names}\">{$n}"; 
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $item->classes[] = 'nav-item'; 

        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= $indent . '<li id="menu-item-' . $item->ID . '" class="' . implode(' ', $classes) . '">'; // Ajout de la classe 'dropdown' si nécessaire
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        if (! $element)
            return;

        $id_field = $this->db_fields['id'];

        if (is_object($args[0])) {
            $args[0]->has_children = ! empty($children_elements[$element->$id_field]);

            if ($args[0]->has_children && $depth === 0) {
                $element->classes[] = 'dropdown';
            }
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}
