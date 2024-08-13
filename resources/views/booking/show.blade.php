<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <div>
            <br>
            <a href="booking.create">Add Record</a>
            <br>
            <!-- {{session('msg')}} -->
            <br>
           <table id='customers'>
               <tr>
                   <td>Id</td>
                   <td>Destination</td>
                   <td>How Many</td>
                   <td>Arrival</td>
                   <td>Leaving</td>
                   <td>Contact</td>
                   <td>Email</td>
                   <td>Created at</td>
                   <td>Action</td>
               </tr>
               @foreach($bookingArr as $book)
               <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->destination}}</td>
                    <td>{{$book->howMany}}</td>
                    <td>{{$book->arrival}}</td>
                    <td>{{$book->leaving}}</td>
                    <td>{{$book->contact}}</td>
                    <td>{{$book->email}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>
                        <a class="bg bg-danger text-white" href="booking.delete/{{$book->id}}">Delete</a>
                        <a class="bg bg-warning text-dark" href="booking.edit/{{$book->id}}">Edit</a>
                </td>
                  
               </tr>
               @endforeach
           </table>
        </div>
    </body>
</html>
