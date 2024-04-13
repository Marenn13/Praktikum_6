<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form method="POST" action="Process.php"> 
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td width="130">NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td width="130">WaktuLogin</td>
                <td><input type="date" name="WaktuLogin"></td>
            </tr>
            <tr>
                <td width="130">Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="btnLogin" value="Login"></td>
            </tr>
        </table>          
    </form>
</body>
</html>
