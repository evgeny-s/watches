<?php

class Search {
    public function doSearch($request, $items) {
        $selected_attributes = isset($request['attributes']) ? $request['attributes'] : array();

        $result_items = array();

        if (! count($selected_attributes)) {
            $result_items = $items;
        }

        $all_attributes = array();
        $index = 1;
        $all_counts = array();

        /* Looking for the need information in a single pass through the loop */
        foreach($items as $i) {
            $attributes = $i->attributes;
            if (count($attributes)) {
                foreach($attributes as $a) {
                    /* Take unique values of attributes */
                    if (! in_array($a, $all_attributes)) {
                        $all_attributes[$index] = $a;
                        $all_counts[$index] = 0;
                        $index++;
                    }

                    /* Process count with this attributes if not checked */
                    $s_index = array_search($a, $all_attributes);
                    if ($s_index) {
                        if (! in_array($a, $selected_attributes)) {
                            $sum_array = $selected_attributes + array($a);
                            if (count(array_intersect($sum_array, $attributes)) == count($sum_array)) {
                                $all_counts[$s_index]++;
                            }
                        }
                    }
                }
            }

            /* Check if show the item. you can extend search functionality here for extended search. For example && `some_attribute` == `some_string` */
            if (count(array_intersect($selected_attributes, $attributes)) == count($selected_attributes)) {
                $result_items[] = $i;
            }
        }

        return array(
            'all_attributes' => $all_attributes,
            'selected_attributes' => $selected_attributes,
            'result_items'  => $result_items,
            'all_counts' => $all_counts

        );
    }

}