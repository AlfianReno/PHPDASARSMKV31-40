<h3>Insert User</h3>

<div class ="form-group">
    <form action="" method="post">
        <div class ="form-group w-50">
            <label for="">Nama User</label>
            <input type="text" name="user" required placeholder="Isi user...." class="form-control">
        </div>

        <div class ="form-group w-50">
            <label for="">Emailr</label>
            <input type="email" name="email" required placeholder="Isi email...." class="form-control">
        </div>

        <div class ="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="Isi password...." class="form-control">
        </div>

        <div class ="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="Isi password...." class="form-control">
        </div>

        <div class ="form-group w-50">
            <label for="">Level</label><br>
            <select name="level" >
                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>
            </select>
        </div>

        <div>
            <input type="submit" name ="simpan" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>

<?php 


    if(isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES ('', '$user', '$email', '$password', '$level', 1)";
            $db ->runSQL($sql);
            header("location:?f=user&m=select");

        }else {
            echo "<h2>PASSWORD ANDA TIDAK SAMA</h2>";   
        }
        

        
        
    }


?>

