<h1>PHP Test Application</h1>
<input type="text" id="input" onkeyup="filter()" placeholder="Filter by City...">
<table id="users">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>Phone No.</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>
	<!-- add php tags here -->
		<?php foreach($users as $user){ ?>   
		<tr>
			<td><?=$user->getName()?></td>
			<td><?=$user->getEmail()?></td>
			<td><?=$user->getPhone()?></td>
			<td><?=$user->getCity()?></td> 
		</tr>
		<?php }?>
		
	</tbody>
</table>
<br>		

<form  name="input-form" action="create.php" class="form-horizontal" onsubmit="return validateForm()" method="post">
	
	<label for="name">Name:</label>
	<input name="name" input="text" id="name"/>
	
	<label for="email">E-mail:</label>
	<input name="email" input="text" id="email"/>

	<label for="phone">Phone No:</label>
	<input name="phone" input="text" id="phone"/>
	
	<label for="city">City:</label>
	<input name="city" input="text" id="city"/>
	
	<input type="submit" value="Create new row">
</form>

<div class="footer">
  <p>Created by Robert O Driscoll</p>
</div>


<script>
function filter() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("users");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function validateForm() {
  var x = document.forms["input-form"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
