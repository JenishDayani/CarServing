
<!doctype html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Snippet - BBBootstrap</title>
        <link href='' rel='stylesheet'>
        <style></style>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container">
            <div class="row header" style="text-align:center;color:green">
                <h3>Bootstrap table with pagination</h3>
            </div>
            <table" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>{{$b->id}}</td>
                       <td>{{$b->brand_name}}</td>
                       <td>
                        <form method="post" action="{{route('brand.destroy',$b->id)}}">
                          @csrf
                          @method('DELETE')
                          <a href="{{route('brand.edit',$b->id)}}" class="btn btn-success">EDIT</a>
                          <input type="submit" class="btn btn-danger" name="" value="DELETE">
                      </form>
                  </td>
              </tr>
              
          </tbody>
          
      </table>
  </div>
</body>
</html>