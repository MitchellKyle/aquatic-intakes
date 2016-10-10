<?php

App::get('database')->search('intakes', $_POST['q']);

header('Location: /search');