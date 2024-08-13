<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Booking</title>

        <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
        
    </head>
    <body>
      <br>
      <a href="booking_show">Back</a>
      <br><br>
        <form action="booking_submit" method='post'>
        <!-- error '419 page expired ' occurs if we didn't write below 'csrf' -->
          @csrf     
          <table id='customers'>
            <tr>
              <td>Where To</td>
              <td><input type="text" name="whereTo" required></td>
            </tr>
            <tr>
              <td>How Many</td>
              <td><input type="text" name="howMany" required></td>
            </tr>
            <tr>
              <td>Arrival</td>
              <td><input type="text" name="arrival" required></td>
            </tr>
            <tr>
              <td>Leaving</td>
              <td><input type="text" name="leaving" required></td>
            </tr>
            <tr>
              <td></td>
              <td><button >Submit</button></td>
            </tr>
          </table>
        </form>
    </body>
</html>
