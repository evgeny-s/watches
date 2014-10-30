<?php

class Frontend
{
    public function processRequest() {
        $items = $this->getItems();
        $result_search = array();

        if (! $items) {
            #for debug mode
            //echo 'Json error: ' . json_last_error();
            echo 'Some error';
        } else {
            $request = $_GET;

            $search = new Search();
            $result_search = $search->doSearch($request, $items);
        }

        return array(
            'all_attributes' => $result_search['all_attributes'],
            'selected_attributes' => $result_search['selected_attributes'],
            'result_items'  => $result_search['result_items'],
            'all_counts' => $result_search['all_counts']
        );
    }

    /*
        return items collection
     */
    private function getItems() {
        $json_decoder = new JsonDecoder();
        $items = $json_decoder->getAll();

        /*
        #in case if data in mysql database for example
        $mysql = new MysqlConnector();
        $mysql->getAll();
        */

        return $items;
    }
}