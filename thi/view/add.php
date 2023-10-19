<?php

?>

<form action="index.php?page=groups&action=store" method="post">
    <table>
        <caption><h3>Add new group</h3></caption>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>country:</td>
            <td>
                <input type="text" name="country">
            </td>
        </tr>
        <tr>
            <td>square:</td>
            <td>
                <input type="text" name="square">
            </td>
        </tr>
        <tr>
            <td>gdp:</td>
            <td>
                <input type="text" name="gdp">
            </td>
        </tr>
        <tr>
            <td>decription:</td>
            <td>
                <input type="text" name="decription">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>