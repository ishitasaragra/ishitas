<script>
  function validate(){
      var firstname = document.forms["myform"]["firstname"].value;
	  if (firstname == "" || firstname == null)
	  {
		  alert('please fill out the user firstname');
		  return false;
	  }
	  
	  var lastname = document.forms["myform"]["lastname"].value;
	  if (lastname == "" || lastname == null)
	  {
		  alert('please fill out the user lastname');
		  return false;
	  }
	  
	   var email = document.forms["myform"]["email"].value;
	  if (email == "" || email == null)
	  {
		  alert('please fill out the email');
		  return false;
	  }
	  
	   var mail = /^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	  if (!mail.test(email))
	  {
		  alert('please fill in a proper email');
		  return false;
	  }
	  
	  var password = document.forms["myform"]["password"].value;
	  if (password == "" || password == null)
	  {
		  alert('please fill out the password');
		  return false;
	  }
	  
	  if (!(password.length >=3 && password.length <=8))
	  {
		  alert('please provide a password minimum of 3 and a maximum of 8 characters');
		  return false;
	  }
	  
	  var address = document.forms["myform"]["address"].value;
	  if (address == "" || address == null)
	  {
		  alert('please fill out the user address');
		  return false;
	  }
	  
	  var phonenumber = document.forms["myform"]["phonenumber"].value;
	  if (phonenumber == "" || phonenumber == null)
	  {
		  alert('please fill out the user phonenumber');
		  return false;
	  }
	   
	   // validate the select country
	  var selectElement = document.getElementById("inputstate");
	  var selectedValue = selectElement.value;
	  
	  if (selectedValue === "")
	  {
		  alert("please select a country.");
		  return false;
	  }
	  
	  // validate the image file
	  
      var fileInput = document.forms["myform"]["file"];
	  var allowedExtensions = ["jpg", "jpeg", "png", "gif"];
	  var maxFileSizeInBytes = 5 * 1024 * 1024;
	  
	  if (fileInput.file.length === 0)
	  {
		  alert("please select an image file.");
		  return false;
	  }
	  
	  var filename = fileInput.files[0].name;
	  var fileExtension = filename.split(".").pop().toLowercase();
	  
	  if (allowedExtensions.indexof(fileExtension) === -1)
	  {
		  alert("Invalid file type. Allowed file types are: " + allowedExtensions.join(","));
		  return false;
	  }

      if  (fileInput.files[0].size > maxFileSizeInBytes)
	  {
		  alert("File size exceeds the maximum allowed size of 5MB.");
		  return false;
	  }
	  
  }
	  
  </script>