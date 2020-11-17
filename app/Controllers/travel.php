<?php

namespace App\Controllers;

 

class Travel extends BaseController
{

    public function index()
    {
         // connect to the model

        $places = new \App\Models\Places();

            // retrieve all the records

        $records = $places->findAll();
        
        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1, 2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
            $nameLink = anchor("travel/showme/$record->id",$record->name);
            $imageLink = '<img src="/image/'.$record->image.'"height=250px width=250px "">';
            $nameLinks = anchor("travel/showme/$record->id","http://dgpt4711.local/index.php/travel/showme/$record->name");
            $table->addRow($nameLink,$imageLink,$nameLinks);
  
}
        $template = [
'table_open' => '<table cellpadding="5px">',
'cell_start' => '<td style="border: 1px solid #dddddd;">',
'row_alt_start' => '<tr style="background-color:#dddddd">',
];
$table->setTemplate($template);

$parser = \Config\Services::parser(); // tell it about the substitions

 $fields = [
 'title' => 'LQ Team',
 'heading' => 'LQ Team',
 'footer' => 'CYC'
 ];

        return $parser->setData($fields) ->render('templates\top') .
 $table->generate() .
 $parser->setData($fields)  
 ->render('templates\bottom');
        
        // get a template parser




    }
public function showme($id)

{
    // connect to the model

$places = new \App\Models\Places();

// retrieve all the records

$record = $places->find($id);


        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $displayHeadings = array_slice($headings, 0, 6);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
       // foreach ($records as $record) {
            $nameLink = '<img src="/image/'.$record['image'].'">';
                
            $table->addRow($record['id'],$record['name'],$record['country'],$record['description'],$record['link'],$nameLink);
  
//}
        $template = [
'table_open' => '<table cellpadding="5px">',
'cell_start' => '<td style="border: 1px solid #dddddd;">',
'row_alt_start' => '<tr style="background-color:#dddddd">',
];
$table->setTemplate($template);

// get a template parser

$parser = \Config\Services::parser(); // tell it about the substitions 
//return $parser->setData($record)

// and have it render the template with those

//->render('oneplace');

 $fields = [
 'title' => 'LQ Team',
 'heading' => 'LQ Team',
 'footer' => 'CYC'
 ];

 return $parser->setData($fields) ->render('templates\top') .
 $table->generate() .
 $parser->setData($fields)  
 ->render('templates\bottom');
}
}