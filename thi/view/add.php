<?php

?>

<form action="index.php?page=groups&action=store" method="post">
    <table>
        <caption><h3>Thêm thành phố</h3></caption>
        <tr>
            <td>Tên:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Quốc gia:</td>
            <td>
                <input type="text" name="country">
            </td>
        </tr>
        <tr>
            <td>Diện tích:</td>
            <td>
                <input type="text" name="square">
            </td>
        </tr>
        <tr>
            <td>Dân số:</td>
            <td>
                <input type="text" name="square">
            </td>
        </tr>
        <tr>
            <td>GDP:</td>
            <td>
                <input type="text" name="gdp">
            </td>
        </tr>
        <tr>
            <td>Giới thiệu:</td>
            <td>
                <input type="text" name="decription">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Nhập thành phố</button></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Thoát</button></td>
        </tr>
    </table>
</form>