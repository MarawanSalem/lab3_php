<?php 
// print_r($_GET);
$userData;

function data(){if(!empty($_GET["name"]) && 
    !empty($_GET["email"]) && 
    !empty($_GET["group"] )&&
    !empty($_GET["gender"] ))
    { 
        $courses = is_array($_GET['course']) ? $_GET['course'] : array($_GET['course']);

        $courses = implode(", ", $_GET['course']); 
        return 
        "Welcome ". $_GET['name']. "<br />".
        "You're Email is: ". $_GET['email']. "<br />" .
        "you are in group #: ". $_GET['group'].  "<br />".
        "You are ". $_GET['gender'].'<br />'.
        "your tech stack ". $courses . "<br />";
    }
}

?>

<form>
    <form method = "GET" action = "<?php $_PHP_SELF ?>">
    <legend>AAST_BIS class registration</legend>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required ><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="group">Group #:</label>
    <input type="number" id="group" name="group"><br>

    <label>Class details:</label>
    <textarea></textarea><br>

    Gender:
        Female<input type='radio' name='gender' value='female'>
        Male<input type='radio' name='gender' value='male'><br>

        Select Courses:
        PHP<input type='checkbox' name='course[]' value='PHP'>
        JavaScript<input type='checkbox' name='course[]' value='JavaScript'>
        MySQL<input type= 'checkbox'name= 'course[]'value= 'MySQL'>
        HTML<input type= 'checkbox'name= 'course[]'value= 'HTML'><br>

        Agree:<input type = "checkbox"><br>
        
        Submit:<button>Submit</button><br>
    </form>
    <h1> your data are:</h1>
    <p>
        <?= data() ?>
    </p>
</form>
