<?php

class DirectorController extends Controller
{
    // todo: check if right
    public static function display(int $id)
    {
        $director = new Director();

        return Controller::loadLayoutTemplate('person', $data);
    }
}