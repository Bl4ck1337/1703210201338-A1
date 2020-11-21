<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style> 
    .modal{
      color: #000; 
    }
  </style>

  <title>Students List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">


</head>

<body>
  <div class="container">
    <div class= "jumbotron text-center">
      <h2>List OF Students</h2>
      


    </div class="jumbotron text-center">
    
    <div class="table-responsive">
      <table class="table table-dark table-striped" id="studentstbl">
        <thead>
          <th>Name
            
          </th>
          <th>Email
            
          </th>
          <th>dob
            
          </th>
          <th>description
            
          </th>
          <th>city
            
          </th>
          <th>address
            
          </th>
          <th>contact
            
          </th>
          
          <th>Actions
            
          </th>
          <tbody>
            @foreach($data as  $s)
            <tr>
              <td>{{ $s->name }}</td>
              <td>{{ $s->email }}</td>
              <td>{{ $s->dob }}</td>
              <td>{{ $s->description }}</td>
              <td>{{ $s->city }}</td>
              <td>{{ $s->address }}</td>
              <td>{{ $s->contact }}</td>
              
              <td><a class="btn btn-success" href="{{ URL::to('edit-employee/'.$s->id) }}">Edit</a>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $s->id}}">Delete</button>

                

                    <!-- The Modal -->
                    <div class="modal" id="modal{{ $s->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Delete Confimation</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                            Are you want to delete <b><i>{{ $s->name }}</i></b> ?
                          </div>
                          
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <a class="btn btn-danger" href="{{ URL::to('delete-employee/'.$s->id) }}">Yes</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                          
                        </div>
                      </div>
                    </div>


              </td>

            </tr>

            @endforeach

            

          </tbody>
        </thead>


      </table>

    
      
    </div>
  </div>


<script>
  $(document).ready( function () {
    $('#studentstbl').DataTable();
} );
</script>
</body>
</html>
