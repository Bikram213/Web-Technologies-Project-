
        function validate() 
        {
            const roleUser = document.getElementById("user").checked;
            const roleAdmin = document.getElementById("admin").checked;
            let username = document.getElementById("userName").value;

            if (username == "") {
                alert("Give a User Name");
                return false;
            }

            for (let i = 0; i < username.length; i++)
            {
                let char = username[i];
                if (!(char >= 'A' && char <= 'Z') &&
                    !(char >= 'a' && char <= 'z') &&
                    char !== ' ') 
                    
                {
                    document.getElementById("msg").innerHTML = "Name can only contain letters and spaces";
                    return false;
                }
            }

            const word = username.trim().split(" ");
            if (word.length < 2) {
                document.getElementById("msg").innerHTML = "Enter Full name";
                return false;
            }

            if (!roleAdmin && !roleUser) {
                alert("Please Select a role: User or Admin");
                return false;
            }

            if (roleUser) {
                window.location.href = "userDashboard.php";
                return false;
            } 
            else if (roleAdmin) {
                window.location.href = "adminDashboard.php";
                return false;
            }
            return true;
        }
