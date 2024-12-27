<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>

<div class="sm:mx-auto sm:w-full sm:max-w-md mt-20">
        <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                            login to your account

        </h2>
        <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
            Or
            <a href="../views/register.php"
                class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Create a new account             </a>
        </p>
    </div>


<div class="flex justify-center items-center h-screen p-10 ">
  <div class="grid md:grid-cols-2 grid-cols-1  border rounded-3xl">
    <div class="flex justify-center items-center p-5">
      <form action="" id="validation" >
        <h1 class="text-center mb-10 font-bold text-4xl">Login</h1>
        <input id="email" type="email" class=" bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3" placeholder="Email">
        <input id="password" type="password" class=" bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3" placeholder="Password">
        <button type="submit" class=" bg-yellow-400 hover:bg-yellow-500 border outline-none rounded-md py-3 w-full px-4 font-semibold text-white">submit</button>
      </form>
    </div>
    <div class="">
      <img src="../assest/image/fitnesse.webp" class="rounded-3xl"  alt="">
    </div>
  </div>
</div>
    


<script>

const namePattern = /^[a-zA-Z\s]+$/;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; 
        const passwordPattern = /^(?=.*[a-zA-Z0-9]).{4,}$/;


        document.getElementById('validation').addEventListener('submit', function(event) {
              
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;

              

                if (!emailPattern.test(email)) {
                    alert("please enter a valid email address.");
                    event.preventDefault();
                    return;
                } 

                if (!passwordPattern.test(password)) {
                    alert("password must be at least 4 characters long");
                    event.preventDefault();
                    return;
                }

        });




</script>
</body>
</html>