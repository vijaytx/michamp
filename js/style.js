function add_row()
{
 $rowno=$("#employee_table tr").length;
 $rowno=$rowno+1;
 $("#employee_table tr:last").after("<tr id='row"+$rowno+"'><td><input type='text' name='name[]' placeholder='Enter Name' required></td><td><input type='text' name='class[]' placeholder='Enter Class' required></td><td><input type='text' name='section[]' placeholder='Enter Section'></td><td><input type='button' class = 'delete' value='DELETE' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
function validateForm() {

  var x = document.forms["myForm"]["name"].required;
  var y = document.forms["myForm"]["school_name"].required;
  var z = document.forms["myForm"]["class"].required;
}
