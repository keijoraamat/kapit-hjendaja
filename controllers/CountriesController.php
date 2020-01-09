<?php

class CountriesController {

    public function index() {

        global $app;
        $countries = $app['database']->selectAll('country');

        return view('countries', ['countries' => $countries]);
    }

    public function add() {

        global $app;
        $app['database']->insert('country', [
            'name' => $_POST['country_name'],
            'order_nr' => 100,
        ]);
        
        header('Location: /countries');
    }

    public function delete()  {
        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $countries = $app['database']->selectById('country', $id);

        if (is_object ($countries)) {
            $dbResponse = $app['database'] ->deleteById('country', $countries->id);
           $result = 'Kaduski ära :)';
        }
        $result = empty($result) ? 'Ei taha kustudada' : $result;
        echo $result;

        $countries = $app['database']->selectAll('country');

        return view('countries', ['countries' => $countries]);
    }

    public function edit() {

        global $app;
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $countries = $app['database']->selectById('country', $id);
        return view('modify', ['countries'=>$countries]);
    }


}