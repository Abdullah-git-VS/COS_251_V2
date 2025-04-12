<DOCTYPE html>
    <html>

    <head>
        <title> my project </title>
        <style>body {
  font-family: Arial, sans-serif;
  direction: rtl;
  text-align: center;
}

button {
  padding: 10px 20px;
  margin-top: 100px;
  font-size: 16px;
  cursor: pointer;
}

.login-popup {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
}

.popup-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 30px;
  border-radius: 10px;
  width: 300px;
  text-align: right;
  position: relative;
}

.popup-content h2 {
  margin-top: 0;
}

.popup-content input {
  width: 100%;
  padding: 8px;
  margin: 8px 0;
  box-sizing: border-box;
}

.popup-content button {
  width: 100%;
  padding: 10px;
  background-color: #009688;
  color: white;
  border: none;
  cursor: pointer;
}

.popup-content button:hover {
  background-color: #00796b;
}

.close {
  position: absolute;
  top: 10px;
  left: 15px;
  font-size: 24px;
  cursor: pointer;
}
</style>
    </head>

    <body>
        <div class="container">
            <header>
                <a href="#" class="logo"> transport </a>
                <ul>
                    <li> <a href="Sign In.php" onclick=""> registration </a> </li>
                    <li> <a href="#"> order services </a> </li>
                    <li> <a href="#"> accessories </a> </li>
                    <li> <a href="#"> about </a> </li>
                    <li> <a href="#"> profile </a> </li>
                </ul>
            </header>

            <div class="content">
                <h2> Transportation services </h2>
                <p> we focus on providing safe, reliable, and stress-free transportation for animals of all kinds. whether you need to relocate a pet, transport livestock or move exotic animals</p>
                <button> click for more </button>


            </div>
            <button id="openLogin">تسجيل الدخول</button>

            <div class="login-popup" id="loginPopup">
                <div class="popup-content">
                    <span class="close" id="closePopup">&times;</span>
                    <h2>تسجيل الدخول</h2>
                    <form>
                        <label for="username">اسم المستخدم:</label>
                        <input type="text" id="username" name="username" required />

                        <label for="password">كلمة المرور:</label>
                        <input type="password" id="password" name="password" required />

                        <button type="submit">دخول</button>
                    </form>
                </div>
            </div>
            <script src="New folder\script.js"></script>

    </body>

    </html>