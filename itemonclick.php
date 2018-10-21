<!DOCTYPE html>
<html>
  <head>
	  <title>Item info</title>
    <link rel = "stylesheet" href = "css/home.css">
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  </head>
  <body>
      <script type="text/javascript" src="js/loaditem.js"></script>

      <div class = "container" style="border:1px solid #cecece;">

        <div class = "row">
          <div class = "panel panel-default">
            <div class = "panel-body" style="max-height: 10;"> Item Name </div>
          </div>
        </div>

        <div class = "container">
          <div class = "row">
            <div class = "col-md-6">
              <div class = "panel panel-primary">
                <div class = "panel-heading"> Total </div>
                <div class = "panel-body" style="max-height: 10;"> Total amt </div>
              </div>
            </div>
            <div class = "col-md-6">
              <div class = "panel panel-primary">
                <div class = "panel-heading"> Returned </div>
                <div class = "panel-body" style="max-height: 10;"> Returned amt </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
			      <div class="panel panel-primary">
				      <div class="panel-heading">
					      <h3 class="panel-title">Given to</h3>
					      <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				      </div>
				      <div class="panel-body" >
                <div class="table-responsive">

                  <table id="mytable" class="table table-bordred table-striped">
                   
                    <thead>
                   
                      <th>Lab/Cabin no</th>
                      <th>Item name</th>
                      <th>Quantity</th>
                      <th>Resp person</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
    
                      <tr>
                        <td>208</td>
                        <td>mouse</td>
                        <td>10</td>
                        <td>Kau</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                      <tr>
                        <td>210</td>
                        <td>keyboard</td>
                        <td>20</td>
                        <td>sandeep</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
		        	</div>
		        </div>
		
	        </div>
        </div>

        <div class = "container">
	        <div class="row">
			      <div class="panel panel-info">
				      <div class="panel-heading">
					      <h3 class="panel-title">Item info</h3>
					      <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
				      </div>
				      <div class="panel-body">
                <div class="table-responsive">

                
                  <table id="mytable" class="table table-bordred table-striped">
                        
                    <tbody>
                      <tr>
                        <td>Item 1</td>
                      </tr>
                      <tr>
                        <td>Item 2</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

              </div>
			      </div>
		      </div>	
	      </div>
      </div>
  </body>
</html>