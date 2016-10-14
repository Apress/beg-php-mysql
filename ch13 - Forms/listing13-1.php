<?php

    require_once "HTML/QuickForm2.php";
    require_once 'HTML/QuickForm2/Renderer.php';

    $languages = array(
        '' => 'Choose Language:',
        'C#' => 'C#',
        'JavaScript' => 'JavaScript',
        'Perl' => 'Perl',
        'PHP' => 'PHP'
    );

    $form = new HTML_QuickForm2('languages', 'POST');

    $fieldSet = $form->addFieldset()->setLabel('Your Developer Profile');

    $name = $fieldSet->addText('name')->setLabel('Your Name:');
    $name->addRule('required', 'Please provide your name.');

    $email = $fieldSet->addText('email')->setLabel('Your E-mail Address:');
    $email->addRule('required', 'Please provide your e-mail address.');

    $language = $fieldSet->addSelect('language', null, array('options' => $languages));
    $language->setLabel('Choose Your Favorite Programming Language:');
    $language->addRule('required', 'Please choose a programming language.');

    $fieldSet->addElement('submit', null, 'Submit!');

    if ($form->validate()) {
      echo "<p>SUCCESS</p>";
    }

    $renderer = HTML_QuickForm2_Renderer::factory('default')
                            ->setOption(array('group_errors'  => true));

    echo $form->render($renderer);

?>

