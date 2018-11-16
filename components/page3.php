<h1>Page 3</h1>
<form action="post.php" method="post">

<?php
//if(isset($_GET['error'])) { //pārbaudīs vai mainīgais eksistē, ja izpildīsies 
if (isset($_SESSION['error'])) { //šeit uzsākam sesiju (īstermiņa datubāzi)
    ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-danger"> 
                    You've filled invalid data!
                </div>
            </div>
        </div>
    <?php
unset($_SESSION['error']); //šo uzliekam, lai atslēgtu nost uzsetoto sesijas eroru - uzreiz parādam, uzreiz izdzēšam
}
?>

<?php
//if(isset($_GET['success'])) { //pārbaudīs vai mainīgais eksistē, ja izpildīsies 
if (isset($_SESSION['success'])) {
    ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-success"> 
                    Yay, user is created!
                </div>
            </div>
        </div>
    <?php
unset($_SESSION['success']); //šeit tas pats
}
?>

    <div class="row">
        <div class="col">
            <label>Email</label><br/>
            <input type="text" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Password</label><br/>
            <input type="password" name="password">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Retype password</label><br/>
            <input type="password" name="password2">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>First name</label><br/>
            <input type="text" name="first_name">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Last name</label><br/>
            <input type="text" name="last_name">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="save">
        </div>
    </div>
</form>