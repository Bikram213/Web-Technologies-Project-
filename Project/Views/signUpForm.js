function validate()
		{
			let name= document.getElementById("name").value.trim();
			let roleUser=document.getElementById("user").checked;
			let roleAdmin=document.getElementById("admin").checked;

			let studentID =document.getElementById("sId").value.trim();
			let email=document.getElementById("email").value.trim();
			let password = document.getElementById("password").value;

			let department=document.getElementById("department").value;
			let file=document.getElementById("file").value;

			let msg= document.getElementById("msg");

		

			//name
			if (name=="")
			{
				msg.innerHTML="Give User Name";
				msg.style.color="red"
				return false;
			}

			for (let i = 0; i < name.length; i++)
            {
                let char = name[i];
                if (!(char >= 'A' && char <= 'Z') &&
                    !(char >= 'a' && char <= 'z') &&
                    char !== ' ') 
                    
                {
                    msg.innerHTML = "Name can only contain letters and spaces";
                    return false;
                }
            }

            const word = name.trim().split(" ");
            if (word.length < 2) {
                document.getElementById("msg").innerHTML = "Enter Full name";
                return false;
            }

			//student id

			if (studentID=="")
			{
				msg.innerHTML="Give a Student ID";
				return false;
			}
			if (isNaN(studentID))
			{
				msg.innerHTML = "Enter a valid Student ID (numbers only)";
           		return false;

			}

			if (studentID.length !== 8) 
			{
    			msg.innerHTML = "Student ID must be exactly 8 digits long";
				return false;
			}

			email
			if (email === "") 
			{
				msg.innerHTML = "Email cannot be empty";
				return false;
			}

			if (!email.includes("@") || !email.includes(".")) 
			{
				msg.innerHTML = "Email must contain '@' and '.'";
				return false;
			}

			if (email.indexOf("@") > email.lastIndexOf("."))
			{
				msg.innerHTML = "'.' must come after '@' in email";
				return false;
			}

			//password

			if (password === "") 
			{
				msg.innerHTML = "Password cannot be empty";
				return false;
			}

			if (password.length < 6) 
			{
				msg.innerHTML = "Password must be at least 6 characters long";
				return false;
			}

			let hasNumber = false;
			for (let i = 0; i < password.length; i++) 
			{
				if (password[i] >= '0' && password[i] <= '9') 
				{
					hasNumber = true;
					break;
				}
			}
			if (!hasNumber) 
			{
				msg.innerHTML = "Password must contain at least one number";
				return false;
			}

			// if (department === "") 
			// {
			// 	msg.innerHTML = "Please select a department";
			// 	msg.style.color = "red";
			// 	return false;
			// }

            if (department === "") 
			{
				msg.innerHTML = "Please select a department";
				msg.style.color = "red";
				return false;
			}






			if(!roleAdmin && !roleUser)

			{
				msg.innerHTML="Please select a role : User or Admin";
				msg.style.color ="red";
				return false;
			}


			if (image === "") 
			{
				msg.innerHTML = "Please choose an image file";
				msg.style.color = "red";
				return false;
			}

			

			if(roleUser)
			{
				//link user role

			}

			else if (roleAdmin)
			{
				//link user admin
			}

		}