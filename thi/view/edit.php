<?php

?>

<form action="index.php?page=groups&action=update" method="post">
<input type="hidden" name="id" value="<?php echo $result['id']?>">
<table>
    <caption><h3>Chỉnh sửa thành phố</h3></caption>
    <tr>
        <td>Tên:</td>
        <td>
            <input type="text" name="name" value="<?php echo $result['name']?>">
        </td>
    </tr>
    <tr>
        <td>Quốc gia:</td>
        <td>
            <input type="text" name="country" value="<?php echo $result['country']?>">
        </td>
    </tr>
    <tr>
        <td>Diện tích:</td>
        <td>
            <input type="text" name="square" value="<?php echo $result['square']?>">
        </td>
    </tr>
    <tr>
        <td>Dân số:</td>
        <td>
            <input type="text" name="square" value="<?php echo $result['square']?>">
        </td>
    </tr>
    <tr>
        <td>GDP:</td>
        <td>
            <input type="text" name="gdp" value="<?php echo $result['gdp']?>">
        </td>
    </tr>
    <tr>
        <td>Giới thiệu:</td>
        <td>
            <input type="text" name="decription" value="<?php echo $result['decription']?>">
        </td>
    </tr>
    <tr>
            <td></td>
            <td class="button-container">
                <button type="submit">Cập nhật</button>
            </td>
            <td class="button-container">
                <button type="submit">Thoát</button>
            </td>
        </tr>
</table>
</form>