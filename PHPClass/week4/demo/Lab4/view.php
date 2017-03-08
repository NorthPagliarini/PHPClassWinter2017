<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        
           include_once './functions/dbconnect.php';
           include_once './functions/dbData.php';
           include_once './functions/Search.php';       
           
           $column= filter_input(INPUT_GET, 'column');
           if ($column == NULL)
           {
                $column = id;
           }
           $order= filter_input(INPUT_GET, 'order');
           
           if ($order == NULL)
           {
                $order = "ASC";
           }
           $searchTerms = filter_input(INPUT_GET, 'searchTerms');         
           
          $results = searchForThis($searchTerms, $column, $order);
        if($searchTerms != NULL) :  
            if((count($results)) > 0) : 
                ?><h1><?php echo (count($results)) ?> Results returned!</h1><?php
            endif;
        endif;
        
        ?>
        
        
        
       <form action="#" method="get">
           <?php include './includes/form1.php' ?>
           <?php include './includes/form2.php' ?>
           <input <a class="btn btn-primary" type="submit" value="Submit" />
       </form>
       <?php include './includes/showtestResults.html.php' ?>
      
           
    </body>
</html>
