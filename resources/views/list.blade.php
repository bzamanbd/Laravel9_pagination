<center>
 <h3>List of Member</h3>
 <table border="1">
  <tr>
   <th>ID</th>
   <th>NAME</th>
   <th>EMAIL</th>
  </tr>
  @foreach ($members as $member)
  <tr>
   <td>{{ $member->id}}</td>
   <td>{{ $member->name}}</td>
   <td>{{ $member->email}}</td>
  </tr>

  @endforeach
 </table>
 <div>
  {{ $members->links() }}
 </div>
 <style>
  .w-5{
   display: none;
  }
 </style>
</center>