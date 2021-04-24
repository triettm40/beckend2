<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web2</title>
        
        <!-- Fonts -->
          <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      
    
    </head>
    <body>
        
        <!-- comment -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Trainer</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        
        <a class="p-2 text-dark" href="#">companies</a>
        <a class="p-2 text-dark" href="#">trainers</a>
        <a class="p-2 text-dark" href="#">finds</a>
         <form class="form-inline" action="/trainerSearch">
             <input class="form-control mr-sm-2" name="trainerSearch" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
      </nav>
      
    </div>
@isset($trainerSearch)
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">List Trainers</p>
      <!-- comment -->
    </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">company_id</th>
      <th scope="col">trainer_name</th>
      <th scope="col">train_web</th>
      <th scope="col">train_email</th>
      <th scope="col">train_phone</th>
     
    </tr>
  </thead>
  <tbody>
     
      @foreach($trainerSearch as $trainers)
    <tr>
    <th scope="row">{!! $trainers-> train_id !!}</th>
      <th scope="row">{!! $trainers-> train_name !!}</th>
       <th scope="row">{!! $trainers-> train_wed !!}</th>
        <th scope="row">{!! $trainers-> train_email !!}</th>
         <th scope="row">{!! $trainers-> train_phone !!}</th>
        
    
    </tr>
    @endforeach
    
   
  </tbody>
  <table>
    
      {{$trainerSearch -> links()}}

  </table>
  </table>        <!-- comment -->
    @endisset

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  


  

</body>
  
</html>
