<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supermarket</title>
        <style>
          table {
              margin-top: 50px;
              border-collapse: collapse;
              text-align: center;
              width: 100%;
          }
          td, th {
              border: 1px solid LightGray;
              padding: 10px;
          }
          tr:nth-child(even) {
              background-color: LightGray;
          }
        </style>
    </head>
    <body>
      <div>
          <div>Supermarket</div>
          <div>
              <a href="admins">Admins</a>
              <a href="attributes">Attributes</a>
              <a href="blocks">Blocks</a>
              <a href="categories">Categories</a>
              <a href="category_groups">CategoryGroups</a>
              <a href="characteristics">Characteristics</a>
              <a href="controller_inputs">ControllerInputs</a>
              <a href="customer_inputs">CustomerInputs</a>
              <a href="customers">Customers</a>
              <a href="environments">Environments</a>
              <a href="frames">Frames</a>
              <a href="frame_types">FrameTypes</a>
              <a href="session_games">SessionGames</a>
              <a href="gamemodes">Gamemodes</a>
              <a href="gaze_inputs">GazeInputs</a>
              <a href="managers">Managers</a>
              <a href="playgrounds">Playgrounds</a>
              <a href="product_details">ProductDetails</a>
              <a href="products">Products</a>
              <a href="purchases">Purchases</a>
              <a href="sceneries">Sceneries</a>
              <a href="sessions">Sessions</a>
              <a href="shelves">Shelves</a>
              <a href="suppliers">Suppliers</a>
          </div>
          <table>
            <thead>
              <tr>
                @foreach($columns as $col)
                  <th>{{$col}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                  <tr>
                    @foreach($columns as $col)
                      <td>{{ $row->$col }}</td>
                    @endforeach
                 </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </body>
</html>
