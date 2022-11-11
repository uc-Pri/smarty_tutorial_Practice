<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
$smarty = new Smarty;

// chapter 14

// add directory where config files are stored 
// $smarty->addConigDir('./config_1'); --- add directory\
// $template_dir = $smarty->getTemplateDir();  ---get directory


// add directory where plugins are stored
// $smarty->addPluginsDir('./plugins_1'); ----add plugins


// get all assigned template vars
// $all_tpl_vars = $smarty->getTemplateVars(); ---get template variables
// print_r($all_tpl_vars);

// $smarty->setCaching(Smarty::CACHING_LIFETIME_CURRENT); 
// if(!$smarty->isCached('templates.tpl')) { --returns true if cache is valid for this template
// do database calls, assign vars here}

// load prefilter named 'trim'
// $smarty->loadFilter('pre', 'trim');  --load a filter plugin

// Register a class to use in a template  
// class Bar {
//       $property = "hello world";
//     }
    
//     $smarty = new Smarty();
//     $smarty->registerClass("Foo", "Bar");

    


//$smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->assign("Name","Prince");
$smarty->assign("clg","Mangalmay");
$smarty->assign("clg2","institute");
$smarty->assign("code",786);
$smarty->assign("rollno",65);
$smarty->assign("prince","Prince");
$smarty->assign("bar","Prince sinha");
$smarty->assign("foo","Prince sinha");
$smarty->assign('Contacts', array(
    '555-222-9876',
    'zaphod@slartibartfast.example.com',
     array('555-444-3333',
           '555-111-1234')
     ));
$smarty->assign('Movie',  'Two Soviet Ships Collide - One Dies.
Enraged Cow Injures Farmer with Axe.'
);
$smarty->assign('Movie2', 'Movies');
$smarty->assign('start',10);
$smarty->assign('to',5);

$smarty->assign('cust_checkboxes', array(
      1000 => 'Joe Schmoe',
      1001 => 'Jack Smith',
      1002 => 'Jane Johnson',
      1003 => 'Charlie Brown')
    );
$smarty->assign('customer_id', 1001);

$smarty->assign('myOptions', array(
      1800 => 'Joe Schmoe',
      9904 => 'Jack Smith',
      2003 => 'Charlie Brown')
      );
$smarty->assign('mySelect', 9904);


$smarty->assign('cust_radios', array(
      1000 => 'Joe Schmoe',
      1001 => 'Jack Smith',
      1002 => 'Jane Johnson',
      1003 => 'Charlie Brown'));
$smarty->assign('customer_id', 1001);



$smarty->display('templates.tpl');
$smarty->testInstall(); 


// $output = $smarty->fetch('templates.tpl');  --fetch 
// do something with $output here
// echo $output;
?>

