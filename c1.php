<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="ell.css">
  <title>LOGIN PAGE</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="c3.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">REMEMBER ME<br><br> <a href="#">FORGOT PASSWORD</a></label>
                      
                    </div>
                    <button>LOG IN</button>
                    <div class="register">
                        <p>Don't have an account? <a href="#">REGISTER</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>